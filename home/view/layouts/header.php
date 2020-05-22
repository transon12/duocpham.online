<header id="header" class=" variantleft type_1">
			<div class="header-bottom" style="background: #80BB35">
				<div class="container">
					<div class="row">


						<!-- Main menu -->
						<div class=" col-md-3 col-sm-3 col-xs-3 text-center">
							<div class="logo-2 megamenu-hori navbar-logo">
								<a href="<?= $base_url?>">	<img src="<?= $base_url?>/public/home/img/logovinate.png" alt="logo" style="width:60px">
									<h1 class="logovinnate" >Vinnate</h1></a>
								</div>
							</div>
							
						<div class="megamenu-hori header-bottom-right  col-md-9 col-sm-9 col-xs-9 " >
							<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="<?= $_GET['c']=='home'? "active": ""?>">
															<p class="close-menu"></p>
															<a href="<?= $base_url?>" class="menu1">Trang chủ  </a>
															
														</li>
														<li class="with-sub-menu hover <?= $_GET['c']=='product'? "active": ""?>">
															<p class="close-menu"></p>
															<a href="<?= $base_url?>/product/list" class="clearfix menu1">
																<strong>sản phẩm</strong>
																
															</a>
															<div class="sub-menu" style="width: 25%; right: 0px; display: none;">
																<div class="content" style="height: 288px; display: none;">
																	<div class="row">
																		
																		<?php if(isset($category) && !empty($category)){
                                                       						 foreach($category as $k =>$v){?>
																		<div class="col-md-12">
																			<div class="column">
																				<a href="<?= $base_url?>/product/list?category=<?= $v['code']?>" class="title-submenu"><?= $v['name']?></a>
																			</div>
																		</div>
																	<?php }}?>
																	</div>
																</div>
															</div>
														</li>
														
														<li class="<?= $_GET['c']=='blogs'? "active": ""?>">
															<p class="close-menu"></p>
															<a href="<?= $base_url?>/blogs" class="clearfix menu1">
																<strong>Tin tức</strong>
																<span class="label"></span>

															</a>
														</li>

														<li class="with-sub-menu hover <?= $_GET['c']=='info'? "active": ""?>">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1 ">
																<strong>Giới thiệu</strong>


															</a>
															<div class="sub-menu" style="width: 20%; right: 0px; display: none;">
																<div class="content" style="height: 288px; display: none;">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="column">
																				<a href="<?= $base_url?>/info/gioi-thieu" class="title-submenu">Về chúng tôi</a>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="column">
																				<a href="<?= $base_url?>/info/chung-nhan" class="title-submenu">Chứng nhận</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu <?= $_GET['c']=='contact'? "active": ""?>" ></p>
															<a href="<?= $base_url?>/contact" class="clearfix menu1">
																<strong>Liên hệ</strong>
															</a>
														</li>
													</ul>

												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
						<!-- //end Main menu -->

					</div>
				</div>

			</div>

			<!-- Navbar switcher -->
			<!-- //end Navbar switcher -->

		</header>
		<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="820085438140360"
  theme_color="#13cf13"
  logged_in_greeting="Liên hệ với Chúng Tôi ngay!!!"
  logged_out_greeting="Liên hệ với Chúng Tôi ngay!!!">
      </div>