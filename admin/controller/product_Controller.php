<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Product_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','upload']);
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
                    'url_code'=> isset($_POST['url_code']) ? str_checkString($_POST['url_code']) : '',
					'code' => str_createCodeBlog(),
					'createdAt' => date('Y-m-d H:i:s',time()) , 
					'price' => isset($_POST['price']) ? $_POST['price'] : '',
					'active' => isset($_POST['active']) ? $_POST['active'] : '',
                    'hotProduct' => isset($_POST['product_hot']) ? $_POST['product_hot'] : '',
                    'descriptions' => $_POST['content'],
                );
                // print_r($input); die;
                
				if(!empty($input['name'])&&!empty($input['code'])&&!empty($input['descriptions'])){
						$this->_library->load('fileuploader',array(
							'uploadDir' => 'upload/product/',
							'title' => '{file_name}_{timestamp}',
							'inputs' => 'images'
						));
						$files = $this->_library->fileuploader->upload(); 
                        $img= "";
						if($files['isSuccess']==1){
                            
                            foreach ($files1 as $val ) {
								$img .= 'upload/product/'.$val.',';
                            }
                            $input['avatar'] = $img;
							$this->_model->product->add('products',$input);//die;
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
    public function listAction(){
		$data['list_cate'] = $this->_model->product->getcate();
			$data['base_url'] = $this->_config->item('base_url');
			$data['product'] = $this->_model->product->get_list_product();
			$this->_view->load('productList',$data);
    }
    public function edit_productAction(){
	
		if (isset($_GET['code'])&&$_GET['code']!='') {
            $code = str_checkString($_GET['code']); 
            
			$data['code'] = $_GET['code'];
            $data['id'] = $this->_model->product->get_id($code);
            $data['item'] = $this->_model->product->checkcode('products', $code );
            $data['avatars']= explode(',',trim($data['item']['avatar'],',')); 
            $data['avatar']= $data['avatars'][0];
			if (isset($data['item']['name'])) {
				$data['base_url'] = $this->_config->item('base_url');
				$data['list'] = $this->_model->product->getcate1();
				$this->_view->load('productEdit',$data);
			}else{
				url_returnPage($this->_baseUrl['web'].'/adw-products/list','Không tồn tại sản phẩm này');
			}
		}
    }
    public function modalAction(){
        $data['base_url'] = $this->_config->item('base_url');
        $code= $_POST['code'];
        if (isset($_POST['code']) && !empty($_POST['code'])) {
            $data['item'] = $this->_model->product->checkcode('products', $code );
            $avatars= explode(',',trim($data['item']['avatar'],',')); 
            echo json_encode($avatars);
        }
    }
    function addimgAction(){
        $data['base_url'] = $this->_config->item('base_url');
        if (isset($_POST) && !empty($_POST)) {
            $code_product = $_POST['code_product'];
            $id_products = $_POST['id_products'];
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != ['']) {
                $images = up_upLoadFileMulti($_FILES['image'],'upload/product/',['png','jpg','jpeg']);
                $imagex="";
                
                foreach ($images['name'] as $val ) {
                    $imagex.= 'upload/product/'.$val.',';
                }
                $input_img = array(
                    'avatar' => $imagex
                );
                // print_r($images);die;
                $this->_model->product->updated("products",$input_img,'code='.$code_product);
                url_returnPage($data['base_url']['web'].'/adw-product/edit_product?code='.$code_product.'','Bạn vừa thêm hình ảnh thành công');
            }
            else{
                url_returnPage($data['base_url']['web'].'/adw-product/edit_product?code='.$code_product.'','Vui lòng chọn ảnh');
            }
        }
    }
    public function updated_productAction(){
        $data['base_url'] = $this->_config->item('base_url');
		if (isset($_GET['code'])&&$_GET['code']!='') {
			$code = str_checkString($_GET['code']);
			$id = $this->_model->product->get_id($code);
			$id = $id['id'];
			if (isset($_POST['name']) && !empty($_POST['name'])) {
				$input = array(
					'name' => isset($_POST['name']) ? str_checkString($_POST['name']) : '',
					'url_code' => isset($_POST['url_code']) ? str_checkString($_POST['url_code']) : '',
					'price' => isset($_POST['price']) ? $_POST['price'] : '',
					'idCat' => isset($_POST['id_category']) ? $_POST['id_category'] : '',
					'descriptions' => isset($_POST['description']) ? $_POST['description'] : '',
					'active' => isset($_POST['active']) ? $_POST['active'] : '',
					'hotProduct' => isset($_POST['product_hot']) ? $_POST['product_hot'] : '',
				);

				if (!empty($input['name']) && !empty($input['url_code'])) {
						$this->_model->product->updated_products($input,'id= "'.$id.'"');// die;
						url_returnPage($data['base_url']['web'].'/adw-product/list','Bạn vừa cập nhật thành công');
			}
			else{
				url_returnPage($data['base_url']['web'].'/adw-product/edit_product?code='.$code.'','Thất bại ! Vui lòng điền đầy đủ nội dung');
			}
		}
		else{
			url_returnPage($data['base_url']['web'].'/adw-product/edit_product?code='.$code.'','Thất bại ! Vui lòng điền đầy đủ nội dung');
		}
	}
}
}