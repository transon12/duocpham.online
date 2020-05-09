<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Error_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password']);
		$this->_config->load('config');
		ss_sessionStartNow();
	}

	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url'); //echo $data['base_url'];
		$data['head'] = array(
				'title'=>'404 Lỗi tìm kiếm',
				'title_url'=>$data['base_url'],
				'description'=>'Cooftech chuyên thiết kế web, app,design thương hiệu , cung cấp dịch vụ hạ tầng mạng, phát triển phân mềm hàng đầu Việt Nam',
				'keywords'=>'Cooftech,Web,App,Design,Ứng dụng,Phần mềm,Hạ tầng mạng,Thiết kế thương hiệu',
				'category'=>'Trang chủ',
				'url_code'=>'home',
			) ;

		$this->_view->load('error',$data);
	}
}