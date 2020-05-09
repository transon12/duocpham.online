<?php 
class VV_Model{
	private $__host = DB_HOST;
	private $__user = DB_USER;
	private $__pass = DB_PASSWORD;
	private $__db = DB_DATABASE;
	private $__conn;
	function connect(){
		if(!$this->__conn){
			$this->__conn = mysqli_connect($this->__host,$this->__user,$this->__pass,$this->__db) or die('Connect Error !');
			//mysqli_query($this->__conn,"SET character_set_results='utf8',character_set_client='utf8',character_set_database='utf8',character_set_server='utf8' ");
			mysqli_set_charset($this->__conn, 'utf8');
		}
	}
	function dis_connect(){
		if($this->__conn){
			mysqli_close($this->__conn);
		}
	}
	function insert($table,$data){
		$this->connect();
		$field_list = '';
		$field_val = '';
		foreach($data as $key=>$val){
			$field_list .= ",".(string)$key;
			$field_val .= ",'".(string)$val."'";
		}
		$sql = "INSERT INTO ".$table."(".trim($field_list,',').") VALUES(".trim($field_val,',').")";//echo $sql;die;
		return mysqli_query($this->__conn,$sql);
	}
	function insert2($table,$data){ // return id AUTO_INCREMENT
		$this->connect();
		$field_list = '';
		$field_val = '';
		foreach($data as $key=>$val){
			$field_list .= ",".(string)$key;
			$field_val .= ",'".(string)$val."'";
		}
		$sql = "INSERT INTO ".$table."(".trim($field_list,',').") VALUES(".trim($field_val,',').")"; //echo $sql;
		if (mysqli_query($this->__conn,$sql)) {
		    return mysqli_insert_id($this->__conn);
		} else {
		    return '';
		}
	}
	function update($table,$data,$where){
		$this->connect();
		$sql = '';
		foreach($data as $key=>$val){
			$sql .= ",".$key."='".$val."'";
		}
		$sql = "UPDATE ".$table." SET ".trim($sql,',')." WHERE ".$where; //echo $sql;
		return mysqli_query($this->__conn,$sql);
	}

	function update_in($table,$data,$where,$in){ //print_r($data);
		$this->connect();
		$sql = '';
		foreach($data as $key=>$val){
			$sql .= ",".$key."='".$val."'";
		}
		$sql = "UPDATE ".$table." SET ".trim($sql,',')." WHERE ".$where." in('".$in."')";// echo $sql;die;
		return mysqli_query($this->__conn,$sql);
	}

	function update_j2($t1,$t2,$a,$b,$data,$where){ //print_r($data);
		$this->connect();
		$sql = '';
		if(isset($data['a'])&&!empty($data['a'])){
			foreach($data['a'] as $key1=>$val1){
				$sql .= ",a.".$key1."='".$val1."'";
			}
		}
		if(isset($data['b'])&&!empty($data['b'])){
			foreach($data['b'] as $key2=>$val2){
				$sql .= ",b.".$key2."='".$val2."'";
			}
		}
		$sql = "UPDATE ".$t1." a INNER JOIN ".$t2." b ON a.".$a."=b.".$b." SET ".trim($sql,',')." WHERE ".$where; //echo $sql;
		return mysqli_query($this->__conn,$sql);
	}

