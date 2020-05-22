<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class System_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}
	function get($table){
		$sql = "SELECT * FROM $table";
		return $this->get_list1($sql);
	}
	function addnew($table,$data){
		$this->insert1($table,$data);
	}
	function getrow($table,$data){
		$sql = "SELECT * FROM $table WHERE id = '".$data."' ";
		return $this->get_row1($sql);
	}
	function up($table,$data,$where){
		$this->update1($table,$data,$where);
	}
	function removed($table,$data){
		$this->remove1($table,$data);
	}
}