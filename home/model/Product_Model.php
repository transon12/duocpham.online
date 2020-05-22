<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Product_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}
	

	function geQuickdeal()
	{
		$time= date('Y-m-d H:i:s', time());
		$sql= "SELECT a.*, b.name AS name, b.img AS imagex, b.price AS priceMax 
		FROM flash_sale a
		INNER JOIN product b on a.product_id=b.id
		where a.active=1 AND a.date_start<='{$time}' AND b.is_sale=1 ORDER BY a.id ASC "; //echo $sql;
		return $this->get_list($sql);
	}
	function getProductRow($id){
		$sql= "SELECT a.*, b.name AS catName FROM products a
		LEFT JOIN category b ON a.idCat = b.id 
		WHERE a.active= '1' AND a.code='".$id."'";  
		return $this->get_row($sql);
	}
	function getProductlistReview($id){
		$sql= "SELECT a.*, b.name AS userName FROM review a 
		INNER JOIN user b ON b.id= a.user_id
		WHERE a.active= '1' AND a.product_id='".$id."'  ORDER BY a.date DESC";//echo $sql ;
		return $this->get_list($sql);
	}
	function getProductlistCat($id){
		$sql= "SELECT a.* FROM products a 
		WHERE a.active= '1' AND a.idCat='".$id."'  ORDER BY a.createdAt DESC LIMIT 4";//echo $sql ;
		return $this->get_list($sql);
	}
	function getBanner(){
		$sql= "SELECT * FROM banner WHERE position='3' AND active= '1' LIMIT 1";
		return $this->get_list($sql);
	}
	function getListimg($id){
		$sql= "SELECT * FROM product_image WHERE product_id='".$id."' AND active= '1'"; //echo "string";
		return $this->get_list($sql);
	}
	function get_productfill($filter=array()){
		$where = '';
		$order_by='';
		
		if(!empty($filter['category'])) $where .= " AND c.code='".$filter['category']."'";
		$sql= "SELECT a.*, c.id AS category  FROM products  a 
		INNER JOIN category c ON c.id= a.idCat
		Where a.active=1 ".$where.' '.$order_by; //echo $sql;
		return $this->get_list($sql);
	}
	function wishlistCount($u, $p){
		$sql= "SELECT count(id) as countId FROM favourite a WHERE a.user_id= '".$u."' AND a.product_id='".$p."'"; //echo "string";
		return $this->get_row($sql);
	}
	function wishlist($u){
		$sql= "SELECT a.*, b.name, b.img, b.is_sale, b.price_discount FROM favourite a 
		INNER JOIN product b ON a.product_id = b.id 
		WHERE a.user_id= '".$u."' AND b.active = 1"; //echo "string";
		return $this->get_list($sql);
	}
	function getSubid(){
		$sql= "SELECT * FROM sub_category WHERE active= 1"; //echo "string";
		return $this->get_list($sql);
	}
	function getListpromotion(){
		$time= date('Y-m-d H:i:s', time());
		$sql= "SELECT a.* FROM promotion a WHERE a.active= 1 AND a.date_end >'{$time}'"; //echo $sql;
		return $this->get_list($sql);
	}
	function getDetailpromotion($id){
		$sql= "SELECT a.* FROM promotion a WHERE a.active= 1 AND a.id ='".$id."'"; //echo $sql;
		return $this->get_row($sql);
	}
	function insertReview($data){
		return $this->insert('review',$data);
	}
	function loadMore($ls, $le){
		$sql= "SELECT * FROM product WHERE active= 1 Limit ".$ls.",".$le."" ;// echo $sql;
		return $this->get_list($sql);
	}
}