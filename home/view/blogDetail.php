<!doctype html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $detail['title']?> </title>
    <meta name="description" content="<?= $detail['description']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="tags" content="<?= $detail['tags']?>">
    <meta name="keyword" content="<?= $detail['keywords']?>">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="canonical" href="<?=$base_url?>/<?=url_link_encode($detail['title_url'],$detail['code'])?>" />
    <meta name="DC.title" content="" />
    <meta name="keyword" content="<?=$detail['keywords']?>">
    <meta name="tags" content="<?=$detail['tags']?>">
    <!--share twitter-->
    <meta name="twitter:title" content="<?=$detail['title']?>" />
    <meta name="twitter:description" content="<?=$detail['description']?>" />
    <!--share facebook -->
    <meta property="og:url" content="<?=$base_url?>/<?=url_link_encode($detail['title_url'],$detail['code'])?>" />
    <meta property="og:title" content="<?=$detail['title']?>" />
    <meta property="og:description" content="<?=$detail['description']?>" />
    <meta property="og:image" content="https://appwe.vn/upload/blogs/<?=$detail['avatar']?>" />
    <meta name="robots" content="follow,index" />
    <meta  property="og:site_name" content="<?= $detail['title']?>" >
    <meta  property="og:updated_time" content="2019-11-01 00:00:00" >
    <meta  property="og:app_id" content="560184944548714" >
    <meta property="article:published_time" content="2020-02-01 00:00:00" />
    <meta property="article:modified_time" content="2020-02-01 00:00:00" /> 
    <meta property="article:section" content="home" />
    <meta property="article:tag" content="<?= $detail['tags']?>" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?= $base_url?>/public/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $base_url?>/public/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $base_url?>/public/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $base_url?>/public/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $base_url?>/public/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $base_url?>/public/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $base_url?>/public/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $base_url?>/public/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url?>/public/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= $base_url?>/public/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $base_url?>/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $base_url?>/public/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url?>/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
