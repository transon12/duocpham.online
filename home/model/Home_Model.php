<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

class Home_Model extends VV_Model{
	function __construct(){
		parent::connect();
	}
	function __destruct(){
		parent::dis_connect();
	}
	function Get_listIndusty(){
		$industry = $this->get_list(" SELECT * FROM tbl_p_industry a where a.active=1 ORDER BY a.position  ASC  LIMIT 12  ");
		$product = $this->get_list(" SELECT a.pi_id,a.id FROM tbl_product a where a.active=1"); //print_r ($product) ;
				if(!empty($industry)){
				foreach($industry as $k1=>$v1){
					if(!empty($product)){
						foreach($product as $k2=>$v2){
						if($v1['id']==$v2['pi_id']){
							$industry[$k1]['list'][] = $v2;
							unset($product[$k2]);
						}
					}
				}
			}
		}
		return $industry;
	}
	
	function Get_listGroup2(){
		$sql= "SELECT * FROM tbl_p_group a Where a.active=1  ORDER BY a.position ";
		return $this->get_list($sql);
	}
	function Get_listProduct1(){
		$sql= "SELECT * FROM tbl_product a Where a.fsale=1 and a.active=1 ORDER BY RAND() LIMIT 6"; //echo $sql;
		return $this->get_list($sql); 
	}
	function Get_listProduct2(){
		$sql= "SELECT a.* , b.pvban AS pvban, c.phone as phone_shop
		FROM tbl_product a 
		INNER JOIN tbl_nhacungcap_info b ON a.ncc_id= b.ncc_id
		INNER JOIN tbl_nhacungcap c ON a.ncc_id= c.id
		WHERE a.active=1 "; //echo $sql;
		return $this->get_list($sql); 
	}
	
	function get_rowProductByCode($code){
			$sql = " SELECT a.*,b.description,b.video,b.width,b.height,b.length,b.weight,b.baohanh,b.pro_info,c.name as bh_name,d.name as ptname,e.id as pg_id,e.name as pgname,f.id as pi_id,f.name as piname,g.name as country_name,h.name as ncc_name,h.code as ncc_code,h.phone as ncc_phone,h.avatar
				FROM tbl_product a 
				LEFT JOIN tbl_product_info b ON a.id=b.pid
				LEFT JOIN tbl_baohanh c ON c.id=b.baohanh
				LEFT JOIN tbl_p_type d ON d.id=a.pt_id
				LEFT JOIN tbl_p_group e ON e.id=a.pg_id
				LEFT JOIN tbl_p_industry f ON f.id=e.pi_id
				LEFT JOIN tbl_country g ON g.id=a.country_id
				LEFT JOIN tbl_nhacungcap h ON h.id=a.ncc_id
				WHERE a.code='".$code."'"; //echo $sql;
		 		return $this->get_row($sql);
		
	}

	function get_Review($code){
		$sql = " SELECT  i.*, j.content AS note_reveiew , y.name As name_customer, u.describe_reply,u.create_date AS create_date_rebly
				FROM  tbl_review i 
				LEFT JOIN tbl_review_name j ON j.id=i.name_review
				LEFT JOIN tbl_review_rebly u ON u.id_review=i.id
				LEFT JOIN tbl_customer y ON y.code=i.code_customer 
				WHERE i.id_product='".$code."' AND i.active=1";// echo $sql;
		 		return $this->get_list($sql);
	}
	function Get_listGroup1(){
		$group = $this->get_list(" SELECT * FROM tbl_p_group a where a.active=1 LIMIT 8");
		$product = $this->get_list(" SELECT a.pg_id,a.id FROM tbl_product a where a.active=1"); //print_r ($product) ;
		if(!empty($group)){
			foreach($group as $k1=>$v1){
				if(!empty($product)){
					foreach($product as $k2=>$v2){
						if($v1['id']==$v2['pg_id']){
							$group[$k1]['list'][] = $v2;
							unset($product[$k2]);
						}
					}
				}
			}
		}
		return $group;
	}
	function Get_listshop(){
		$sql= "SELECT * FROM tbl_nhacungcap a
		Where a.active=1 and a.ncc_check=1 LIMIT 8 ";
		return $this->get_list($sql);
	}
	function  Get_listbannermall(){
		$sql= "SELECT * FROM tbl_banner a
		Where a.home=2 and a.banner_acc='admin'  ORDER BY a.position ASC ";
		return $this->get_list($sql);
	}
	function  Get_listbanner(){
		$sql= "SELECT * FROM tbl_banner a
		Where a.active=1 and a.banner_acc='admin' AND a.position<6   ORDER BY a.position ASC ";
		return $this->get_list($sql);
	}

