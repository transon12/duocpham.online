<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Info_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','web']);
		$this->_config->load('config');
		$this->_model->load('home');
		$this->_model->load('blog');
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

	public function contactAction(){
		$data['base_url'] = $this->_config->item('base_url'); //echo $data['base_url'];
		$this->_view->load('contact',$data);
	}
	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;];
		
		$this->_view->load('info',$data);
	}
	public function detailAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;
		if (isset($_GET) && !empty($_GET)) {
			$id= explode('-', $_GET['code'])[4];
			$idcheck= explode('-', $_GET['code'])[5];
			if(md5($id)==$idcheck){
				$data['item']= $this->_model->blog->getBlogDetail($id);//print_r ($id); die;
				$data['new']= $this->_model->blog->getListBlogid($data['item']['id_cate']);
				$data['categories']= $this->_model->blog->getcategoryBlogCount();
				$tags= $this->_model->blog->getcategoryKey(); 
				 $tagWords= array();
				 if(!empty($tags)){
				 	foreach ($tags as $key => $v) {
				 		if(!empty($v['tags'])){
				 			$tagWords=array_unique(array_merge($tagWords,explode(',',trim($v['tags'],','))));
				 		}
				 	}
				 }
				 $data['tagWords']=array_values($tagWords);// echo '<pre>'; print_r ( $data['tagWords']); die;
				$this->_view->load('blogDetail',$data);
			}else{
				url_returnPage($this->_baseUrl.'/blog','Truy cập sai hướng, vui lòng truy cập lại');
			}
		}
		
	}
	public function sendcontactAction(){
		if(isset($_POST) && !empty($_POST)){
			if (!empty($_POST['name'] && !empty($_POST['email']))) {
				$inputs= array(
					'name'=> str_CheckString($_POST['name']),
					'email'=> str_CheckString($_POST['email']),
					'content'=> str_CheckString($_POST['message']),
					'type_contact'=> 0,
					'status'=> 1,
					'date_created'=> date('Y-m-d H:i:m', time())
				);
				// print_r($inputs); die;
				$this->_model->blog->insertContact($inputs);
				url_returnPage($this->_baseUrl.'/blog/contact','Cảm ơn! Chúng tôi sẽ liên hệ với bạn');
			}else{
				url_returnPage($this->_baseUrl.'/blog/contact','Vui lòng nhập đầy đủ thông tin');
			}
		}else{
				url_returnPage($this->_baseUrl.'/blog/contact','Vui lòng nhập đầy đủ thông tin');
			}
	}



}