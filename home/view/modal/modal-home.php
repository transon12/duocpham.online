
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                          <?php 
                                            $i=1;
                                            foreach(json_decode($product['image']) as $k=>$v){?>
                                                <div id="metro-related<?= $i?>"  class="tab-pane fade bottom <?php if($i==1){echo 'active';}?> in">
                                                                                    <a href="#"><img class="img-responsive" src="<?=$base_url?>/upload/product/item/<?=$v?>" alt="single"></a>
                                                                                </div>
                                                                                <?php $i++; }?>
                                       
                                    </div>
                                    <ul>
                                         <?php 
                                         $i=1;
                                            foreach(json_decode($product['image']) as $k=>$v){?>
                                        <li class="<?php if($i==1){echo 'active';}?>">
                                                                                    <a aria-expanded="false" data-toggle="tab" href="#metro-related<?=$i?>"><img class="img-responsive"src="<?=$base_url?>/upload/product/item/<?=$v?>" alt="related1"></a>
                                                                                </li>
                                                                               <?php $i++; }?>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3><?php  echo $product['name'];?></h3>
                                    <ul>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    </ul>
                                    <p><?= $product['description'] ?></p>
                                            <div class="product-details-content">
                                                <p><span>Người bán:</span></span> <?= $product['ncc_name']?> </p>
                                                <p><span>Tình trạng:</span> Còn trong kho</p>
                                                <p><span>Giá bán:</span> <?= number_format($product['price_min'])?></p>
                                                <p><span>Danh mục:</span> <?= $product['piname']?></p>
                                                <p><span>Xuất Xứ:</span> <?= $product['country_name']?></p>
                                    <ul class="product-details-social">
                                        <li>Chia sẻ:</li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Thêm vào giỏ </a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                <div class="input-group-btn-vertical">
                                                    <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn-services-shop-now" style="background: #fff" data-dismiss="modal">Đóng</a>
            </div>