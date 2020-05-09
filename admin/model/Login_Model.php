<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Login_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}

	function get_userInfoLogin($u,$p){
		$sql = " SELECT id,active FROM admin WHERE username='".$u."' AND passWord='".$p."'";
		return $this->get_row($sql);
	}

	function get_userInfoToken($token){
		$sql = " SELECT * FROM admin WHERE token='".$token."'";

		return $this->get_row($sql);
	}

	function update_login($data,$where){
		$this->update('admin',$data,$where);
	}
}