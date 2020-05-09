<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=isset($item_detail['title']) ? $item_detail['title'] : 'COOFTECH | Tin tức công nghệ hàng đầu' ?> </title>

    <meta name="description" content="<?=isset($item_detail['description']) ? $item_detail['description'] : 'Cooftech chuyên thiết kế web, app,design thương hiệu , cung cấp dịch vụ hạ tầng mạng, phát triển phân mềm hàng đầu Việt Nam' ?>" />
    <meta name="keywords" content="<?=isset($item_detail['keywords']) ? $item_detail['keywords'] : 'Cooftech,Web,App,Design,Ứng dụng,Phần mềm,Hạ tầng mạng,Thiết kế thương hiệu,Tin tức,tin hot,tin nhanh,cft' ?>"/>
    <meta name="revisit-after" content="3 days" />
    <link rel="canonical" href="<?=isset($item_detail['title_url']) ? $base_url.'/'.$item_detail['title_url'].'-'.$item_detail['code'].'.html' : $base_url?>"/>

    <link rel="icon" href="<?=$base_url?>/upload/icon/cft.png" type="image/png" sizes="16x16"> 

    <link rel="author" href=""/>
    <link rel="publisher" href=""/>

    <meta itemprop="name" content="<?=isset($item_detail['title']) ? $item_detail['title'] : 'Cooftech - thiết kế website, mobile app' ?>">
    <meta itemprop="description" content="<?=isset($item_detail['description']) ? $item_detail['description'] : 'Cooftech chuyên thiết kế web, app,design thương hiệu , cung cấp dịch vụ hạ tầng mạng, phát triển phân mềm hàng đầu Việt Nam' ?>">
    <meta itemprop="image" content="<?=isset($item_detail['avatar']) ? $base_url.'/upload/blogs/'.$item_detail['avatar'] : 'https://cooftech.com/upload/holder/image_fb.jpg' ?>">
    

    <!-- Facebook -->
    <meta  property="og:url" content="<?=isset($item_detail['title_url']) ? $base_url.'/'.$item_detail['title_url'].'-'.$item_detail['code'].'.html' : $base_url ?>" >
    <meta  property="og:type" content="article" >
    <meta  property="og:title" content="<?=isset($item_detail['title']) ? $item_detail['title'] : 'Cooftech - thiết kế website, mobile app' ?>" >
    <meta  property="og:locale" content="vi_VN" >
    <meta property="og:image:secure_url" content="<?=isset($item_detail['avatar']) ? $base_url.'/upload/blogs/'.$item_detail['avatar'] : 'https://cooftech.com/upload/holder/image_fb.jpg' ?>" />
    <meta  property="og:image" content="<?=isset($item_detail['avatar']) ? $base_url.'/upload/blogs/'.$item_detail['avatar'] : 'https://cooftech.com/upload/holder/image_fb.jpg' ?>" >
    <meta  property="og:description" content="<?=isset($item_detail['description']) ? $item_detail['description'] : 'Cooftech chuyên thiết kế web, app,design thương hiệu , cung cấp dịch vụ hạ tầng mạng, phát triển phân mềm hàng đầu Việt Nam' ?>" > <!-- 297 ky tu -->
    <meta  property="og:site_name" content="<?=isset($item_detail['title']) ? $item_detail['title'] : 'Cooftech - thiết kế website, mobile app' ?>" >
    <meta  property="og:updated_time" content="<?=isset($item_detail['date_edit'])&&$item_detail['date_edit']!='0000-00-00 00:00:00' ? $item_detail['date_edit'] : $item_detail['date_create'] ?>" >
    <meta  property="og:app_id" content="560184944548714" >
    <meta property="article:published_time" content="<?=isset($item_detail['date_create']) ? $item_detail['date_create'] : '' ?>" />
    <meta property="article:modified_time" content="<?=isset($item_detail['date_edit'])&&$item_detail['date_edit']!='0000-00-00 00:00:00' ? $item_detail['date_edit'] : $item_detail['date_create'] ?>" /> 
    <meta property="article:section" content="<?=isset($item_detail['cat_code']) ? $item_detail['cat_code'] : '' ?>" />
    <meta property="article:tag" content="<?=isset($item_detail['tags']) ? $item_detail['tags'] : '' ?>" />
    <meta  property="og:image:alt" content="<?=isset($item_detail['avatar_alt']) ? $item_detail['avatar_alt'] : 'cooftech image'?> " >
    <!-- Facebook End -->