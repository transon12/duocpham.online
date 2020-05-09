<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Blogdetails_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','web']);
		$this->_config->load('config');
		$this->_model->load('home');
		$this->_model->load('blog');
		$this->_tokenName = $this->_config->item('csrf_token_name0');
		$this->_baseUrl = $this->_config->item('base_url');
		$this->_baseImg = $this->_config->item('base_img');
		$this->_baseLib = $this->_config->item('base_lib');
	}

	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$data['list_popular'] = $this->_model->blog->get_list_popular();
		$data['list_cat'] = $this->_model->blog->get_list_cat();
		if (isset($_GET['code'])) {
			$code = url_get_blogid($_GET['code']);
			// var_dump($code); die();
			$data['detail'] = $this->_model->blog->get_details_code($code);
			$keywords = $data['detail']['tags'];
			$data['keyword'] = explode(',',$keywords);
		}
		$this->_view->load('blogDetail',$data);
	}
	

}