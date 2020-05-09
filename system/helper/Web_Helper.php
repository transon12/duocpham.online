<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

function w_getEndFsale($start,$date){
	return date('Y-m-d 23:59:59',(strtotime($start)+(86400*$date)));
}

function w_capdotk($c){
	switch ($c) {
		case 1:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: #12e2db"></i>Phổ thông</span>';
		case 2:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: yellow"></i>Chuyên nghiệp</span>';
		default:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: #12e2db"></i>Phổ thông</span>';
	}
}

function w_xacthuc($c){
	switch ($c) {
		case 1:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: #12e2db"></i>xác thực</span>';
		case 0:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: red"></i>chưa xác thực</span>';
		default:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: red"></i>chưa xác thực</span>';
	}
}

function w_conhang($c){
	switch ($c) {
		case 1:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: #12e2db"></i>Còn hàng</span>';
		case 0:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: red"></i>Hết hàng</span>';
		default:
			return '<span class="label label-primary"><i class="fa fa-circle " style="color: red"></i>Hết hàng</span>';
	}
}

function w_avatarSP($a){
	if(!empty($a)){
		return json_decode($a,true)[0];
	}else{
		return 'noimage.png';
	}
}

function w_yesno($c){
	switch ($c) {
		case 1:
			return 'Có';
		case 0:
			return 'Không';
		default:
			return 'Không';
	}
}

function w_tonkho($c){
	return $c==1 ? '<span style="color:green;">Còn hàng</span>' : '<span style="color:red;">Hết hàng</span>';
}

function w_giakm($m,$c,$s,$e){
	$timeNow = date('Y-m-d H:i:s',time());
	if($e>$timeNow){
		return number_format($m,0,'.',',');
	}else{
		return 'Hiện tại không có';
	}
}

function w_flastsale($s,$e){
	$timeNow = date('Y-m-d H:i:s',time());
	if($e>$timeNow){
		return '<strong>'.date("H:i:s d/m/Y",strtotime($s)).'</strong> đến <strong>'.date("H:i:s d/m/Y",strtotime($e)).'</strong> ';
	}else{
		return 'Hiện tại không có';
	}
}

function w_active($c){
	return $c==1 ? '<span style="color:green; background-color:#eee;">Đã kích hoạt</span>' : '<span style="color:red;">Chưa kích hoạt</span>';
}

function w_sell($c){
	switch ($c) {
		case 1:
			return 'Đặt bán';
		case 0:
			return 'Dừng bán';
		default:
			return 'Dừng bán';
	}
}

function w_phiship($c){
	switch ($c) {
		case 1:
			return 'Nhà CC';
		case 2:
			return 'Khách hàng';
		default:
			return 'Shopo';
	}
}

function w_orderstatus($status,$object=''){
	switch ($status) {
		case 1:
			return '<span style="color:#B90B0B;">Đang chờ duyệt</span>';
		case 2:
			if($object=='admin'){
				return '<span style="color:#A6A2A2;">Chờ lấy hàng(CS)</span>';
			}else{
				return '<span style="color:#A6A2A2;">Chờ lấy hàng</span>';
			}
		case 3:
			if($object=='admin'){
				return '<span style="color:#A6A2A2;">Chờ lấy hàng(NK)</span>';
			}else{
				return '<span style="color:#A6A2A2;">Chờ lấy hàng</span>';
			}
		case 4:
			if($object=='admin'){
				return '<span style="color:#2E3DBC;">Đã nhập kho</span>';
			}else{
				return '<span style="color:#A6A2A2;">Chờ lấy hàng</span>';
			}
		case 5:
			return '<span style="color:#FB0000;">Đang giao hàng</span>';
		case 6:
			return '<span style="color:#B90B0B;">Giao  thành công</span>';
		case 7:
			return '<span style="color:#B90B0B;">Yêu cầu đổi hàng</span>';
		default:
			return 'Không xác định';
	}
}

function w_getProductTypeEvent($industry,$group,$type,$product){
	$result = array(
		'type'=>'',
		'id'=>''
		);
	if(!empty($product)){
		return [4,$product];
	}elseif(!empty($type)){
		return [3,$type];
	}elseif(!empty($group)){
		return [2,$group];
	}else{
		return [1,$industry];
	}
}

