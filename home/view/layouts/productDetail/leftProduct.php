<section class="col-lg-3 hidden-sm hidden-md hidden-xs slider-products">
											<div class="module latest-product titleLine">
												<h3 class="modtitle">Sản phẩm liên quan</h3>
												<hr>
												<hr>
												<hr>
												<div class="modcontent ">
													<?php if(isset($prodcutSort2) && !empty($prodcutSort2)){
														foreach ($prodcutSort2 as $key => $v) {?>
													<div class="product-latest-item transition">
														<div class="media">
															<div class="media-left" style="width: 120px" >
															<?php $img =explode(',',trim($v['avatar'],',')); ?>
																<a href="<?= $base_url?>/product/<?= $v['url_code']?>-<?= $v['code']?>">
																<img src="<?= $base_url?>/<?= $img[0]?>" alt="<?= $v['name']?>" title="<?= $v['name']?>" class="img-responsive" style="width:100%"></a>
															</div>
															<div class="media-body">
																<div class="caption">
																	<h4><a href="<?= $base_url?>/product/<?= $v['url_code']?>-<?= $v['code']?>"><?= $v['name']?></a></h4>
																	<a href="<?= $base_url?>/product/<?= $v['url_code']?>-<?= $v['code']?> " class="btn btn-success">Xem chi tiết</a>
																</div>
															</div>
														</div>
													</div>
												<?php } }?>
												</div>
											</div>
											
									</section>