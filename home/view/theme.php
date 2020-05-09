<!doctype html>
<html class="no-js" lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $head['title']?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
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
  <link rel="stylesheet" type="text/css" href="<?= $base_url?>/public/assets/zoomslider/zoomslider.css" />

</head>
<style type="text/css">
  body{
    background: #fff;
    overflow-x: hidden;
    overflow-y: scroll;

  }

  .meanmenu-reveal{
    background: #333;
  }
}        
#demo-1 {
  position: relative; /* can either be relative, absolute or fixed. If position is not set (i.e. static), it would be set to "relative" by script */
  width: 100%;
  min-height: 400px;
  background-color: #999;
}
.demo-inner-content {
  position: absolute; /* if position is not set, the script will set it to 'relative'. */
  z-index: 2; /* if z-index is not set, the script will set it to '2'. */
  padding: 7em 2em;
  width: 100%;
  color: #fff;
  text-align: center;
  font-size: 1.5em;
  top:0;
}
.demo-inner-content h1 {
  font-size: 1.5em;
  margin: 0;
  color: yellow
}
.demo-inner-content p {
  color: #fff
}
.zs-enabled .zs-slideshow{
  position: relative;
  height: 65vh;
  min-height: 25rem;
  top:-2em;

}
.shadow{
 box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
}
.postbox__text h3 a{
  color: #fff
}
</style>
<body>


  <!-- preloader  -->
  <?php include_once 'layouts/preLoad.php';?>

  <!-- preloader end -->

  <!-- header start -->
  <?php include "layouts/header.php";?>
  <!-- header end -->
  <main>
    <!-- page-title-area start -->
    <div id="demo-1" data-zs-src='["<?= $base_url?>/public/assets/photo/cft.jpg", "<?= $base_url?>/public/assets/photo/cft1.jpg"]'>
      <div class="demo-inner-content">
        <h1>Thiết kế website khẳng định thương hiệu</h1>
        <p>Giúp khách hàng có góc nhìn ấn tượng, trải nghiệm hoàn hảo nhất.</p>
      </div>
    </div>
    <!-- page-title-area end -->
    <section class="blog-area pt-30 pb-80" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <article class="postbox post format-image mb-40">
              <div class="postbox__thumb mb-25">
                <a href="#">
                  <img src="<?= $base_url?>/upload/blogs/O162x200219122746.jpg" alt="5 Ý tưởng kinh doanh online kiếm tiền từ Website 2020">
                </a>
              </div>
            </article>
          </div>
          <div class="col-lg-6 col-md-6">
            <article class="postbox post format-image mb-40">
              <div class="postbox__text ">
                <h2 class="blog-title blog-title-sm" style="font-size: 1.5em">
                 Thuê website giá rẻ [chỉ từ 500K]
               </h2>
               <div class="post-text">
                <p>-  Hàng trăm giao diện có sẵn cho bạn tùy chọn, cập nhật liên tục xu hướng thiết kế website mới nhất trên thế giới. <br>
                  -  Xây dựng website đạt chuẩn SEO Onpage. Miễn phí cài đặt công cụ thống kê SEO Google Analytics, Google Search Console. <br>
                  - Bạn được nhận cùng lúc 2 web (website chính, website quản trị). Từ trang quản trị bạn có thể tùy ý thêm mới, chỉnh sửa nội dung bài viết và phân quyền quản trị website. <br>
                  - Thời gian hoàn hành dự án không quá 3 ngày làm việc. <br>
                  - Miễn phí Domain - Sỡ hữu bộ code 100% sau 1 năm - Hỗ trợ 24/7/365. <br>
                  - Hỗ trợ xây dựng form nội dung bài viết chuẩn SEO<br>
                - Hỗ trợ đăng sản phẩm theo mô hình có sẵn.  </p>
              </div>
              <div class="read-more-btn">
                <a href="#" class="read-more">Xem kho giao diên<i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-area pt-30 pb-80">
    <div class="page-title-area pos-relative gray-bg pt-50 pb-50 fix" style="background-image: url(https://s17026.pcdn.co/wp-content/uploads/sites/9/2019/09/AdobeStock_202169920-e1569418042779.jpeg); background-repeat: no-repeat;">
      <div class="page-title-bar-overlay"></div>
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6">
            <article class="postbox post format-image mb-40">
              <div class="postbox__thumb mb-25">
                <a href="#">
                  <img src="https://php.vn/upload/blogs/3S0IS200310172654.jpg" alt="18+ Checklist SEO Onpage Web mới nhất 2020 [Từ Google]" style="height: 240px">
                </a>
              </div>
              <div class="postbox__text ">
                <h3 class="blog-title blog-title-sm">
                  <a href="https://php.vn/18-checklish-check-seo-onpage-web-moi-nhat-2020-200310556172654.html">18+ Checklist SEO Onpage Web mới nhất 2020 [Từ Google]</a>
                </h3>
                <div class="post-text">

                </div>
                <div class="read-more-btn">
                  <a href="https://php.vn/18-checklish-check-seo-onpage-web-moi-nhat-2020-200310556172654.html" class="read-more">xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="postbox post format-image mb-40">
              <div class="postbox__thumb mb-25">
                <a href="#">
                  <img src="https://php.vn/upload/blogs/tT66H200212140938.jpg" alt="14 bước tối ưu SEO Onpage cho thiết kế website hiệu quả" >
                </a>
              </div>
              <div class="postbox__text ">
                <h3 class="blog-title blog-title-sm">
                  <a href="https://php.vn/14-buoc-toi-uu-seo-onpage-cho-thiet-ke-website-hieu-qua-200212598140938.html">14 bước tối ưu SEO Onpage cho thiết kế website hiệu quả</a>
                </h3>
                <div class="post-text">

                </div>
                <div class="read-more-btn">
                  <a href="https://php.vn/14-buoc-toi-uu-seo-onpage-cho-thiet-ke-website-hieu-qua-200212598140938.html" class="read-more">xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="postbox post format-image mb-40">
              <div class="postbox__thumb mb-25">
                <a href="#">
                  <img src="https://php.vn/upload/blogs/ogNs6200211182910.jpg" alt="Cách xây dựng thương hiệu doanh nghiệp qua thiết kế website">
                </a>
              </div>
              <div class="postbox__text ">
                <h3 class="blog-title blog-title-sm">
                  <a href="https://php.vn/cach-xay-dung-thuong-hieu-doanh-nghiep-qua-thiet-ke-website-200211628182910.html">Cách xây dựng thương hiệu doanh nghiệp qua thiết kế website</a>
                </h3>
                <div class="post-text">
                </div>

              </div>
            </article>
          </div>


        </div>

      </div>
    </div>
  </section>
  <section class="blog-area pt-30 pb-80">


    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6">
          <article class="postbox post format-image mb-40">
            <div class="postbox__text ">
             <h3 class="blog-title blog-title-sm" style="font-size: 1.5em">
              Thiết kế kế website giá rẻ
            </h3>
            <div class="post-text">
              <p>
                - Giao diện web Design theo yêu cầu hoặc mẫu có sẵn. <br>
                - Sử dụng cộng nghệ AMP chạy tốt trên mọi thiết bị PC, Table, Mobile,… tối ưu trải nghiệm người dùng.<br>
                - Xây dựng website đạt chuẩn SEO Onpage. Miễn phí cài đặt công cụ thống kê SEO Google Analytics, Google Search Console.<br> 
                - Nội dung hướng người dùng, cung cấp giá trị hữu ích cho người đọc, chuẩn các tiêu chí SEO bài viết và luôn được update thường xuyên<br>
                - Sử dụng công nghệ mới nhất và code theo mô hình MVC giúp dễ dàng  nâng cấp, tăng tính bảo mật, chuẩn SEO và hoạt động ổn định.<br> 
                - Thời gian hoàn hành dự án không quá 7 ngày làm việc. <br>
                - Miễn phí Hosting – Sỡ hữu bộ code 100% khi hoàn thành dự án - Hỗ trợ 24/7/365.<br> </p>
              </div>
              
            </div>
          </article>
           <div class="read-more-btn">
                <a href="<?= $base_url?>/kho-giao-dien" class="read-more">Xem kho giao diên<i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <article class="postbox post format-image mb-40">
            <div class="postbox__thumb mb-25">
              <a href="#">
               <div class="imgs" style="height: 40em; max-height: 400px">
                <img class="card-img-top" src="<?= $base_url?>/public/assets/img/10.jpg" alt="giao diện mẫu">
              </div>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- portfolio-area -->