function w_countdoituong_accept($dt){
	if($dt=='all'){
		return 'Tất cả';
	}elseif($dt=='kle'){
		return 'Khách lẻ';
	}elseif($dt=='ksi'){
		return 'Khách sỉ';
	}else{
		return !empty($dt) ? count(json_decode($dt,true)) : 0 ;
	}
}

function str_showKHlai($sp,$plus,$ship,$object){
	if($plus>$sp){
		if($object==2){
			return $plus-$ship-$sp;
		}else{
			return $plus-$sp;
		}
	}else{
		return 0;
	}
}

function w_showEventStatus($status,$s,$e){
	if($status==1){
		return '<span style="color:'.COLOR1.';">Chờ xác nhận</span>';
	}elseif($status==2&&$e>=date('Y-m-d H:i:s',time())){
		return '<span style="color:'.COLOR2.';">Đang chạy CT</span>';
	}elseif($status==2&&$e<date('Y-m-d H:i:s',time())){
		return '<span style="color:'.COLOR3.';">Hết hạn</span>';
	}elseif($status==3){
		return '<span style="color:'.COLOR2.';">Tạm dừng</span>';
	}else{
		return '<span style="color:'.COLOR4.';">Đã hủy</span>';
	}
}

function str_moneychenh($sp,$plus,$type){
	return $type==2 ? $sp+$plus : 0;
}

function w_ordertype($ordertype){
	return $ordertype==1 ? 'Mua hàng' : 'Bán hộ';
}

function w_ship_type($s){
	return $s==1 ? '<b class="text-danger">shopo giao hàng</b>' : '<b class="text-success">shop tự giao hàng</b>';
}

function w_showDay($s){ // dd/mm/YYYY || mm/dd/YYYY
    if(!empty($s)&&$s!='0000-00-00'){
        return date('d/m/Y',strtotime($s)) ;
    }else{
        return '';
    }
}

function w_showDay2($s){ // dd/mm/YYYY || mm/dd/YYYY
    if(!empty($s)&&$s!='0000-00-00'&&$s!='0000-00-00 00:00:00'){
        return date('d-m-Y',strtotime($s)) ;
    }else{
        return '';
    }
}

function w_showMoneyOrder($sp,$ship,$plus,$object){
	if($object=='ncc'){
		return $sp+$ship;
	}else{
		if($plus>$sp){
			return $plus;
		}else{
			return $sp+$ship;
		}
	}
}

function w_showDoiSoat($data,$check){
	switch ($check) {
		case 'all':
			return '<span style="color:#B90B0B;">Giao  thành công</span>';
		case 'cod':
			if($data['ds_cod']==1){
				return '<span style="color:#A6A2A2;">Đã đối soát COD</span>';
			}else{
				return '';
			}
		case 'ncc':
			if($data['ds_ncc']==1){
				return '<span style="color:#A6A2A2;">Đã đối soát NCC</span>';
			}else{
				return '';
			}
		case 'kh':
			if($data['ds_kh']==1){
				return '<span style="color:#A6A2A2;">Đã đối soát KH</span>';
			}else{
				return '';
			}
		default:
			return '<span style="color:#B90B0B;">Giao  thành công</span>';
	}
}

function w_showCancel($step,$object){
	if($object=='customer'){
		return '<span style="color:#FB0000;">Khách hàng hủy</span>';
	}else{
		if($step==5){
			return '<span style="color:#FB0300;">Giao hàng thất bại</span>';
		}elseif($step==6){
			return '<span style="color:#FB0100;">Hủy do đổi trả</span>';
		}else{
			if($object=='ncc'){
				return '<span style="color:#FB0200;">Nhà cung cấp hủy</span>';
			}
		}
	}
}

function w_showReturn($status){
	if($status==2){
		return '<span style="color:green;">Chấp nhận</span>';
	}else{
		return '<span style="color:#FB0000;">Chờ phản hồi</span>';
	}
}

