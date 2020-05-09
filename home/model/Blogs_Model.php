<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Blogs_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}

	function get_list_blog($id=0,$cat=''){
		$c = !empty($cat) ? ' AND cat_code=? ' : '' ;
		$sql = ' SELECT id,code,cat_id,avatar,video,title,title_url,description FROM tbl_blog_list WHERE active=? AND id!=? '.$c.' ORDER BY date_create DESC LIMIT '.COUNT_BLOG;
		//echo $sql;
		$bind_param = array(
			'bind'=>!empty($cat) ? 'iis' : 'ii' ,
			'value'=>!empty($cat) ? [1,$id,$cat] : [1,$id]
		);
		return $this->get_lists($sql,$bind_param);
	}

	function get_blog_by_code($code){ //echo $code;
		$sql = " SELECT b.tags,a.content,b.title,b.views,b.author,b.id,b.date_create,b.title_url,b.code,b.cat_code,b.avatar_alt,b.keywords,b.date_edit,b.avatar,b.description   
			FROM tbl_blog_contents a 
			INNER JOIN tbl_blog_list b ON a.blog_id=b.id 
			WHERE b.active=? AND b.code=? ";
		$bind_param = array(
			'bind'=>'ii',
			'value'=>[1,(int)$code]
		); //echo $sql;
		return $this->get_rows($sql,$bind_param);
	}

	function get_list_blog1($page,$cat=''){
		if(!empty($cat)){
			$sql = " SELECT id,code,cat_id,avatar,video,title,title_url,description FROM tbl_blog_list WHERE active=? AND cat_code=? ORDER BY date_create DESC LIMIT ?,".COUNT_BLOG; //echo $sql;
			$bind_param = array(
				'bind'=>'isi',
				'value'=>[1,$cat,$page]
			);
		}else{
			$sql = " SELECT id,code,cat_id,avatar,video,title,title_url,description FROM tbl_blog_list WHERE active=? ORDER BY date_create DESC LIMIT ?,".COUNT_BLOG; //echo $sql;
			$bind_param = array(
				'bind'=>'ii',
				'value'=>[1,$page]
			);
		} //echo $sql;
		return $this->get_lists($sql,$bind_param);
	}

	function get_list_blog_me(){
		$sql = ' SELECT id,code,cat_id,avatar,video,title,title_url,description,date_create FROM tbl_blog_list WHERE active=? ORDER BY RAND() LIMIT 10 ';
		$bind_param = array(
			'bind'=>'i',
			'value'=>[1]
		);
		return $this->get_lists($sql,$bind_param);
	}

	function get_list_blog_stick($s){
		$sql = ' SELECT id,code,cat_id,avatar,video,title,title_url,description,date_create FROM tbl_blog_list WHERE active=? AND stick=? ORDER BY date_create DESC LIMIT 3 ';
		$bind_param = array(
			'bind'=>'ii',
			'value'=>[1,$s]
		);
		return $this->get_lists($sql,$bind_param);
	}

	function get_blog_search($key,$page=0){

		if($page==0){
			$sql = ' SELECT id,title, ROUND(MATCH(title,keywords) AGAINST(?),7) as rank,keywords,tags,code,cat_id,avatar,video,title_url,description FROM tbl_blog_list WHERE MATCH(keywords,title) AGAINST(?) ORDER BY rank,date_create DESC LIMIT '.$page.','.COUNT_BLOG;
		}else{
			$sql = ' SELECT id,title, ROUND(MATCH(title,keywords) AGAINST(?),7) as rank,keywords,tags,code,cat_id,avatar,video,title_url,description FROM tbl_blog_list WHERE MATCH(keywords,title) AGAINST(?) ORDER BY rank,date_create DESC LIMIT '.$page.','.(COUNT_BLOG+1);
		}

		$bind_param = array(
			'bind'=>'ss',
			'value'=>[$key,$key]
		);
		return $this->get_lists($sql,$bind_param);
	}
	function get_blog_tag($key,$page=0){

		if($page==0){
			$sql = ' SELECT id,title, ROUND(MATCH(tags) AGAINST(?),7) as rank,keywords,tags,code,cat_id,avatar,video,title_url,description FROM tbl_blog_list WHERE MATCH(tags) AGAINST(?) ORDER BY rank,date_create DESC LIMIT '.$page.','.COUNT_BLOG;
		}else{
			$sql = ' SELECT id,title, ROUND(MATCH(tags) AGAINST(?),7) as rank,keywords,tags,code,cat_id,avatar,video,title_url,description FROM tbl_blog_list WHERE MATCH(tags) AGAINST(?) ORDER BY rank,date_create DESC LIMIT '.$page.','.(COUNT_BLOG+1);
		}

		$bind_param = array(
			'bind'=>'ss',
			'value'=>[$key,$key]
		);
		return $this->get_lists($sql,$bind_param);
	}

	function get_list_blog_category(){
		$sql = " SELECT name,code FROM tbl_blog_category WHERE active=1 "; 
		//print_r($bind_param);
		return $this->get_list($sql);
	}
	
}