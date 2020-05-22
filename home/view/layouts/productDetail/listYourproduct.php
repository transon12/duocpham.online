<div class="related-product ">
										<h3 class="modtitle">Sản phẩm dành cho bạn  </h3>
										<hr>
										<hr>
										<hr>
										<div class="related-product-owl">
											<div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30" data-items_xs="1" data-items_sm="4" data-items_md="5">
												<?php if (isset($productbrand)) {
													foreach ($productbrand as $key => $v2) {?>
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
																			<h4><a href="<?= $base_url?>/product/<?= $v['url_code']?>-<?= $v['code']?>"><?= $v2['name']?></a></h4>

																			<div class="description item-desc hidden">
																				<p><?= $v2['name']?> </p>
																			</div>
																		</div>

																		<div class="button-group">
																		<a href="<?= $base_url?>/product/<?= $v['url_code']?>-<?= $v['code']?>" class="addToCart btn btn-default " data-toggle="tooltip"
																				title="" data-original-title="xem chi tiết"> <span class="">Xem
																					chi
																					tiết</span></a>
																		</div>
																	</div><!-- right block -->
																</div>
															</div>
												<?php }
												} ?>
												

											</div>
										</div>
									</div>