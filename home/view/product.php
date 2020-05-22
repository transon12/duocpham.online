
<!DOCTYPE html>
<html lang="en">

<head>
<title>Vinnate.com.vn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


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
    <link href="<?= $base_url?>/public/home/css/customcss.css" rel="stylesheet">
    <link id="color_scheme" href="<?= $base_url?>/public/home/css/style.css" rel="stylesheet">


  </head>
  <style>
     body{
        font-family: 'Roboto', sans-serif !important;

    }
  </style>

 <body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">



      <!-- Header Container  -->
      <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <?php 
        include_once('layouts/zz-header.php');
        include_once 'layouts/header.php';?>
        <!-- //end Navbar switcher -->

      </header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main type-1">
				<li class="home"><a href="#">Trang chủ<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li class="home"><a href="#">Nhóm hàng<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">Sản phẩm mẫu</a></li>
			</ul>

			<div class="row">
				<!--Middle Part Start-->
				<div id="content " class="col-md-12 col-sm-12 type-1">

					<div class="product-view row">
						<div class="left-content-product col-lg-9 col-xs-12">
							<div class="row">
								<?php include_once 'layouts/productDetail/imgProduct.php';?>
								<?php include_once 'layouts/productDetail/infoProduct.php';?>					
							</div>
								<div class="row">
									<div class="col-sx-12">
										<?php include_once 'layouts/productDetail/descriptionProduct.php'; ?>
									</div>
								</div>
									<?php include_once 'layouts/productDetail/leftProduct.php'; ?>
									
									</div>
									<!-- Related Products -->
									<?php include_once 'layouts/productDetail/listYourProduct.php'; ?>

									<!-- end Related  Products-->


								</div>


							</div>
							<!--Middle Part End-->
						</div>    

<?php include_once 'layouts/footer.php';?>
        <!-- //Block Spotlight3  -->
     

<!-- Footer Container -->

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
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/datetimepicker/moment.js"></script>
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/jquery-ui/jquery-ui.min.js"></script>
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- Theme files
  ============================================ -->
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/so_megamenu.js"></script>
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/addtocart.js"></script>
  <script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/application.js"></script>


 
  
</body>