function w_showDoitraType($status){
	if($status==1){
		return '<span style="color:red;">Trả hàng</span>';
	}else{
		return '<span style="color:blue;">Đổi hàng</span>';
	}
}

function w_showNameTK($arr,$id){
	return isset($arr[$id]['name']) ? $arr[$id]['name'] : $id;
}

function w_showIndustry($a){
	return $a==1 ? 'Đang bán' : '<span class="text-danger">Tạm dừng</span>';
}

function w_khuyenmai($s,$e,$c){
	$timeNow = date('Y-m-d H:i:s',time());
	if($e>$timeNow&&$c==1){
		$s = $s>$timeNow ? $s : $timeNow;
		$h = strtotime($e)-strtotime($s);
		if($h<86400){
			return 'còn <strong class="text-danger">'.date("H:i",$h).'</strong> giờ ' ;
		}else{
			return 'còn <strong class="text-danger">'.(int)($h/86400).'</strong> ngày';
		}
	}elseif($e>$timeNow&&$c==0){
		return '<span style="color:red;">Đang chờ duyệt</span>';
	}elseif($e<$timeNow&&$c==1){
		return '<span style="color:red;">Đã hết</span>';
	}else{
		return '<span style="color:red;">Không có</span>';
	}
}

function w_dealsi($s,$e){
	$timeNow = date('Y-m-d H:i:s',time());
	if(!empty($s)){
		if($e>$timeNow){
			$s = $s>$timeNow ? $s : $timeNow;
			$h = strtotime($e)-strtotime($s);
			if($h<86400){
				return 'còn <strong class="text-danger">'.date("H:i",$h).'</strong> giờ ' ;
			}else{
				return 'còn <strong class="text-danger">'.(int)($h/86400).'</strong> ngày';
			}
		}else{
			return '<span style="color:red;">Đã hết</span>';
		}
	}else{
		return '<span style="color:red;">Chờ kích hoạt</span>';
	}
}

function w_dealExist($e,$status){
	$t = date('Y-m-d H:i:s',time());
	if($status==2||$status==3){
		if($e>=$t){
			return true;
		}
	}
	return false;
}

function w_showEventAdmin($dt,$id){
	if($dt=='all'){
		return true;
	}elseif(in_array($id,json_decode($dt,true))){
		return true;
	}else{
		return false;
	}
}

function w_showEventAdminAccept($dt,$id){
	if($dt=='all'){
		return false;
	}elseif($dt=='ksi'){
		return false;
	}elseif($dt=='kle'){
		return false;
	}elseif(!empty($dt)&&in_array($id,json_decode($dt,true))){
		return true;
	}else{
		return false;
	}
}

function w_dealStatus($status,$s,$e){
	$t = date("y-m-d H:i:s",time());
	if($status==1){
		return '<span style="color:red;">Chờ kích hoạt</span>';
	}elseif($status==2){
		if($e>$t){
			return '<span style="color:green;">Đang phát hành</span>';
		}else{
			return '<span>Hết hạn</span>';
		}
	}elseif($status==3){
		if($e>$t){
			return '<span>Tạm dừng</span>';
		}else{
			return '<span>Hết hạn</span>';
		}
	}elseif($status==0){
		return '<span>Hủy</span>';
	}else{
		return '<span>Không xác định</span>';
	}
}

function w_showHidden($acc,$flag){
	if($acc=='ncc'){
		return $flag==1 ? 'hidden' : 'disabled';
	}
}

function w_quangcao($status,$home,$end){
	if($home==1){
		return array(
			'text'=>'<span class="label text-danger">Admin</span>',
			'code'=>1
			) ;
	}else{
		if($status==1){
			return array(
				'text'=>'<span class="label text-success">Chờ duyệt yêu cầu</span>',
				'code'=>1
				) ;
		}elseif($status==2&&$end>=date('Y-m-d',time())){
			return array(
				'text'=>'<span class="label text-danger">Đang chạy Quảng Cáo</span>',
				'code'=>2
				);
		}else{
			return array(
				'text'=>'<span class="label text-danger">Liên hệ</span>',
				'code'=>3
				) ;
		}
	}
}

