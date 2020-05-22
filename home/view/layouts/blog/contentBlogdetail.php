<div id="content-detail" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
					
					<?php if (isset($item) && !empty($item)){ ?>
						<div class="article-info">

						<div class="blog-header">
							<h2><a href="<?= $base_url?>/<?= $base_url?>/<?= $item['url-code']?>-<?= $item['id']?>&id=<?=md5($item['id'])?>"><?= $item['title']?></a></h2>
						</div>
						<div class="article-image" >
							<img class="popup-gallery" src="<?= $base_url?>/upload/blogs/<?= $item['avatar']?>" alt="<?= $item['title']?>" style="width: 100%; height: 60%">
							</div>
								<div class="blog-listitem">
									<div class="blog-item ">
										
										<div class="itemBlogContent ">
											</div>
											<div class="article-description">
												<?= $item['content']?>				    
											</div>
											</div>
									</div>
									
								</div>
						<?php } ?>
				
				</div>