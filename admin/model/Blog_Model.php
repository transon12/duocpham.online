<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Blog_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}

	function get_blog_share_by_2code($blog,$web){
		$sql = " SELECT code FROM tbl_share_blog WHERE blog_code=? AND website_code=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'ii',
			'value'=>[$blog,$web]
		);
		return $this->get_rows($sql,$bind_param) ;
	}

	function get_blog_type(){
		$sql = " SELECT id,name FROM tbl_blog_type WHERE active=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[1]
		);
		return $this->get_lists($sql,$bind_param);
	}
	function get_blog_category(){
		$sql = " SELECT id,name,code FROM tbl_blog_category WHERE active=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[1]
		);
		return $this->get_lists($sql,$bind_param);
	}
	function get_blog_categoryinfo($id){
		$sql = " SELECT * FROM tbl_blog_category WHERE id=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[$id]
		);
		return $this->get_rows($sql,$bind_param);
	}
	function get_language(){
		$sql = " SELECT id,name FROM tbl_language WHERE active=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[1]
		);
		return $this->get_lists($sql,$bind_param);
	}
	function get_listBlog($a=0){
		
		if($a==0){
			$sql = " SELECT a.id,a.cat_id,a.code,a.blog_type_id,a.is_views as views ,a.title,a.title_url,a.date_create,a.active,b.name as cat_name,c.name as blog_type_name 
				FROM tbl_blog_list a
				INNER JOIN tbl_blog_category b ON a.cat_id=b.id
				INNER JOIN tbl_blog_type c ON c.id=a.blog_type_id
				ORDER BY a.date_create DESC "; //echo $sql;

			$bind_param = array(
				'bind'=>'',
				'value'=>[]
			);
		}else{
			$sql = " SELECT a.id,a.cat_id,a.code,a.blog_type_id,a.views,a.title,a.date_create,a.active,b.name as cat_name,c.name as blog_type_name 
				FROM tbl_blog_list a
				INNER JOIN tbl_blog_category b ON a.cat_id=b.id
				INNER JOIN tbl_blog_type c ON c.id=a.blog_type_id
				WHERE a.active=? ORDER BY a.date_create DESC "; //echo $sql;

			$bind_param = array(
				'bind'=>'i',
				'value'=>[$a]
			);
		}
		return $this->get_lists($sql,$bind_param);
	}
	function get_listBlogSettime(){
		
		$sql = " SELECT a.id,a.date_settime,b.date_create,b.code,b.title,b.title_url
			FROM tbl_blog_settime a
			INNER JOIN tbl_blog_list b ON a.blog_code=b.code
			ORDER BY a.date_settime ASC "; //echo $sql;

			$bind_param = array(
				'bind'=>'',
				'value'=>[]
			);

		return $this->get_lists($sql,$bind_param);
	}
	function get_blogInfo($code){
		$sql = " SELECT a.content,b.* FROM tbl_blog_contents a INNER JOIN tbl_blog_list b ON a.blog_id=b.id WHERE a.blog_code=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[$code]
		);
		return $this->get_rows($sql,$bind_param);
	}
	function get_blogInfoList($code){
		$sql = " SELECT title_url,code FROM tbl_blog_list b WHERE code=? "; //echo $sql;
		$bind_param = array(
			'bind'=>'i',
			'value'=>[$code]
		);
		return $this->get_rows($sql,$bind_param);
	}
	function get_list_website_active(){
		$sql = " SELECT code,domain FROM tbl_share_website WHERE active=1 "; //echo $sql;
		$bind_param = array(
			'bind'=>'',
			'value'=>[]
		);
		return $this->get_lists($sql,$bind_param);
	}
	function get_list_category(){
		$sql = " SELECT * FROM tbl_blog_category ORDER BY date_create DESC "; //echo $sql;
		$bind_param = array(
			'bind'=>'',
			'value'=>[]
		);
		return $this->get_lists($sql,$bind_param);
	}

	function insert_blog_list($data){
		return $this->inserts('tbl_blog_list',$data);
	}

	function insert_blog_content($data){
		$this->inserts('tbl_blog_contents',$data);
	}

	function insert_blog_settime($data){
		$this->inserts('tbl_blog_settime',$data);
	}
	function insert_share_blog($data){
		$this->inserts('tbl_share_blog',$data);
	}
	function insert_category($data){
		$this->inserts('tbl_blog_category',$data);
	}

	function update_blog_list($data,$where){
		$this->updates('tbl_blog_list',$data,$where);
	}
	function update_blog_content($data,$where){
		$this->updates('tbl_blog_contents',$data,$where);
	}
	function update_blog_category($data,$where){
		$this->updates('tbl_blog_category',$data,$where);
	}
	function update_blog_up($code){
		$data = array(
				'bind_param'=>'sii',
				'date_edit'=>date('Y-m-d H:i:s',time()),
				'active'=>1
			);
		$this->updates('tbl_blog_list',$data,['where'=>'code=?','param'=>[$code]]);
		$this->removes('tbl_blog_settime',' blog_code=? ',['bind'=>'i','param'=>[$code]]);
	}
	function update_blog_settime($data,$where){
		$this->updates('tbl_blog_settime',$data,$where);
	}

	function remove_blog($code){
		$this->removes('tbl_blog_list',' code=? ',['bind'=>'i','param'=>[$code]]);
		$this->removes('tbl_blog_contents',' blog_code=? ',['bind'=>'i','param'=>[$code]]);
	}
	function remove_blog_up($code){
		$this->removes('tbl_blog_list',' code=? ',['bind'=>'i','param'=>[$code]]);
		$this->removes('tbl_blog_contents',' blog_code=? ',['bind'=>'i','param'=>[$code]]);
		$this->removes('tbl_blog_settime',' blog_code=? ',['bind'=>'i','param'=>[$code]]);
	}
}