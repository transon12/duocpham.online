<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Contact_Controller extends VV_Controller{
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

	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url'); //echo $data['base_url'];
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');
		$data['item']= $this->_model->blog->get_data(4);
		$data['category']= $this->_model->home->Get_listCategory();

		$this->_view->load('contact',$data);
	}
	





}