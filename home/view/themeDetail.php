<!doctype html>
<html class="no-js" lang="vi">
    <head>
        
        <!-- Place favicon.ico in the root directory -->
        <?php include_once 'layouts/favicon.php';?>
		<!-- CSS here -->
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/custom-animation.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/aos.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/slick.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/default.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/style.css">
        <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/responsive.css">
    </head>
    <style type="text/css" media="screen">
      #header-sticky{
        background: #000000e6
      }
    </style>
    <body>


        <!-- preloader  -->
       <?php include_once 'layouts/preLoad.php';?>
        <!-- preloader end -->
        <!-- header start -->
         <?php include_once 'layouts/header.php';?>
        <!-- header end -->

        <main>
            <!-- page-title-area start -->
            <!-- page-title-area end -->

            <!-- shop-banner-area start -->
            <?php if(isset($item) && !empty($item)){?>
            <section class="shop-banner-area pt-120 pb-90">
                 <div class="shape-slider">
                    <img class="shape shape-2  " src="<?= $base_url?>/public/assets/img/shape/shape2.png" alt="<?= $item['name']?>">
                    <img class="shape shape-4 " src="<?= $base_url?>/public/assets/img/shape/shape3.png" alt="<?= $item['name']?>">
                    <img class="shape shape-5 " src="<?= $base_url?>/public/assets/img/shape/shape-sq.png" alt="<?= $item['name']?>">
                    <img class="shape shape-6 " src="<?= $base_url?>/public/assets/img/shape/shape-c-2.png" alt="<?= $item['name']?>">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <div class="product-details-img mb-0 theme-img">
                                <div class=" imgshow imgs" style="max-height: 40em; box-shadow: none">
                                    <img src="<?= $base_url?>/<?= $item['avatar']?>" alt="<?= $item['name']?>">
                                </div>
                            </div>
                          <!--   <div class="noteTheme">
                            <span>Giao diện đang có sẵn</span>
                          </div> -->
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="product-details mb-30">
                                <div class="product-details-title mb-20">
                                    <h1><?= $item['name']?></h1>
                                    <div class="price details-price pb-10">
                                        <span><?= number_format($item['price'])?></span>
                                    </div>
                                </div>
                                <p><?php 
                                  echo $item['description'];
                                ?></p>
                                <div class="product-cat mt-30 mb-20">
                                    <span>từ khóa: </span>
                                    <?php $keyword = explode(',', trim($item['keywords'],',')) ;
                                    foreach ($keyword as $key => $v) {?>
                                     <a href="#"><?= $v?>,</a>
                                    <?php }?>
                                </div>
                                <div class="product-cat mb-20">
                                    <span>Tags: </span>
                                    <?php $tags = explode(',', trim($item['tags'],','));
                                    foreach ($tags as $key => $v) {?>
                                     <a href="#"><?= $v?>,</a>
                                    <?php }?>
                                    </div>
                                    
                               <div class="row">
                                   <div class="col-md-3 pb-3">
                                     <div class="card showImg"  style="max-height: 10em; overflow-y: hidden">
                                            <img class="card-img-top " src="<?= $base_url?>/<?= $item['avatar']?>" alt="<?= $item['name']?>" alt="<?= $item['name']?>" data-img="<?= $base_url?>/<?= $item['avatar']?>" alt="<?= $item['name']?>" >
                                          </div>
                                        </div>
                                    <?php $img=explode(',',trim($item['image'],','));
                                    if (!empty($img)) {
                                      foreach ($img as $key => $v) {?>
                                     <div class="col-md-3 pb-3">
                                       <div class="card showImg" style="max-height: 5.8em; overflow-y: hidden" >
                                              <img class="card-img-top " src="<?= $base_url?>/<?= $v?>" alt="<?= $item['name']?>"       
                                               data-img="<?= $base_url?>/<?= $v?>" >
                                              
                                            </div>
                                          </div>
                                     <?php }
                                    }?>
                                       
                                  
                               </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          <?php }?>
            <!-- shop-banner-area end -->
            <!-- product-desc-area start -->
     
            <!-- product-desc-area end -->

            

        </main>

        <!-- footer start  -->
     <?php include "layouts/footer.php";?>
        <!-- footer end  -->






		<!-- JS here -->
        <script src="<?= $base_url?>/public/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/popper.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/bootstrap.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/owl.carousel.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/isotope.pkgd.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/one-page-nav-min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/slick.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/jquery.meanmenu.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/ajax-form.js"></script>
        <script src="<?= $base_url?>/public/assets/js/wow.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/aos.js"></script>
        <script src="<?= $base_url?>/public/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
        <script src="<?= $base_url?>/public/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $base_url?>/public/assets/js/plugins.js"></script>
        <script src="<?= $base_url?>/public/assets/js/main.js"></script>
        <script src="<?= $base_url?>/home/view/js/mobile.js" type="text/javascript" charset="utf-8" async defer></script>

        <script >
            $('.showImg').click(function(){
                var a= $(this).children('img').attr('data-img');
                console.log(a);
                var html= '<img src='+a+'>';
                 $('.imgshow').children().toggle(500, function() {
                     $(this).remove('img');
                 });
                $('.imgshow').fadeIn(1000,function() {
                    $(this).append(html)
                });
            });
        </script>
    </body>
</html>
