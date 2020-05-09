<?php if(!defined('PATH_SYSTEM')) die('Bad requested');

function url_returnPage($link,$error=''){
	if(isset($error)&&!empty($error)){
	    echo '<script> alert("'.$error.'"); </script>';
	}
	echo '<script> window.location.href="'.$link.'"; </script>';
	exit();
}

function url_menuActive($m=array(),$c,$a='',$code=''){ //echo $c.' '; //die;
	if(!empty($code)&&in_array($code,$m)){
		return 'current-menu-item';
	}elseif(empty($code)&&!empty($a)&&in_array($a,$m)){
		return 'current-menu-item';
	}elseif(empty($code)&&in_array($c,$m)){
		return 'current-menu-item';
	}else{
		return '';
	}
}

function url_menuActive2($m,$url,$class='active'){ //echo $a.' '; //die;
	if($url==$m){
		return $class;
	}else{
		return '';
	}
}

function url_header($link,$n=301){
	header('Location:'.$link,true,$n); die;
}

function url_get_blogid($url){
	if(!empty($url)){
		$url = explode('-',$url);
		$key = count($url);
		// $t = isset($url[$key]) ? $url[$key] : 0; 
		$id = isset($url[$key-1]) ? $url[$key-1] : 0; //echo $t;

		return $id;
	}else{
		return 0;
	}
}

function url_link_encode($title,$id){
	return $title.'-'.$id.'.html';
}

function url_link_decode($title,$t='',$id=''){
	return  explode('-', $title)[count($title)-1] ;
}

function url_get_id_blog($link){
	$link = explode('-',$link);
	return (int)$link[count($link)-1];
}

function url_get_id_blog2($link){ //echo $link;
	$link = explode('-',$link);
	$link =  explode('.',$link[count($link)-1]) ;
	return (int)$link[0];
}