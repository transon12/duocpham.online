<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Blogdetails_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}
	
	function get_blog_list(){
		$sql = "SELECT * FROM tbl_blog_list";
		return $this->get_list($sql);
	}

	function get_list_blog_pages($start,$limit){
		$sql = "SELECT * FROM tbl_blog_list ORDER BY date_create DESC LIMIT $start,$limit";
		return $this->get_list($sql);
	}	

	function get_list_popular(){
		$sql = "SELECT * FROM tbl_blog_list ORDER BY views DESC LIMIT 1,5";
		return $this->get_list($sql);
	}	

	function get_list_cat(){
		$sql = "SELECT * FROM tbl_blog_category WHERE active = 1";
		return $this->get_list($sql);
	}

	function get_list_tag(){
		$sql = "SELECT tags FROM tbl_blog_category";
		return $this->get_list($sql);
	}

	function get_count_cat(){
		$sql = "SELECT * FROM tbl_blog_list WHERE cat_code = 'cong-nghe'";
		return $this->get_count($sql);
	}
}