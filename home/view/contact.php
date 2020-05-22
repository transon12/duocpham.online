<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vinnate.com - Liên hệ với chúng tôi</title>
	
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
	<link id="color_scheme" href="<?= $base_url?>/public/home/css/style.css" rel="stylesheet">
	

	

</head>

<body class="res layout-subpage">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
	        <!-- Header Top -->
			<?php 
			 include_once('layouts/zz-header.php');
			include_once 'layouts/header.php';?>
	        <!-- Navbar switcher -->
	        <!-- //end Navbar switcher -->

	    </header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main ">
				<li class="home"><a href="#">Trang chủ   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="home"><a href="#">Thông tin   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  Liên hệ</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-title">
						<h2>Liên hệ</h2>
					</div>
					
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.869344015833!2d105.82538291446588!3d20.9978738860152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac87dd39ea91%3A0xd652e2e58ce9f052!2zVHJ1bmcgVMOibSBk4bqheSB0cuG6uyB04buxIGvhu7cgUGjGsMahbmcgVGhhbmg!5e0!3m2!1svi!2s!4v1589374873993!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<div class="info-contact clearfix">
						<div class="col-lg-12 col-sm-12 col-xs-12 info-store">
							<div class="row">
								<div class="name-store">
									<h3>Cửa hàng</h3>
								</div>
								<address>
									<div class="col-md-12 col-xs-12">
                                    	<?= $item['content']?>
					                </div>
								</address>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //Main Container -->
		

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
		
</body>
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
	<script>
		
		 $('.megamenu li a').each(function(){
		 	var url =  location.pathname;
		 	if($(this).attr('href').indexOf(url)!== -1){
		 	$(this).addClass('active');
		 	
		 	}
          });
		 var	x= document.getElementsByClassName('active');
		 var	y= document.getElementsByClassName('megamenu');
		 var i; 
		 	 for (i = 0; i < x.length; i++) {
			   x[0].classList.remove("active")
			  }
	</script>
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
</body>
</html>