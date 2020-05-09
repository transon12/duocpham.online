<!doctype html>
<html class="no-js" lang="vi">
    <head>

       <?php include_once 'layouts/favicon.php';?>
    <!-- CSS here -->
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/animate.min.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/magnific-popup.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/themify-icons.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/meanmenu.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/custom-animation.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/aos.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/slick.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/default.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/style.css">
        <link rel="stylesheet" href="<?=$base_url?>/public/assets_blog/css/responsive.css">
    </head>
    <style type="text/css" media="screen">
            .main-menu ul li a {
                font-weight: 600;
                color: #ffff;
                text-transform: uppercase;
                padding: 30px 0;
                display: block;
                font-size: 15px;
                font-family: 'Poppins', sans-serif;
            }
        .search-form{
            border: 1px solid;
            border-radius: 3em;
        }
        .search-form input {
            text-transform: capitalize;
            border-radius: 3em;
        }
        .footerDescription{
    display: inline-flex;
    flex-wrap: nowrap;

}
@media only screen and (max-width: 667px){
.footerDescription{
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: center;
}
}
.slider-area{
    overflow-x: hidden !important
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
            <div class="page-title-area pos-relative gray-bg pt-150 pb-120 fix" style="background-image: url(<?= $base_url?>/public/assets/img/bg/page-title-bg-3.jpg); background-repeat: no-repeat;">
                <div class="page-title-bar-overlay" style="background-color: #e07b32c9;"></div>
                <div class="shape-slider">
                    <img class="shape shape-2  " src="<?=$base_url?>/public/assets_blog/img/shape/shape2.png" alt="thiết kế mobile app">
                    <img class="shape shape-4 " src="<?=$base_url?>/public/assets_blog/img/shape/shape3.png" alt="thiết kế mobile app">
                    <img class="shape shape-5 " src="<?=$base_url?>/public/assets_blog/img/shape/shape-sq.png" alt="thiết kế mobile app">
                    <img class="shape shape-6 " src="<?=$base_url?>/public/assets_blog/img/shape/shape-c-2.png" alt="thiết kế mobile app">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 ">
                            <div class="page-title title-white-text mb-30 text-center">
                                <h1 style="color: #fff; font-size: 2.5em; font-weight: 600"><?= $name['name']?></h1>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- page-title-area end -->

            <!-- blog-area start -->
            <section class="blog-area pt-80 pb-80">
                <div class="container">
                    <div>
                        <h2>Bài viết danh mục "<?=$name['name']?>"</h2>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                          <div class="row">
                            <?php if (isset($blog_cate) && !empty($blog_cate)) :?>
                            <?php foreach ($blog_cate as $val) :?>
                              <div class="col-md-6 mb-40">
                                <div style="border: 1px solid #E4DCDC">
                                  <article class="postbox post format-image mb-10">
                                    <div class="postbox__thumb mb-20">
                                      <a href="<?=$base_url?>/<?=url_link_encode($val['title_url'],$val['code'])?>.html">
                                        <img title="<?=$val['title']?>" style="width: 100%; height: 33%;" src="<?=$base_url?>/upload/blogs/<?=$val['avatar']?>" alt="<?=$val['title']?>">
                                      </a>
                                    </div>
                                    <div style="padding: 0 7px;" class="postbox__text">
                                      <p class="blog-title" style="margin-bottom: 5px;">
                                        <a title="<?=$val['title']?>" href="<?=$base_url?>/<?=url_link_encode($val['title_url'],$val['code'])?>"><?=mb_substr($val['title'],0,70,'UTF-8')?></a>
                                      </p>
                                      <div class="post-meta mb-10">
                                        <span><i class="far fa-calendar-check"></i> <?=date('d/m/Y',strtotime($val['date_create']))?> </span>
                                      </div>
                                      <div class="read-more">
                                        <a style="text-transform: capitalize;" href="<?=$base_url?>/<?=url_link_encode($val['title_url'],$val['code'])?>">Xem thêm<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                      </div>
                                    </div>
                                  </article>
                                </div>
                              </div>
                            <?php endforeach ?>
                            <?php endif ?>
                          </div>
                            <div class="basic-pagination basic-pagination-2 mb-40">
                                <ul>
                                   <?php if (!isset($_GET['pages'])) {
                                      $page = 1;
                                    }
                                    else {
                                      $page = $_GET['pages'];
                                    } ?>
                                    <?php if ($page > 1) : ?>
                                    <li><a href="<?=$base_url?>/<?=$code?>?pages=<?=$page-1?>"><i class="fas fa-angle-double-left"></i></a></li>
                                    <?php endif ?>
                                      <?php if (!isset($_GET['pages']) || $_GET['pages'] == 1) {
                                        $active = "active";
                                        $color = "onpage";
                                      } else{
                                        $active = '';
                                        $color = '';
                                      }?>
                                    <li class="<?=$color?> <?=$active?>"><a href="<?=$base_url?>/<?=$code?>?pages=1">1</a></li>
                                    <?php for ($i=2; $i <= $pages ; $i++) : ?>
                                      <?php $active = ''; ?>
                                      <?php $color = ''; ?>
                                      <?php if (isset($_GET['pages']) && $_GET['pages'] == $i) {
                                        $active = 'active';
                                        $color = "onpage";
                                      } ?>
                                    <li class="<?=$color?> <?=$active?>"><a href="<?=$base_url?>/<?=$code?>?pages=<?=$i?>"><?=$i?></a></li>
                                    <?php endfor ?>
                                    <?php if ($page < $pages): ?>
                                    <li><a href="<?=$base_url?>/blogs/category/<?=$code?>?pages=<?=$page+1?>"><i class="fas fa-angle-double-right"></i></a></li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget mb-50">
                            <div class="search-form">
                            <form action= "<?= $base_url?>/search">
                                <input id="keyword" type="text" name="keyword" placeholder="Tìm kiếm bài viết...">
                                <button id="click" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                            <div class="widget mb-50">
                                <div class="widget-title-box mb-40">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Bài viết phổ biến</h3>
                                </div>
                                <ul class="recent-posts">
                                  <?php if (isset($list_popular) && !empty($list_popular)):?>
                                  <?php foreach ($list_popular as $val) :?>
                                    <li>
                                        <div class="widget-posts-image">
                                            <a href="<?=$base_url?>/blogsdetails/<?=url_link_encode($val['title_url'],$val['code'])?>"><img title="<?=$val['title']?>" src="<?=$base_url?>/upload/blogss/<?=$val['avatar']?>" alt="<?=$val['title']?>"></a>
                                        </div>
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a title="<?=$val['title']?>" href="<?=$base_url?>/blogsdetails/<?=url_link_encode($val['title_url'],$val['code'])?>"><?=mb_substr($val['title'],0,50,'UTF-8')?></a></h6>
                                            <div class="widget-posts-meta"><i style="color: #ff5b5b" class="far fa-calendar-check"></i> <?=date('d/m/Y',strtotime($val['date_create']))?> </div>
                                        </div>
                                    </li>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <div class="widget mb-50">
                                <div class="widget-title-box mb-40">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Danh mục</h3>
                                </div>
                                <ul class="cat">
                                  <?php if (isset($list_cat) && !empty($list_cat)) :?>
                                  <?php foreach ($list_cat as $val) :?>
                                    <li>
                                        <a href="<?=$base_url?>/<?=$val['code']?>"><?=$val['name']?></a>
                                    </li>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <div class="widget mb-50">
                                <div class="widget-title-box mb-40">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Liên kết mạng xã hội</h3>
                                </div>
                                <div class="social-profile">
                                    <a href="#" style="background-color: #4267b2"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" style="background-color: #1da1f2"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#" style="background-color:#0073b0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" style="background: #ff0000"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="widget-title-box mb-40">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Từ khóa tìm kiếm</h3>
                                </div>
                                <div class="tag">
                                <?php if (isset($tags) && !empty($tags)) :?>
                                <?php foreach ($tags as $val) :?>
                                    <a href="<?=$base_url?>/blogs/search?keyword=<?=strEnglish($val)?>"><?=$val?></a>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area end -->


        </main>
        <?php include "layouts/footer.php";?>
        <!-- footer end  -->
    <!-- JS here -->
        <script src="<?=$base_url?>/public/assets_blog/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/popper.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/owl.carousel.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/isotope.pkgd.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/one-page-nav-min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/slick.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/jquery.meanmenu.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/ajax-form.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/wow.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/aos.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/jquery.firefly-0.7.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/jquery.scrollUp.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/imagesloaded.pkgd.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/plugins.js"></script>
        <script src="<?=$base_url?>/public/assets_blog/js/main.js"></script>
        <script src="<?= $base_url?>/home/view/js/menux.js"></script>
      
        <script>
            $('#click').click(function() {
                var keyword = $('#keyword').val();
                if (keyword != '') {
                    window.location.href = '<?=$base_url?>/blogs/search?keyword='+keyword+'';
                }
                else{
                    alert('Vui lòng nhập từ khoaó tìm kiếm');
                }
                
            });

            function keyups() {
              var x = document.getElementById("keyword").value;
              var y= x.replace(' ', '-');
              document.getElementById("keyword2").innerHTML = y;
            }
           $(document).ready(function(){
            $(window).scroll(function (event) {
                 var a = $('.main-menu').find('a');
              var sticky= $('html,body').scrollTop();
              if (sticky>100) {
              a.css('color','#000');
             
              }else{
              a.css('color','#fff');
              }
            })
          })
        </script>
    </body>
</html>