	function vv_query($sql){
		$this->connect();
		mysqli_query($this->__conn,$sql);
		return mysqli_affected_rows($this->__conn); // >0 query thanh cong, =0: ko co hanh dong, =-1: Loi
	}
	function remove($table,$where){
		$this->connect();
		$sql = "DELETE FROM ".$table." WHERE ".$where; //echo $sql;
		return mysqli_query($this->__conn,$sql);
	}
	function get_row($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$row = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		if($row){
			return $row;
		}else{
			return array();
		}
	}
	function get_list($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$data = array();
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$data[] =$rows;
			}
		}
		return $data;
	}
	function get_list2($sql,$field){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$data = array();
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$data[] =$rows[$field];
			}
		}
		return $data;
	}
	function get_list3($sql,$field){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$data = array();
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$data[$rows[$field]] =$rows;
			}
		}
		return $data;
	}
	function get_list4($sql,$field,$list){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$data = array();
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				if(in_array($rows[$field],$list)){
					$data[$rows[$field]] =$rows;
				}
			}
		}
		return $data;
	}
	function get_list_deal($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		$t = date('Y-m-d H:i:s',time());
		if(!$result){
			return array();
		}
		$data = array(
			'list'=>array(),
			'update'=>array(),
			'count'=>0
			);
		if(mysqli_num_rows($result)>0){
			$i=0;
			while($rows=mysqli_fetch_assoc($result)){
				$data['list'][$i] =$rows;
				if($rows['status']==2||$rows['status']==3){
					if($rows['date_end']>=$t){
						$data['list'][$i]['exist'] =1;
					}else{
						$data['count']++;
						$data['list'][$i]['exist'] =0;
						if($rows['deal_check']==1) $data['update'][] = $rows['id'];
					}
				}else{
					$data['count']++;
					$data['list'][$i]['exist'] =0;
					if($rows['deal_check']==1) $data['update'][] = $rows['id'];
				}

				$i++;
			}
		}
		return $data;
	}
	
	function get_count($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		return mysqli_num_rows($result);
	}
	function get_list1($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$data = array();
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$data[] =$rows;
			}
		}
		return $data;
	}
	function get_row1($sql){
		$this->connect();
		$result = mysqli_query($this->__conn,$sql);
		if(!$result){
			return array();
		}
		$row = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		if($row){
			return $row;
		}else{
			return array();
		}
	}
	function update1($table,$data,$where){
		$this->connect();
		$sql = '';
		foreach($data as $key=>$val){
			$sql .= ",".$key."='".$val."'";
		}
		$sql = "UPDATE ".$table." SET ".trim($sql,',')." WHERE ".$where; //echo $sql; die;
		return mysqli_query($this->__conn,$sql);
	}
	function insert1($table,$data){
		$this->connect();
		$field_list = '';
		$field_val = '';
		foreach($data as $key=>$val){
			$field_list .= ",".(string)$key;
			$field_val .= ",'".(string)$val."'";
		}
		$sql = "INSERT INTO ".$table."(".trim($field_list,',').") VALUES(".trim($field_val,',').")";
		return mysqli_query($this->__conn,$sql);
	}
	function remove1($table,$where){
		$this->connect();
		$sql = "DELETE FROM ".$table." WHERE ".$where;
		return mysqli_query($this->__conn,$sql);
	}

	// param... */
	function inserts($table,$data){
		$this->connect();
		$field_list = '';
		$field_val = '';
		$values = array();
		$bind_param = '';
		foreach($data as $key=>$val){
			if($key==='bind_param'){
				$bind_param = $val;
			}else{
				$field_list .= ','.(string)$key;
				$field_val .= ',?';
				$values[] = $val;
			}
		}

		$sql = 'INSERT INTO '.$table.'('.trim($field_list,',').') VALUES('.trim($field_val,',').')';

		$stmt = $this->__conn->prepare($sql);

		$stmt->bind_param($bind_param, ...$values );

		$stmt->execute();

		$stmt->close();

		return $this->__conn->insert_id;

	}

	function updates($table,$data,$where){ //where = array(where=>'',param=>[])
		$this->connect();
		$para = '';
		$bind_param = '';
		$values = array();
		foreach($data as $key=>$val){
			if($key==='bind_param'){
				$bind_param = $val;
			}else{
				$para .= ','.$key.'=?';
				$values[] = $val;
			}
		}
		$sql = 'UPDATE '.$table.' SET '.trim($para,',').' WHERE '.$where['where']; //echo $sql;
		$stmt = $this->__conn->prepare($sql); //print_r($values);
		$stmt->bind_param($bind_param, ...array_merge($values,$where['param']) );

		$stmt->execute();

		$stmt->close();
	}

	function removes($table,$where,$bind_param){ // $bind_param array(bind=>'',param=>[])
		$this->connect();

		$sql = 'DELETE FROM '.$table.' WHERE '.$where; //echo $sql;
		$stmt = $this->__conn->prepare($sql); //print_r($values);

		$stmt->bind_param($bind_param['bind'], ...$bind_param['param'] );

		$stmt->execute();

		$stmt->close();
	}


	function get_rows($sql,$bind_param = array()){

		$data = array();

		$stmt = $this->__conn->prepare($sql);

		if(!empty($bind_param['bind'])){
			$stmt->bind_param($bind_param['bind'] , ...$bind_param['value'] );
		}

		$stmt->execute();

		$result = $stmt->get_result(); //print_r($bind_param);

		if($result->num_rows === 1){
			$data = $result->fetch_assoc();	
		}

		$stmt->close();


		return $data;
	}

	function get_lists($sql,$bind_param = array()){

		$data = array();

		$stmt = $this->__conn->prepare($sql);

		if(!empty($bind_param['bind'])){
			$stmt->bind_param($bind_param['bind'] , ...$bind_param['value'] );
		}

		$stmt->execute();

		$result = $stmt->get_result(); //print_r($bind_param);

		if($result->num_rows > 0){
			$data = $result->fetch_all(MYSQLI_ASSOC);	
		}

		$stmt->close();


		return $data;
	}

	function querys($sql,$bind_param=array()){
		$this->connect();
		$stmt = $this->__conn->prepare($sql); //print_r($values);
		if(!empty($bind_param['bind'])){
			$stmt->bind_param($bind_param['bind'] , ...$bind_param['value'] );
		}

		$stmt->execute();

		$stmt->close();
	}
}