<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Blog_Model extends VV_Model{
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
		$sql = "SELECT * FROM tbl_blog_list a  Where a.active=1 AND a.status=1 ORDER BY date_create DESC LIMIT $start,$limit";
		return $this->get_list($sql);
	}

	function get_blog_cate($code,$start,$limit){
		$sql = "SELECT * FROM tbl_blog_list WHERE cat_code = '".$code."' ORDER BY date_create DESC LIMIT $start,$limit";
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
		$sql = "SELECT * FROM tbl_blog_category";
		return $this->get_list($sql);
	}

	function get_list_tag_cate($code){
		$sql = "SELECT * FROM tbl_blog_category WHERE code = '".$code."'";
		return $this->get_list($sql);
	}

	function get_count_cat(){
		$sql = "SELECT * FROM tbl_blog_list WHERE cat_code = 'cong-nghe'";
		return $this->get_count($sql);
	}

	function get_details_code($code){
		$sql = "SELECT * 
		FROM tbl_blog_list 
		JOIN tbl_blog_contents
		ON tbl_blog_contents.blog_code = '".$code."' 
		WHERE tbl_blog_list.code = '".$code."'";
		return $this->get_row($sql);
	}

	function get_list_blog_cate($code){
		$sql = "SELECT * FROM tbl_blog_list WHERE cat_code = '".$code."'";
		return $this->get_list($sql);
	}

	function get_name($code){
		$sql = "SELECT * FROM tbl_blog_category WHERE code = '".$code."'";
		return $this->get_row($sql);
	}
	function get_data($code){
		$sql = "SELECT * FROM tbl_blog_list a
		JOIN tbl_blog_contents
		ON tbl_blog_contents.blog_code = a.code
		 WHERE status = '".$code."'";
		return $this->get_row($sql);
	}

	function get_dataList($code){
		$sql = "SELECT * FROM tbl_blog_list a
		JOIN tbl_blog_contents
		ON tbl_blog_contents.blog_code = a.code
		 WHERE status = '".$code."'";
		return $this->get_list($sql);
	}

	 function get_list_search($keyword){
	 	$sql = "SELECT * FROM tbl_blog_list
				WHERE tags  
				LIKE '%".$keyword."%'";
		return $this->get_list($sql);
	 }

	 function get_blog_search($keyword,$start,$limit){
	 	$sql = "SELECT * FROM tbl_blog_list
				WHERE tags
				and title 
				LIKE '%".$keyword."%' ORDER BY date_create DESC LIMIT $start,$limit";
		return $this->get_list($sql);
	 }

	 function insertContact($data){
	 	$this->insert('tbl_contact',$data);
	 }
}