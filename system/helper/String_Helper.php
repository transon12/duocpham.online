<?php if(!defined('PATH_SYSTEM')) die('Bad requested');
function str_checkString($str){
    $str = preg_replace('/[\r\n\t]/','', $str);
    $str =htmlspecialchars(addslashes($str));
    return $str;
}

function str_strRandom($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function str_strRandom2($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function str_strRandom3($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function str_trimText($input, $length, $ellipses = true, $strip_html = true) {
    if ($strip_html) {
        $input = strip_tags($input);
    }
    if (strlen($input) <= $length) {
        return $input;
    }
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
    if ($ellipses) {
        $trimmed_text .= '...';
    }
    return $trimmed_text;
}

function str_createJson($arr = array()){
    if(!empty($arr)){
        return json_encode($arr,JSON_UNESCAPED_UNICODE);
    }else{
        return '';
    }
}

function str_createJson2($arr,$key1,$key2){ //print_r($arr);
    $result = array();
    foreach($arr[0] as $k=>$v){
        foreach($key1 as $k1=>$v1){ //echo $v1;
            $result[$k][$key2[$k1]] = str_checkString($arr[$k1][$k]) ;
        }
    }
    return !empty($result) ? json_encode(array_values($result),JSON_UNESCAPED_UNICODE) : '' ;
}

function str_getNumber($s){
    if(!empty($s)&&$s!='NaN'){
        return preg_replace('/[,]/','',$s);
    }else{
        return 0;
    }
}

function str_getDay($s){ // dd/mm/YYYY || mm/dd/YYYY
    if(!empty($s)&&$s!='00-00-0000'&&$s!='00/00/0000'){
        return date('Y-m-d',strtotime(str_checkString($s))) ;
    }else{
        return '';
    }
}

function str_checkDate($d){
    if(!empty($d)&&$d!='0000-00-00'&&$d!='0000-00-00 00:00:00'){
        return true;
    }else{
        return false;
    }
}

function str_showMoney($m){
    return number_format($m,0,'.',',');
}

function str_phoneFormat($number) {
    if(!empty($number)){
        $number = substr($number, 0, 3) .' '. substr($number, 3, 3) .' '. substr($number, 6);
    }
    return $number;
}

function str_createapi($data,$message,$code){
    return json_encode(array(
            'code'=>$code,
            'message'=>$message,
            'data'=>!empty($data) ? $data : ''
        ),JSON_UNESCAPED_UNICODE);
}
function numberRound($p,$n=-2){
    return round($p,$n);
}
function showMoney($m){
    return number_format(numberRound($m),0,'.',',');
}
    
function strEnglish1($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ|ì)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/[()#\$\^\*{}\+\=&,.\/]/", '', $str);
    $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
    return $str;
}

function strEnglish($str) {
  
    $str = preg_replace("/[()#\$\^\*{}\+\=&,.\/]/", '', lc_strtolower_text(trim($str)));
    $str = trim(str_replace(" ", "-", $str),"-");

    return $str;
}
function lc_strtolower_text($string)
{
    include 'utf8/lookup.php' ;
    return strtr($string, $utf8_lookup['romanize']) ;
}
function readMore($string,$a,$n){
    $string = strip_tags($string);
    if (strlen($string) > $n) {
        // truncate string
        $stringCut = substr($string, 0, $n);
        $endPoint = strrpos($stringCut, ' ');

        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= $a;
    }
     return $string;
}
function str_createCode17($h=10){
    return substr(date('Ymd',time()),2).$h.rand(100,999).date('His',time());
}

function str_explodeCategory($txt){
    return explode('_',$txt);
}

function str_blog_active($a){ //echo $a;
    if($a==1){
        return '<span class="text-success">Active</span>';
    }else if($a==-1){
        return '<span class="text-warning">Waiting</span>';
    }else{
        return '<span class="text-danger">Inactive</span>';
    }
}

function str_romanize($string){
    include 'utf8/lookup.php' ;
    return strtr($string,$utf8_lookup['romanize']) ;
}

function str_settime_date($t,$now){
    if($t<$now){
        return '<span class="text-secondary" >'.$t.'</span>';
    }elseif($t==$now){
        return '<span class="text-primary" >'.$t.'</span>';
    }else{
        return '<span class="text-warning" >'.$t.'</span>';
    }
}

function str_getTextBetweenTags($string, $tagname) {
    $pattern = "/<$tagname>(.*)<\/$tagname>/";
    $regex = '#<\s*?'.$tagname.'\b[^>]*>(.*?)</'.$tagname.'\b[^>]*>#s';
    //preg_match($pattern, $string, $matches);
    preg_match_all($regex,$string,$matches);
    return $matches;
}

function str_getTextBetweenTag($string, $tagname) {
    //$pattern = "/<$tagname>(.*)<\/$tagname>/";
    $regex = '#<\s*?'.$tagname.'\b[^>]*>(.*?)</'.$tagname.'\b[^>]*>#s';
    preg_match($regex, $string, $matches); //print_r($matches);
    //preg_match_all($regex,$string,$matches);
    return $matches[1];
}
function str_createCodeBlog(){
    return substr(date('Ymd',time()),2).rand(100,999).date('His',time());
}