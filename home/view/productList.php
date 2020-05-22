<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    	============================================ -->
    <title>vinnate.com</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
		============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
		============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">

    <!-- Google web fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Libs CSS
    	============================================ -->
    <link rel="stylesheet" href="<?= $base_url?>/public/home/css/bootstrap/css/bootstrap.min.css">
    <link href="<?= $base_url?>/public/home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/lib.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
		============================================ -->
    <link href="<?= $base_url?>/public/home/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/just_purchased_notification.css" rel=stylesheet>

    <link href="<?= $base_url?>/public/home/css/footer1.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/header1.css" rel="stylesheet">
    <link id="color_scheme" href="<?= $base_url?>/public/home/css/theme.css" rel="stylesheet">
</head>

<style>
.newBlog {
    padding: 0;
}

.newBlog li {
    list-style-type: none;
    padding: .3em .8em;
    font-size: 1.1em;
    border-bottom: 1px solid #ddd;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}

.flex-start {
    display: flex;
    justify-content: flex-start;
}

.d-flex {
    display: flex;
    flex-wrap: wrap;
}

.d-flex .imgNew {
    max-width: 90px;
    margin: 0 .7em 0 0;
}

.flex-end {
    justify-content: flex-end;
    flex-wrap: wrap;
}

.product-layout {
    padding-bottom: 1em;
}

body {
    font-family: 'Roboto', sans-serif !important;

}
</style>

<body class="common-home res layout-home1">



    <div id="wrapper" class="wrapper-full banners-effect-7">
        <!-- Header Container  -->
        <?php
        include_once('layouts/zz-header.php');
         include_once('layouts/header.php')?>

		<!-- Main Container  -->
		<section class="so-spotlight1 ">
			<div class="container">
				<div class="row">
				    <?php include_once('layouts/home/category-home.php')?>
					<div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="smartphone-tablet-owl">
                            <div class="row">
                                <?php if(isset($list) && !empty($list)){
                                foreach($list as $k => $v2){?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product-layout ">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container  second_img ">
                                                    <?php $img= explode(',',$v2['avatar']);
																$itemImg= $img[0]; ?>
                                                    <a href="<?= $base_url?>/product/<?= $v2['url_code']?>-<?= $v2['code']?>"
                                                        class="product-img"><img src="<?= $base_url?>/<?= $itemImg?>"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="right-block text-center">
                                                <div class="caption">
                                                    <h4><a href="<?= $base_url?>/product/<?= $v2['url_code']?>-<?= $v2['code']?>"><?= $v2['name']?></a></h4>

                                                    <div class="description item-desc hidden">
                                                        <p><?= $v2['name']?> </p>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <a href="<?= $base_url?>/product/<?= $v2['url_code']?>-<?= $v2['code']?>" class="addToCart btn btn-default " data-toggle="tooltip"
                                                        title="" data-original-title="xem chi tiết"> <span class="">Xem
                                                            chi
                                                            tiết</span></a>
                                                </div>
                                            </div><!-- right block -->
                                        </div>
                                    </div>
                                </div>
                                <?php }}?>
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</section>
        <div class="main-container container " style="padding-top: 3em;">
            <div class="row">
                <div class=" col-md-3 col-sm-12 hidden-xs ">
                    
                    

                </div>

                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="smartphone-tablet-owl">
                        <div class=" owl-carousel related-owl ">
                            <div class="row">
                                <?php if(isset($prodcutSort) && !empty($prodcutSort)){
                                foreach($prodcutSort as $k => $v){?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product-layout ">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container  second_img ">
                                                    <?php $img= explode(',',$v2['avatar']);
																$itemImg= $img[0]; ?>
                                                    <a href="<?= $base_url?>/product/<?= $v2['url_code']?>-<?= $v2['code']?>"
                                                        class="product-img"><img src="<?= $base_url?>/<?= $itemImg?>"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="product.html"><?= $v2['name']?></a></h4>

                                                    <div class="description item-desc hidden">
                                                        <p><?= $v2['name']?> </p>
                                                    </div>
                                                </div>

                                                <div class="button-group">
                                                    <button class="addToCart btn btn-default " data-toggle="tooltip"
                                                        title="" data-original-title="xem chi tiết"> <span class="">Xem
                                                            chi
                                                            tiết</span></button>
                                                </div>
                                            </div><!-- right block -->
                                        </div>
                                    </div>
                                </div>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container container " style="padding-top: 3em;">
            <div class="row">
                <?php if(isset($group) && !empty($group)){
                    foreach($group as $k => $v){
                        if(!empty($v['list']) && isset($v['list'])){?>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="modtitle"><a href="<?= $base_url?>/product/list/<?= $v['code']?>"><?= $v['name']?>
                            <??>
                    </h3>
                    <hr>
                    <hr>
                    <hr>
                    <div class="smartphone-tablet-owl">
                        <div class="row">
                            <?php if(($v['list']!='') && isset($v['list'])){
                                foreach($v['list'] as $k1 => $v2){?>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="product-layout ">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container  second_img ">
                                                <?php $img= explode(',',$v2['avatar']);
                                                     $itemImg= $img[0]; ?>
                                                <a href="<?= $base_url?>/product/<?= $v2['url_code']?>-<?= $v2['code']?>"
                                                    class="product-img"><img src="<?= $base_url?>/<?= $itemImg?>"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="product.html"><?= $v2['name']?></a></h4>

                                                <div class="description item-desc hidden">
                                                    <p><?= $v2['name']?> </p>
                                                </div>
                                            </div>

                                            <div class="button-group">
                                                <button class="addToCart btn btn-default " data-toggle="tooltip"
                                                    title="" data-original-title="xem chi tiết"> <span class="">Xem chi
                                                        tiết</span></button>
                                            </div>
                                        </div><!-- right block -->
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                </div>
                <?php }}}?>
            </div>
        </div>
    </div>
    <!-- //Main Container -->
    <!-- Block Spotlight3  -->

    <!-- //Block Spotlight3  -->
    <script type="text/javascript">
    var $typeheader = 'header-home1';
    </script>

    <!-- Footer Container -->
    <?php include_once('layouts/footer.php')?>
    <!-- //end Footer Container -->


    <!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/libs.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js">
    </script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/datetimepicker/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/modernizr/modernizr-2.6.2.min.js"></script>
    <!-- <script type="text/javascript" src="<?= $base_url?>/public/home/js/bootstrap-notify.min.js"></script> -->

    <!-- Theme files
	============================================ -->
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/application.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/homepage.js"></script>
    <!-- <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/toppanel.js"></script> -->
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/pathLoader.js"></script>

</body>

</html>