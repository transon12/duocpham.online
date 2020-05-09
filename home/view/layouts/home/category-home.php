<div class="row products-container ">
                        <h4><b class="falsh-deal">Danh mục nghành hàng</b></h4>
                        <div class="borders">
                        <?php if (!empty($industry)) {
                           foreach ($industry as $key => $v) {
                            
                       ?>
                        <div class="col-md-2 col-sm-6 col-xs-6 col-lg-2 popular">
                        <div class="product-box">
                            <div class="portfolio2-img-holder text-center pl-30">
                                 <a href="<?=$base_url?>/product/industry/Thong-tin-nhom-hang-<?=$v['id']?>-<?php echo strEnglish($v['name'])?>" class="text-center "><img class="img-responsive" src="<?=$base_url?>/upload/product/category/<?=$v['avatar']?>" alt="<?= $v['name']?>" style="width: 120px"></a>
                            </div>
                        </div>
                        <div class=" text-center info-popular">
                            <input type="hidden" name="" value="<?= $v['id']?>">
                            <a class="text-capitalize" style="text-transform: lowercase" href="<?=$base_url?>/product/industry/Thong-tin-nhom-hang-<?=$v['id']?>-<?php echo strEnglish($v['name'])?>"><?php echo ucfirst($v['name'])?></a><br>
                                <?php if(isset($v['list'])){
                                  
                                    echo count($v['list']).' Sản phẩm' ;
                                }else{
                                        echo "0 Sản phẩm";
                                    }?>
                        </div>
                        </div>
                        <?php     }
                        }?>
                </div>
                </div>