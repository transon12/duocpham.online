<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<?php if (isset($item) && !empty($item)){
						foreach ($item as $key => $v) {?>
								<div class="blog-listitem">
									<div class="blog-item ">
										<div class="itemBlogImg ">
											<div class="article-image ">
												<div>
													<div class="day">
														<p><?= date('d',time($v['date']))?></p>
														<p><?= date('m',time($v['date']))?></p>
													</div>
													<img class="popup-gallery" src="<?= $base_url?>/cms/<?= $v['img']?>" alt="<?= $v['title']?>"/>
												</div>
											</div>
										</div>
										<div class="itemBlogContent ">
											<div class="article-title">
												<h4>
													<a href="<?= $base_url?>/blog/blogdetail?code=chi-tiet-blog&blog=<?= $v['id']?>&id=<?=md5($v['id'])?>"><?= $v['title']?></a>
												</h4>

											</div>
											<div class="article-description">
												<?= readMore($v['content'],'<a href='. $base_url.'/blog/blogdetail?code=chi-tiet-blog&blog='.$v['id'].'&id='.md5($v['id']).'>...Xem thêm</a>')?>				    
											</div>
											
											</div>
									</div>
									
								</div>
						<?php }
					} ?>
				
				</div>