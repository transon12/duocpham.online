<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Tags_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password']);
		$this->_config->load('config');
		$this->_model->load('blogs');
		$this->_model->load('blog');
		ss_sessionStartNow();
	}

	public function indexAction(){ //print_r($_GET); die;
		$data['base_url'] = $this->_config->item('base_url');
		$data['list_popular'] = $this->_model->blog->get_list_popular();
		$data['list_cat'] = $this->_model->blog->get_list_cat();
		$datas = $this->_model->blog->get_list_tag();
		$datax = array_merge($datas);
		$keyword= array();
		 if(!empty($datas)){
		 	foreach ($datas as $key => $v) {
		 		if(!empty($v['tags'])){
		 			$keyword=array_unique(array_merge($keyword,explode(',',trim($v['tags'],','))));
		 		}
		 	}	
		 }
		$data['tags'] = $keyword;
		if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
			$data['keyword'] = str_replace('-',' ',$_GET['keyword']) ;
			$data['list_search'] = $this->_model->blog->get_list_search($_GET['keyword']);
			$limit = 8;
			$data['pages'] = ceil(count($data['list_search']) / $limit);
			if (isset($_GET['pages']) && $_GET['pages'] != '' ? $cr_page = $_GET['pages'] : $cr_page = 1) {
				$start = ($cr_page - 1)*$limit;
				$data['blog_search'] = $this->_model->blog->get_blog_search($_GET['keyword'],$start,$limit);
			}
			$this->_view->load('blog_search',$data);
		}else{
			header("HTTP/1.1 404 Moved Permanently"); 
			header('Location:'.$data['base_url'].'/error');
		}
	}
}