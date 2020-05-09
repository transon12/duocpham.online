<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Home_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}

	function get_blog_total(){
		$sql = " SELECT count(id) as total FROM blog WHERE active=1"; //echo $sql;
		return $this->get_row($sql);
	}
	function get_product(){
		$sql = " SELECT count(id) as total FROM products "; //echo $sql;
		return $this->get_row($sql);
	}
	function get_category(){
		$sql = " SELECT count(id) as total FROM category WHERE active=1 "; //echo $sql;
		return $this->get_row($sql);
	}
}