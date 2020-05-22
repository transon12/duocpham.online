<div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 zoom-popup ">
						<?php $img =explode(',',trim($item['avatar'],',')); ?>
									<div class="large-image  ">
										<img itemprop="image" class="product-image-zoom" src="<?= $base_url?>/<?=$img[0]?>" data-zoom-image="<?= $base_url?>/<?=$img[0]?>>"  title="Bint Beef" alt="Bint Beef">
									</div>
									<div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl-carousel " data-nav='yes' data-loop="yes" data-margin="10" data-items_xs="2" data-items_sm="3" data-items_md="4">
										<?php if(isset($img)){
											$i= 10;
											foreach ($img as $key => $v) {?>
											<a data-index="<?= $i?>" class="img thumbnail "  data-image="<?= $base_url?>/<?=$v?>" title="Bint Beef">
												<img src="<?= $base_url?>/<?=$v?>" title="<?=$item["name"]?>" class="imgs" alt="<?=$item["name"]?>">
											</a>
										<?php  
										$i++;}
											}?>
									</div>

								</div>
