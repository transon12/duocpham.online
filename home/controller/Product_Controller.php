<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Product_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','web']);
		$this->_config->load('config');
		$this->_model->load('home');
		$this->_model->load('product');
		ss_sessionStartNow();
		$this->_tokenName = $this->_config->item('csrf_token_name0');
		$this->_baseUrl = $this->_config->item('base_url');
		$this->_baseImg = $this->_config->item('base_img');
		$this->_baseLib = $this->_config->item('base_lib');
		

		if(!isset($_SESSION[$this->_tokenName]['token'])){
			
		}else{
			$this->_dataUser = $this->_model->login->get_dataUserByToken($_SESSION[$this->_tokenName]['token']);
			if(empty($this->_dataUser)){
				ss_unSession($this->_tokenName);
				url_returnPage($this->_baseUrl.'/login','Tài khoản của bạn đã bị đăng nhập trên 1 thiết bị khác');
			}
		 //echo '<pre>'; print_r($_SESSION[$this->_tokenName]['cart']['total']); die;
		}
	}

	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;
		$code= $_GET['code'];
		
		if($code==='list'){
			$data['blogNew']= $this->_model->home->Get_listblog();
			$data['prodcutSort2']= $this->_model->home->Get_listProduct3();
			$data['category']= $this->_model->home->Get_listCategory(); //print_r($data['category']); die;
			$filter['category']=isset($_GET['category']) ? str_checkString($_GET['category']) : '';
			$data['list']= $this->_model->product->get_productfill($filter);//echo "<pre>"; print_r($data['poductlist']);die;
	
			$this->_view->load('productList',$data);
		}else{
		$codeCus= explode('-',$code);
		$a=array_pop($codeCus);
			$data['item']= $this->_model->product->getProductRow($a);
			$data['prodcutSort2']= $this->_model->home->Get_listProduct3();
			$data['category']= $this->_model->home->Get_listCategory(); //print_r($data['category']); die;
			$data['productbrand']= $this->_model->product->getProductlistCat($data['item']['idCat']);
			// print_r($data['productbrand']); die;
			$this->_view->load('product',$data);
		}
		
	}

}