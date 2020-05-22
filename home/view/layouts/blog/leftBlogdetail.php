<aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3" id="column-left">

					<div class="module blog-category titleLine">

						<div style="background: #80bb35; padding:0.5em 0.8em 0.3em 0.8em ; ">
							<h4 class="modtitle" style="color: #fff">Bài viết mới nhất</h4>
						</div>
						
						<div class="modcontent" >
							<ul class="list-group "	>
								<?php if(isset($bloghots)){
									foreach ($bloghots as $key => $v) {?>
										<li class="list-group-item "  style="border-radius:0px" >
											<div class="row">
												<div class="col-md-5">
													<img class="popup-gallery" src="<?= $base_url?>/upload/blogs/<?= $v['avatar']?>" alt="<?= $v['title']?>" style="width: 100px"/>
												</div>
												<div class="col-md-7 p-0">
													<a href="<?= $base_url?>/<?= $v['title_url']?>-<?= $v['code']?>.html"><?= $v['title']?><br>
													</a>
												</div>
											</div>
											
										
										</li>
									<?php }
								}?>
								
							</ul>
						</div>
					</div>
				</aside>