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
		$this->insert($table,$data);
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
		$sql = "SELECT * FROM $table WHERE code = '".$data."'";// echo $sql;
		return $this->get_row1($sql);
    }
    function updated($table,$data,$where){
		$this->update($table,$data,$where);
	}
	function getcate1(){
		$sql = "SELECT * FROM category WHERE active = 1";
		return $this->get_list1($sql);
	}
	function get_list_product(){
		$sql = "SELECT a.*,
		category.name as name_cate
		FROM products a
		INNER JOIN category ON a.idCat =category.id"; //echo $sql;
		return $this->get_list1($sql);
	}
	function get_id($code){
		$sql = "SELECT id FROM products WHERE code = '".$code."'"; //echo $sql;
		return $this->get_row1($sql);
	}
	function updated_products($data,$code){
		return $this->update('products',$data,$code);
	}
	
}