<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Product_Model extends VV_Model{
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
    
	function add($table,$data){
		$this->insert1($table,$data);
    }
    function checkname($table,$data){
		$sql = "SELECT * FROM $table WHERE name = '".$data."'";// echo $sql;
		return $this->get_row1($sql);
    }
    function getcate(){
		$sql = "SELECT * FROM category";
		return $this->get_list1($sql);
    }
    function checkcode($table,$data){
		$sql = "SELECT * FROM $table WHERE code = '".$data."'";
		return $this->get_row1($sql);
    }
    function updated($table,$data,$where){
		$this->update1($table,$data,$where);
	}
	function getcate1(){
		$sql = "SELECT * FROM category WHERE active = 1";
		return $this->get_list1($sql);
	}

}