	function get_listGroup(){
		$industry = $this->get_list(" SELECT * FROM tbl_p_industry a where a.active=1 ORDER BY a.position  ASC  LIMIT 12  ");
		$group = $this->get_list(" SELECT id,name,pi_id,active FROM tbl_p_group a where a.active=1");
		
		if(!empty($industry)){
			foreach($industry as $k1=>$v1){
				if(!empty($group)){
					foreach($group as $k2=>$v2){
						if($v1['id']==$v2['pi_id']){
							$industry[$k1]['list'][] = $v2;
							unset($group[$k2]);
						}
					}
				}
			}
		}
		return $industry;
	}

	function get_listproduct(){
		$type = $this->get_list(" SELECT id,name,active FROM tbl_p_type a where a.active=1 ORDER BY RAND() LIMIT 8");
		$product = $this->get_list(" SELECT * FROM tbl_product a where a.active=1 ORDER BY RAND() ");
		if(!empty($type)){
			foreach($type as $k1=>$v1){
				if(!empty($product)){
					foreach($product as $k2=>$v2){
						if($v1['id']==$v2['pt_id']){
							$type[$k1]['list'][] = $v2;
							unset($product[$k2]);
						}
					}
				}
			}
		}
		//echo "<pre>"; print_r($type);
		return $type;
	}
	function get_quickDeal()
	{

		$time= date('Y-m-d H:i:s', time());
		$sql= "SELECT a.*, b.name AS name, b.image AS imagex , b.id AS pid
		FROM tbl_flash_sale a
		INNER JOIN tbl_product b on a.code_product=b.code
		INNER JOIN tbl_product_info c ON a.code_product=c.pcode 
		where a.active=1 AND a.start_day<='{$time}' ORDER BY a.id ASC "; //echo $sql ;
		return $this->get_list($sql);
	}

	function get_searchdata($code, $filter= array())
	{
		$where = '';
		$order_by='';
		if (!empty($filter['status'])){
		if ($filter['status']==1){
				$order_by .= "ORDER BY a.price_min ASC";
		}else{
			if ($filter['status']==2){
				$order_by .= " ORDER BY a.price_min DESC";
			}else{
				$order_by .= " ORDER BY a.count_sell DESC";
			}
		}
	}
		if(!empty($filter['country'])) $where .= " AND a.country_id=".$filter['country'];
		if(!empty($filter['group'])) $where .= " AND b.pg_id=".$filter['group'];
		if(!empty($filter['ncc'])) $where .= " AND a.ncc_id=".$filter['ncc'];
		if(!empty($filter['price-min']) && !empty($filter['price-max'])) $where .= " AND a.price_min BETWEEN ".$filter['price-min']."AND".$filter['price-max'];
		
		$sql= "SELECT a.* , b.pvban AS pvban,f.name as industry_name, c.phone as phone_shop, h.description as details FROM tbl_product  a 
		INNER JOIN tbl_nhacungcap_info b ON a.ncc_id= b.ncc_id
		INNER JOIN tbl_nhacungcap c ON a.ncc_id= c.id
		LEFT JOIN tbl_p_type d ON a.pt_id= d.id
		INNER JOIN tbl_p_group e ON a.pg_id= e.id
		INNER JOIN tbl_p_industry f ON e.pi_id= f.id
		INNER JOIN tbl_product_info h ON a.code= h.pcode
		Where a.active=1  and h.key_word LIKE '%".$code."%'".$where.' '.$order_by; //echo $sql;
		return $this->get_list($sql);
	}
	
	function get_Check_promotion(){
		$sql= " SELECT * FROM tbl_event a where a.active= 1";
		return $this->get_list($sql);
	}
	function get_Keyword(){
		$sql= "SELECT a.key_word FROM tbl_product_info a";
		return $this->get_list($sql);
	}

	function remove_P_flsah($where)
	{
		$this->remove('tbl_flash_sale',$where);
	}
	function update_Promoton($data,$where){
		$this->update('tbl_event',$data,$where);
	}
}