function w_goivip($status,$end){
	if($status==1){
		return array(
			'text'=>'<span class="label text-success">Chờ duyệt yêu cầu</span>',
			'code'=>1
			) ;
	}elseif($status==2&&$end>=date('Y-m-d',time())){
		return array(
			'text'=>'<span class="label text-danger">Đang chạy Quảng Cáo</span>',
			'code'=>2
			);
	}else{
		return array(
			'text'=>'<span class="label text-danger">Hết hạn</span>',
			'code'=>3
			) ;
	}
}

function w_bannerObject($v){
	switch ($v) {
		case 1:
			return 'Ngành hàng';
			break;
		case 2:
			return 'Danh mục';
			break;
		case 3:
			return 'Nhóm hàng';
			break;
		case 4:
			return 'Xuất xứ';
			break;
		case 5:
			return 'Khuyến mại';
			break;
		case 6:
			return 'Nhà cung cấp';
			break;
		
		default:
			return 'Không xác định';
			break;
	}
}
function web_getPrice($price,$discount='',$ship='',$start='',$end=''){
	$timeNow = date('Y-m-d H:i:s',time());
	if(!empty($discount)&&$timeNow>=$start&&$timeNow<=$end){
		$price =($price -($discount*$price/100))+$ship;
	}
	return $price;
}

function web_getCodeProduct($code){
	$code = explode('-',$code);
	return $code[count($code)-1];
}
function w_orderStatusBt($status,$code,$step,$a=array()){
	switch ($step) {
		case 2:
			return in_array($status,$a) ? 'onClick="editShipper(\''.$code.'\')"' : 'disabled';
		case 3:
			return in_array($status,$a) ? 'onClick="orderInStore(\''.$code.'\')"' : 'disabled';
		case 4:
			return in_array($status,$a) ? 'onClick="orderShip(\''.$code.'\')"' : 'disabled';
		case 5	:
			return in_array($status,$a) ? 'onClick="orderSuccess(\''.$code.'\')"' : 'disabled';
		default:
			return 'disabled';
	}
}
function w_orderStatusCancel($status,$code){
	if(in_array($status,[1,2,3])){
		return '<button onClick="orderRemove(\''.$code.'\')" type="button" class="btn btn-md btn-danger">Hủy Đơn</button>';
	}elseif(in_array($status,[4,5])){
		return '<button onClick="cancelShip(\''.$code.'\')" type="button" class="btn btn-md btn-danger">Giao hàng thất bại</button>';
	}elseif(in_array($status,[6])){
		return '<button onClick="orderReturn(\''.$code.'\')" type="button" class="btn btn-md btn-danger">Đổi trả</button>';
	}else{
		return '';
	}
}
function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}
function size($w,$po){
	$w= ($w*6000)/1000;
	$data= round(pow($w,$po));
	return $data;
}

 function orderviettel($p)
{
	$data= array();
	foreach ($p as $key => $v) {
		 $data[] = (object) array(
		 	'PRODUCT_NAME' => $v['name'],
            "PRODUCT_PRICE" => $v['money'],
            "PRODUCT_WEIGHT" => $v['weight'],
            "PRODUCT_QUANTITY" =>$v['total']
		 	 );
	 return $data;
	}
function datecheck($c){
	switch ($c) {
		case 4:
			return '30';
		case 6:
			return '30';
		case 9:
			return '30';
		case 11:
			return '30';
		case 2:
			return '30';
		
		default:
			return '31';
	}
}
function starcustomer($c){
	if ($c==1){
		echo '<span class="text-primary"><i class="fa fa-star"></i></span>';
	}else{
		if($c==2){
			echo '<span class="text-primary"><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
		}else{
			if ($c==3) {
				echo '<span class="text-primary"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
			}else{
				if($c==4){
					return '<span class="text-primary"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
				}elseif($c=5){
					echo '<span class="text-primary"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
				}else{
					echo 'Không xác định';
				}
			}
		}
	}
}
function w_actives($c){
	switch ($c) {
		case 1:
			return 'checked';
		case 0:
			return '0';
		default:
			return '';
	}
}
}