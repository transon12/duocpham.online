<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Blogs_Controller extends VV_Controller{
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
		$data['list'] = $this->_model->blog->get_blog_list();
		$data['list_popular'] = $this->_model->blog->get_list_popular();
		$data['list_cat'] = $this->_model->blog->get_list_cat();
		$data['count_cat'] = $this->_model->blog->get_count_cat();
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
		$limit = 200;
		$data['pages'] = ceil(count($data['list']) / $limit);
		if (isset($_GET['pages']) && $_GET['pages'] != '' ? $cr_page = $_GET['pages'] : $cr_page = 1) {
			$start = ($cr_page - 1)*$limit;
			$data['list_blog'] = $this->_model->blog->get_list_blog_pages($start,$limit);
			$data['category']= $this->_model->home->Get_listCategory();
			$data['banner']	= $this->_model->home->Get_listBanner();
			$data['prodcutSort']= $this->_model->home->Get_listProduct1();
			$data['prodcutSort2']= $this->_model->home->Get_listProduct3();
			$data['group']= $this->_model->home->Get_listGroup1();
			$data['blogNew']= $this->_model->home->Get_listblog();
			$data['bloghots']= $this->_model->home->Get_listblogHot();
		}
		$this->_view->load('blogList',$data);
	}



	function searchAction(){
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
			$data['keyword'] = $_GET['keyword'];
			$data['list_search'] = $this->_model->blog->get_list_search($_GET['keyword']);
			$limit = 8;
			$data['pages'] = ceil(count($data['list_search']) / $limit);
			if (isset($_GET['pages']) && $_GET['pages'] != '' ? $cr_page = $_GET['pages'] : $cr_page = 1) {
				$start = ($cr_page - 1)*$limit;
				$data['blog_search'] = $this->_model->blog->get_blog_search($_GET['keyword'],$start,$limit);
			}
		}
		$this->_view->load('blog_search',$data);
	}
	

}