<section class="pricing-area pt-10 pb-0">
  <div class="page-title-area pos-relative gray-bg pt-100 pb-20 fix" style="background-image: url(<?= $base_url?>/public/assets/img/bg/page-title-bg-2.jpg); background-repeat: no-repeat;">
    <div class="page-title-bar-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
          <div class="section-title-2 text-center mb-70">
            <h3 class="mb-20 text-uppercase" style="color:#fff;">Các gói thiết kế website </h3>
            <p style="color:#fff; font-size: 1em">Lựa chọn các gói thiết kế website từ cơ bản đến chuyên nghiệp tùy mức độ phức tạp.<br> Nhận thiết kế web theo yêu cầu và mẫu sẵn có. </p>
          </div>
        </div>
      </div>
      <div class="price-tab">

        <div class="tab-content" id="myTabContent3">
          <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pricing-tab pricing-tab-4 text-center mb-30" style="background: #fff">
                  <div class="price-img-4 pb-10">
                   <h4 style="font-size: 3em">$60 +</h4>
                 </div>
                 <div class="price-value mb-30">
                  <h5 style="font-size: 1.4em; color: rgb(38, 208, 126)">WEB MẪU CÓ SẴN<h5>
                    <h6 style="font-size: .8em">Có thể thay đổi tùy theo tính năng</h6>
                  </div>
                  <ul>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao diện tùy chọn</li>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí hosting 1G</li>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thời gian hoàn thành 3 ngày</li>

                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí domain .com/.net 1 năm</li>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thiết kế UI/UX đơn giản, thân thiện với người dùng</li>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao dịch online</li>
                   <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> 24/7 Support</li>
                   <li> <i class="fa fa-times" style="font-size: 1em; margin-bottom: 0"></i>  Hỗ trợ độc quyền</li>
                 </ul>
                 <a href="<?= $base_url?>/lien-he" class="btn btn-success"><span style="color:#fff">liên hệ</span></a>
               </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="pricing-tab pricing-tab-4 text-center mb-30" style="background: #fff">
                <div class="price-img-4 pb-10">
                 <h4 style="font-size: 3em">$ 450 +</h4>
               </div>
               <div class="price-value mb-30">
                <h5 style="font-size: 1.4em; color: rgb(38, 208, 126)">WEB YÊU CẦU</h5>
                <h6 style="font-size: .8em">Có thể thay đổi tùy theo tính năng</h6>
              </div>
              <ul>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao diện tùy chọn</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí hosting 3G</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao diện tùy chỉnh</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thời gian hoàn thành < 45 ngày</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí domain .com/.net 1 năm</li>
               <li><i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thiết kế UI/UX đơn giản, thân thiện với người dùng</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i>  Giao dịch online</li>
               <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> 24/7 Support</li>
               <li>  <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Hỗ trợ độc quyền</li>
             </ul>
             <a href="<?= $base_url?>/lien-he" class="btn btn-success"><span style="color:#fff">liên hệ</span></a>
           </div>
         </div>



         <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="pricing-tab pricing-tab-4 text-center mb-30" style="background: #fff">
            <div class="price-img-4 pb-10">
             <h4 style="font-size: 3em">$ 250  +</h4>
           </div>
           <div class="price-value mb-30">
            <h5 style="font-size: 1.4em; color: rgb(38, 208, 126)">WEB GIỚI THIỆU, DỊCH VỤ</h5>
            <h6 style="font-size: .8em">Có thể thay đổi tùy theo tính năng</h6>
          </div>
          <ul>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao diện tùy chọn</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí hosting 2G</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thời gian hoàn thành < 7 ngày</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Miễn phí domain .com/.net 1 năm</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Thiết kế UI/UX đơn giản, thân thiện với người dùng</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Giao dịch online</li>

           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> Sở Hữu Trọn Đời</li>
           <li> <i class="fa fa-check" style="font-size: 1em; margin-bottom: 0"></i> 24/7 Support</li>
           <li> <i class="fa fa-times" style="font-size: 1em; margin-bottom: 0"></i>   Hỗ trợ độc quyền</li>
         </ul>
         <a href="<?= $base_url?>/lien-he" class="btn btn-success"><span style="color:#fff">liên hệ</span></a>
       </div>
     </div>
   </div>
 </div>

</div>
</div>
</div>
</div>
</section>
<!-- portfolio-area end -->

</main>

<!-- footer -->
<?php include "layouts/footer.php";?>

<!-- footer end -->






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
<script src="<?= $base_url?>/public/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= $base_url?>/public/assets/js/plugins.js"></script>
<script src="<?= $base_url?>/public/assets/js/main.js"></script>
<script type="text/javascript" src="<?= $base_url?>/public/assets/zoomslider/modernizr-2.6.2.min.js"></script>
<script src="<?= $base_url?>/public/assets/zoomslider/jquery.zoomslider.min.js"></script>
<script src="<?= $base_url?>/home/view/js/mobile.js" type="text/javascript" charset="utf-8" async defer></script>

</body>
</html>
