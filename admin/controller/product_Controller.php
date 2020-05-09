<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Product_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password']);
		$this->_config->load('config');
		$this->_model->load('home');
        $this->_model->load('login');
        $this->_model->load('product');
		ss_sessionStartNow();
		$this->_ss_name = $this->_config->item('csrf_token_name');
		$this->_url = $this->_config->item('base_url');
		if(isset($_SESSION[$this->_ss_name]['token'])){
			$this->_user = $this->_model->login->get_userInfoToken($_SESSION[$this->_ss_name]['token']);
			if(empty($this->_user)){
				header('Location:'.$this->_url['web'].'/adw-login');
			}
		}else{
			header('Location:'.$this->_url['web'].'/adw-login');
		}
	}

	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$product = $this->_model->home->get_product();
		$data['count'] = array(
			'product'=>$product['total'],
			'category'=>$this->_model->home->get_category(),
			'blog'=>$this->_model->home->get_blog_total(),
		);
		//print_r($data); die;
		$this->_view->load('categoryProduct',$data);

    }
    public function categoryaddAction(){
        $data['base_url'] = $this->_config->item('base_url');
        $table = 'category';
        if (isset($_POST['name'])&&$_POST['name']!='') {
            $name =  str_checkString($_POST['name']);
            $check = $this->_model->product->checkname('category',$name);
            if (!isset($check['name'])) {
                $input = array(
                    'name' =>str_checkString($_POST['name']) , 
                    'code' =>str_checkString($_POST['code']) , 
                    'active' =>str_checkString($_POST['active']) , 
                    'createdAt' => date('Y-m-d H:i:s',time()) , 
                );
                
                        $this->_model->product->add($table,$input);
                        url_returnPage( $data['base_url']['web'].'/adw-product/categoryadd','Thêm thành công');
               
    
            }else{
                url_returnPage( $data['base_url']['web'].'/adw-product/categoryadd','Đã tồn tại danh mục này');
            }
        }else{
            $this->_view->load('categoryProduct',$data);
        }
    }

    public function list_categoryAction(){
        $data['base_url'] = $this->_config->item('base_url');
        $data['list'] = $this->_model->product->getcate();
        $this->_view->load('category-list',$data);
    }

    public function edit_categoryAction(){
            $data['base_url'] = $this->_config->item('base_url');
            if (isset($_GET['code'])&&$_GET['code']!='') {
                $code = str_checkString($_GET['code']);
                $data['item'] = $this->_model->product->checkcode('category',$code);
                if (isset($data['item']['name'])) {
                    $this->_view->load('category-edit',$data);
                }else{
                    url_returnPage($this->_baseUrl['web'].'/adw-product/list_category','Không tồn tại danh mục này');
                }
            }
    }
    public function update_categoryAction(){
        $data['base_url'] = $this->_config->item('base_url');
        $table = 'category';
        if (isset($_GET['code'])&&$_GET['code']!='') {
            $code = str_checkString($_GET['code']);
            $acc = $this->_model->product->checkcode('category',$code);
            if (isset($_POST['name'])&&$_POST['name']!='') {
                $name = str_checkString($_POST['name']);
                    $input = array(
                        'name' => $name, 
                        'code' => str_checkString($_POST['code']), 
                        'active' => str_checkString($_POST['active']),
                    );
    
                            $this->_model->product->updated($table,$input,'code="'.$code.'"');
                            url_returnPage(  $data['base_url']['web'].'/adw-product/list_category','Sửa thành công');
                
            }else{
                url_returnPage(  $data['base_url']['web'].'/adw-product/edit_category?code='.$code,'Vui lòng điền đẩy đủ dữ liệu');
            }
        }
    }
    public function addAction(){
		// var_dump($_GET); die();
			$data['base_url'] = $this->_config->item('base_url');
			$data['acti'] = 'products';
			$data['acti2'] = 'add_products';
			$data['list'] = $this->_model->product->getcate1();
			$table = 'products';

			if (isset($_POST['name']) &&  $_POST['name']!='') {
				$input = array(
					'name' => isset($_POST['name']) ? str_checkString($_POST['name']) : '',
					'idCat'=> isset($_POST['id_category']) ? str_checkString($_POST['id_category']) : '',
					'code' => str_createCodeBlog(),
					'createdAt' => date('Y-m-d H:i:s',time()) , 
					'price' => isset($_POST['price']) ? $_POST['price'] : '',
					'descriptions' => isset($_POST['description']) ? $_POST['description'] : '',
					'tag' => isset($_POST['tags']) ? str_checkString($_POST['tags']) : '',
					'keyword' => isset($_POST['keywords']) ? str_checkString($_POST['keywords']) : '',
					'active' => isset($_POST['active']) ? $_POST['active'] : '',
                    'hotProduct' => isset($_POST['product_hot']) ? $_POST['product_hot'] : '',
                    'descriptions' => $_POST['content'],
                );
                // print_r($input); die;
                
				if(!empty($input['name'])&&!empty($input['code'])&&!empty($input['descriptions'])&&!empty($input['tag'])&&!empty($input['keyword'])){
						$this->_library->load('fileuploader',array(
							'uploadDir' => 'upload/product/',
							'title' => '{file_name}_{timestamp}',
							'inputs' => 'images'
						));
						$files = $this->_library->fileuploader->upload(); 
						$files1 = explode(',', $files['files_name']);
                        $avatar = array_pop($files1); //xóa phần tử cuối và trả về phần tử đó
                    //  print_r($files);die;
                        $img= "";


						if($files['isSuccess']==1){
                            
                            foreach ($files1 as $val ) {
								$img .= 'upload/prodcut/'.$val.',';
                            }
                            $input['avatar'] = $img;
							$this->_model->product->add('products',$input);
                             url_returnPage($data['base_url']['web'].'/adw-product/add','Thêm mới thành công');
							
						}else{
                           echo "kiểm tra"; die;
                        }
			
            }else{
                url_returnPage($data['base_url']['web'].'/adw-product/add','Xin lỗi, Vui lòng nhập đầy đủ dữ liệu');
            }
			}else{
				$this->_view->load('product-add',$data);
            }

	}
}