<style type="text/css">
    p{
        color: #000;
    }
    .search-form input {
        width: 100%;
        height: 46px;
        border: 0;
        background: rgb(245, 250, 255);
        padding: 0 25px;    
        text-transform: capitalize;
        border-radius: 3em;
        border: 1px solid;
    }
    .search-form button {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        padding: 0px 25px;
        color: rgb(123, 132, 145);
        line-height: 47px;
        border: 0;
        background: none;
    }
    .main-menu ul li a {
        font-weight: 500;
        color: #333;
        text-transform: uppercase;
        padding: 30px 0;
        display: block;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }
    button{
        margin-top: 0;
    }
    .search-form{
        border: 1px solid;
        border-radius: 3em;
    }
    .search-form input {
        text-transform: capitalize;
        border-radius: 3em;
    }
    .search-form input {
        width: 100%;
        height: 3.5em;
        border: 0;
        background: rgb(245, 250, 255);
        padding: 0 25px;
        text-transform: capitalize;
        border-radius: 3em;
        border: 1px solid;}
        .blog-title{
            line-height: 1
        }
        .blog-title a{
            font-size: .7em
        }
        .widget-posts-image{
            width: 30%;
            height:13vh
        }
        .widget-posts-image img{
            width: 100%;
            max-height: 100%
        }
        .widget-posts-title {
            font-size: 14px;
            line-height: 1.3;
        }
        .widget-posts-body {
            padding-left: 1em;}
            .main-menu ul li a {
                font-weight: 600;
            }
            .main-menu ul li a:hover{
                color: #00c867 !important;
            }
        </style>
        <body>


            <?php include_once 'layouts/preLoad.php';?>

            <!-- preloader end -->

            <!-- header start -->
            <?php include "layouts/headerBlog.php";?>

            <!-- header end -->

            <main>
                <!-- page-title-area start -->

                <!-- page-title-area end -->

                <!-- blog-area start -->
                <section class="blog-area pt-120 pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="shape-slider">
                                <img class="shape shape-2  " src="<?= $base_url?>/public/assets/img/shape/shape2.png" alt="Thiết kế mobile app">
                                <img class="shape shape-4 " src="<?= $base_url?>/public/assets/img/shape/shape3.png" alt="Thiết kế mobile app">
                                <img class="shape shape-5 " src="<?= $base_url?>/public/assets/img/shape/shape-sq.png" alt="Thiết kế mobile app">
                                <img class="shape shape-6 " src="<?= $base_url?>/public/assets/img/shape/shape-c-2.png" alt="Thiết kế mobile app">
                            </div>

                            <div class="container pb-3">
                              <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="pull-left">
                                        <div class="a2a_kit a2a_kit_size_22 a2a_default_style" data-a2a-url="<?=$base_url?>/<?=url_link_encode($detail['title_url'],$detail['code'])?>"> 
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_twitter"></a>
                                            <a class="a2a_button_facebook_messenger"></a>
                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="like-box"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-8 col-xs-12 col-sm-12">
                                <article class="postbox post format-image mb-40">
                                    <div class="postbox__thumb mb-35">
                                        <img src="<?=$base_url?>/upload/blogs/<?=$detail['avatar']?>" alt="blog image">
                                    </div>
                                    <div class="postbox__text bg-none">

                                     <?php include_once 'layouts/blogDetail/contentDetail.php';?>


                                 </div>

                             </article>
                         </div>
                         <div class="col-lg-4">
                            <div class="widget mb-50">
                                <div class="search-form">
                                    <input id="keyword" type="text" placeholder="Tìm kiếm bài viết...">
                                    <button id="click" style="margin-top: 0px;" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <?php include_once 'layouts/blogDetail/newBlog.php';?>
                            <?php include_once 'layouts/blogDetail/categoryBlog.php';?>
                            <?php include_once 'layouts/blogDetail/tagBlog.php';?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area end -->


        </main>

        <!-- footer start  -->
        <footer class="footer-5-bg footer-5" style="background: #f1f1f1">
            <div class="footer-area pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-6">
                            <div class="footer-widget mb-10 footerDescription">
                                <div class="footer-text pt-5 pr-3 text-center" >
                                  <img src="<?= $base_url?>/public/assets/img/logo.png" alt="APPWE" width="100px" style="margin-bottom: 0">
                              </div>
                              <div class="footer-form pl-20 pt-3">
                                 <p style="color: #333">Appwe (trực thuộc của Công ty Cổ phần Cooftech) là đơn vị công nghệ chuyên cung cấp các giải pháp xử lý đa luồng từ phần mềm, phần cứng đến các dịch vụ thiết kế, lập trình website chuyên nghiệp tại Hà Nội với kho giao diện web có sẵn đa dạng hoặc thiết kế website riêng theo nhu cầu. Chỉ cần bạn có ý tưởng, Appwe sẽ giúp bạn hiện thực hóa ý tưởng đó, giúp bạn kiếm tiền hiệu quả.  Sau hơn 4 năm hoạt động, Cooftech đã có hơn 1000+ website, hơn 300+ dự án, hơn 500+ khách hàng trong và ngoài nước, trong đó có các đối tác lớn, như: PasGo, Vinpearl, Kids Plaza; Chuỗi khách sạn A25 Hotel,…</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="footer-widget pt-2 mb-40 pl-30">
                            <h3 style="color: #333">Địa chỉ liên hệ </h3>
                            <div class="footer-contact">
                                <ul>
                                    <li style="color: #333">
                                        <i   style="color: #333" class="fal fa-map-marked-alt"></i>
                                        <p style="color: #333">Số 2A Xuân Phương, P.Phương Canh, Q.Nam Từ Liêm, Hà Nội.</p>
                                    </li>
                                    <li  style="color: #333">
                                        <i class="fal fa-phone"></i>
                                        <p style="color: #333">+84 358.685.840</p>
                                    </li>
                                    <li style="color: #333">
                                        <i class="fal fa-envelope-open"></i>
                                        <p  style="color: #333"> hotro@cooftech.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-area cop-sep pt-20 pb-20">
            <div class="container">
                <div class="copyright-border-none">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="copyright text-white" >
                                <p style="color:#bbb">Copyright © 2019 cooftech.com All rights reserved</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="application/ld+json">
        {
            "@context":"http://schema.org",
            "@type":"NewsArticle",
            "mainEntityOfPage":{
            "@type":"WebPage",
            "@id":"<?= $detail['title_url']?>"
        },
        "headline":"<?= $detail['title']?>",
        "description":"<?= $detail['description']?>",
        "image":{
        "@type":"ImageObject",
        "url":"<?= $base_url?>/public/assets/favicon/apple-icon-57x57.png",
        "width":720,
        "height":480
    },
    "datePublished":"Mo-SU 09:00 -18:00",
    "dateModified":"Mo-SU 09:00 - 18:00",
    "author":{
    "@type":"Person",
    "name":"APPWE"
},
"publisher":{
"@type": "Organization",
"name":"APPWE",
"logo":{
"@type":"ImageObject",
"url":"<?= $base_url?>/public/assets/favicon/apple-icon-57x57.png"
}
}
}
</script>
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
<script src="<?= $base_url?>/home/view/js/menux.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>

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
    $(document).ready(function() {
       var span = $(document).find('span');
       $("span").css("font-family", "'Roboto', sans-serif");
       $("h2 span").css("font-family", "'Roboto', sans-serif");
        var w= $( window ).width();
        console.log(w);
        var maxw= 667;
        if(w<667){
            $(document).find('#blogdetail').find('img').css({"width":"300px","height":"auto"});}})
</script>
</body>
</html>
