<!DOCTYPE html>
<html lang="en">

<head>
    <title>vinnate - <?= $item['title']?></title>
	
    <!-- Libs CSS
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url?>/public/home/css/bootstrap/css/bootstrap.min.css">
    <link href="<?= $base_url?>/public/home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/css/themecss/lib.css" rel="stylesheet">
    <link href="<?= $base_url?>/public/home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    
	<!-- Theme CSS
	============================================ -->
	<link href="<?= $base_url?>/public/home/css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="<?= $base_url?>/public/home/css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?= $base_url?>/public/home/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?= $base_url?>/public/home/css/footer1.css" rel="stylesheet">
	<link href="<?= $base_url?>/public/home/css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="<?= $base_url?>/public/home/css/theme.css" rel="stylesheet">
	<link href="<?= $base_url?>/public/home/css/customcss.css" rel="stylesheet">
	<link id="color_scheme" href="<?= $base_url?>/public/home/css/style.css" rel="stylesheet">
	<!-- <link href="<?= $base_url?>/public/home/css/responsive.css" rel="stylesheet"> -->
	
	
	

</head>

<body class="res layout-subpage">

	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
	        <!-- Header Top -->
			<?php 
			include_once('layouts/zz-header.php');
			include_once 'layouts/header.php';?>
	        <!-- //Header Top -->

	        <!-- Header center -->
	        <!-- //Header center -->

	        <!-- Header Bottom -->
	        <!-- Navbar switcher -->
	        <!-- //end Navbar switcher -->

	    </header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main">
				<li class="home"><a href="#">Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>

				<li><a href="#">
					<?php if( $item['status']==3){
						echo 'Chứng nhận';
					}else{
						if( $item['status']==1)
							{echo "Blogs";}
						else{
							echo "Giới thiệu";
						}
					}?>
					
				</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#"><?= $item['title']?> </a></li>

			</ul>

			<div class="row">
				<!--Left Part End -->

				<!--Middle Part Start-->
				<?php include_once 'layouts/blog/contentBlogdetail.php'?>
				<!--Left Part Start -->
				<?php include_once 'layouts/blog/leftBlogdetail.php'?>

			</div>
			<!--Middle Part End-->
		</div>
							<!-- //Main Container -->


							<!-- Footer Container -->
		<?php include_once 'layouts/footer.php';?>
		
		
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/libs.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="<?= $base_url?>/public/home/js/themejs/application.js"></script>
	
</body>
<script>
				function openNav() {
				  document.getElementById("mySidenav").style.width = "100%";
				  $('#mySidenav').children('.categoryMobile').remove();
				  $('#mySidenav').append('<div class="categoryMobile"></div>');
				  var html= $('#test-mobile').html()
				   $('#mySidenav').children('.categoryMobile').html(html)
				     $('#mySidenav').children('.categoryMobile').find('li').each(function(){
				      $(this).append('<div class="iconMobile"></div>')
				     })
				  }
				function closeNav() {
				  document.getElementById("mySidenav").style.width = "0";
				}

				$(document).on('click', '.iconMobile', function() {
				   $('.sub-menu').removeClass('show');
				   $('.iconMobile').parent().find('.sub-menu').slideUp(1000, function() {
				   $(this).css({display: 'none'});
				 });

				 $(this).parent().find('.sub-menu').slideDown(1000, function() {
				   $(this).addClass('show');
				   
				 });
				 $(this).parent().find('.sub-menu').find('li').find('.iconMobile').remove();
				 $(this).parent().find('.sub-menu').find('li').find('.submenu').remove()
				});

		</script>
<script>
	 $(window).on('load', function(event) {
        $('body').removeClass('preloading');
        $('.load').delay(1000).fadeOut(2000);
          });
</script>
<script>
	 $('.megamenu li a').each(function(){
	 	var url =  $(location).attr('href');
	 	if($(this).attr('href').indexOf(url) !== -1){
	 	$(this).addClass('active');
	 	}
      });
</script>
</body>
</html>