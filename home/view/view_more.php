<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= $base_url?>/public/assets/favicon/apple-icon-114x114.png">


  <!--meta seo-->
  <title>PHP.VN - <?=$name['name']?></title>
  <meta name="description" content="<?=$name['description']?>" />
  <link rel="canonical" href="http://php.vn/" />
  <meta name="DC.title" content="" />
  <meta name="keyword" content="<?=$name['keywords']?>">
   <meta name="tags" content="<?=$name['tags']?>">
  <!--share twitter-->
  <meta name="twitter:title" content="<?=$name['name']?>" />
  <meta name="twitter:description" content="<?=$name['description']?>" />
  <!--share facebook -->
  <meta property="og:url" content="http://php.vn/" />
  <meta property="og:title" content="<?=$name['name']?>" />
  <meta property="og:description" content="<?=$name['description']?>" />
  <meta property="og:image" content="" />
  <meta name="robots" content="follow,index" />
  <!--setup data struct-->
  <meta name="COPYRIGHT" content="Copyright (C) 2020 php.vn" />
  <meta name="geo.region" content="VN-HN" />
  <meta name="geo.placename" content="ha noi" />
  <meta  property="og:app_id" content="560184944548714" >
  <meta name="revisit-after" content="1 month">
  <meta name="googlebot" content="code">
  <meta name="googlebot" content="noodp">
  <meta name="language" content="Vietnamese" />
  <meta name="reply-to" content="hotro@cooftech.com.vn">
  <meta name="web_author" content="php.vn">
  <meta name="author" content="php.vn" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="fb:app_id" content="562311624270167" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="php.vn" />
  <meta name="twitter:creator" content="php.vn" />
  <meta property="og:type" content="website" />
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=$base_url?>/public/asset_blog/css/style.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/themify-icons.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/meanmenu.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/aos.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/slick.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/default.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/style.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/responsive.css">
  <link rel="stylesheet" href="<?= $base_url?>/public/assets/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header id="header" class="">
   <!-- create menu main -->
   <nav class="navbar navbar-expand-lg navbar-light  " id="navbar" style="background-color: #fff" >
    <a class="navbar-brand" href="<?= $base_url?>">
            <div class="logo d-flex">
                <a href="<?= $base_url?>"> <img src="<?= $base_url?>/public/assets/img/logo.png" alt="" style="width: 5em"></a>
                <div class="pt-3 pl-2 logoText">
                <a href="<?= $base_url?>" style="color:#333">PHP.VN</a>
                    </div>
            </div></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"  style="padding-left: 10em">
      <ul class="navbar-nav">
            <?php if (isset($list_name_cate) && !empty($list_name_cate) && isset($code)) :?>
            <?php foreach ($list_name_cate as $val) :?>
            <li class="nav-item">
              <a <?php if ($code == $val['code']) { echo 'style="color: #d98040;"';}?> class="nav-link" href="<?=$base_url?>/<?=$val['code']?>"><b><?=$val['name']?></b></a>
            </li>
            <?php endforeach ?>
            <?php endif ?>
          </ul>
    </div>
    <div class="search-fixed">
     <form action="/tim-kiem" class="navbar-form navbar-right bar-bottom" method="get">                
       <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm bài viết" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append" >
          <span style="border-radius: 0 50px 50px 0px;" class="input-group-text" id="basic-addon2"><i style="cursor: pointer;" class="fa fa-search"></i></span>
        </div>
      </div>
    </form>        
  </div>
</nav>
</header><!-- /header -->

<!-- create slider home -->
<section>
</div>
</section>
<section class="content-main pt-3">
  <div class="header-search bg-white">
    <div class="row">
      <div class="col-md-2">
       <!--  <div>
         <img src="<?=$base_url?>/public/asset_blog/img/image/qc-1.png" alt="">
       </div> -->
       <div class="title-left pt-2 ">
        <h2 class=  "" ><a class="text-capitalize">Bài viết mới nhất</a></h2>
      </div>
      <?php if (isset($list_date_news) && !empty($list_date_news)) :?>
      <?php foreach ($list_date_news as $val) :?>
        <div style="width: 95%;">         
          <div class="item border-bottom pt-2 py-2">
           <a href="<?=$base_url?>/<?=$val['title_url']?>-<?=$val['code']?>" target="_blank" title="7 Cách quảng cáo nhà hàng hiệu quả mà đơn giản đến bất ngờ.">
            <img title="<?=$val['title']?>" style="width: 100%;" src="<?=$base_url?>/upload/blogs/<?=$val['avatar']?>" class="img-responsive pb-2" alt="7 Cách quảng cáo nhà hàng hiệu quả mà đơn giản đến bất ngờ.">
            <h4 title="<?=$val['title']?>"><?=$val['title']?></h4>
          </a>
        </div>
      </div>
    <?php endforeach ?>
  <?php endif ?>
  <div class="title-left ">
    <h2 class=  "" ><a class="text-capitalize">từ khóa tìm kiếm</a></h2>
  </div>
  <?php if (isset($keyword_cate) && !empty($keyword_cate)) :?>
  <?php foreach ($keyword_cate as $val) :?>
    <button class="mb-1" type=""><?=$val['keyword']?></button>
  <?php endforeach ?>
<?php endif ?>
</div>
<div class="col-md-7">

  <div class=" border-bottom pb-2 content">
    <div class="pasgo-blog">
      <div class="title-top">
        <h1>
          <a href="#" class="title-link">
            <?php if (isset($name) && !empty($name)): ?>
            <span class="text-capitalize">Tất cả các bài viết về '<i><?=$name['name']?></i>'</span>
          <?php endif ?>
        </a>
      </h1>
    </div>
    <?php if (isset($list1) && !empty($list1)) :?>
    <div class="content">
      <div class="row ">
        <div class="col-md-5 item-1">
          <a href="<?=$base_url?>/<?=$list1['title_url']?>-<?=$list1['code']?>" target="_blank">
            <img title="<?=$list1['title']?>" src="<?=$base_url?>/upload/blogs/<?=$list1['avatar']?>" class="img-responsive" alt="10 mẹo tổ chức sinh nhật cho bạn gái làm nàng cảm động ngất trời" width="275px">
          </a>
        </div>
        <div class="col-md-7 p-0 item">
          <a href="<?=$base_url?>/<?=$list1['title_url']?>-<?=$list1['code']?>" target="_blank">
            <h3 title="<?=$list1['title']?>" class="mt-0"><?=$list1['title']?></h3>
            <span class="glyphicon glyphicon-time text-small text-gray dp-flex"><span class="pl-1 dp-inline">
              <i class="far fa-clock"></i>&nbsp;<?=date('d/m/Y',strtotime($list1['date_create']))?></span></span>
              <div class="description text-overflow-3"><?=$list1['description']?></div>
            </a>
          </div>
        </div>
    </div>
    <?php endif ?>
    <div class="row">
      <?php if (isset($list_blog) && !empty($list_blog)) :?>
      <?php foreach ($list_blog as $val) :?>
        <div  class="col-md-12 pt-2">
          <div style="border-bottom: 1px solid #D1CFCF; padding-bottom: 1em;" class="item mt-0 pt-2">
            <a href="<?=$base_url?>/<?=$val['title_url']?>-<?=$val['code']?>" target="_blank">
              <img title="<?=$val['title']?>" style="width: 150px;" src="<?=$base_url?>/upload/blogs/<?=$val['avatar']?>" class="img-responsive" alt="5 ý hay để tổ chức sinh nhật cho chồng vừa ấm áp vừa tiết kiệm">
              <h3 title="<?=$val['title']?>"><?=$val['title']?></h3>
              <div style="padding-left: 10px;" class="description text-overflow-3"><?=mb_substr($val['description'],0,180,'UTF-8')?>...<a href="<?=$base_url?>/<?=$val['title_url']?>-<?=$val['code']?>" style="color: red">Xem thêm</a></div>
              <span class="glyphicon glyphicon-time text-small text-gray dp-flex"><span class="pl-1 dp-inline"><i class="far fa-clock"></i>&nbsp;<?=date('d/m/Y',strtotime($val['date_create']))?></span></span>
            </a>
          </div>  
        </div>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</div>

</div>
<div style="margin: 10px 0px 10px 250px;">
  <nav aria-label="...">
    <ul class="pagination">
      <?php if (!isset($_GET['pages'])) {
        $page = 1;
      }
      else {
        $page = $_GET['pages'];
      } ?>
      <?php if ($page > 1) : ?>
        <li class="page-item">
          <a class="page-link" href="<?=$base_url?>/<?=$code?>?pages=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
      <?php endif ?>
      <?php if (!isset($_GET['pages']) || $_GET['pages'] == 1) {
        $active = "active";
        $color = "onpage";
      } else{
        $active = '';
        $color = '';
      }?>
      <li class="page-item <?=$color?> <?=$active?>"><a class="page-link" href="<?=$base_url?>/<?=$code?>?pages=1">1</a></li>
      <?php for ($i=2; $i <= $pages ; $i++) : ?>
        <?php $active = ''; ?>
        <?php $color = ''; ?>
        <?php if (isset($_GET['pages']) && $_GET['pages'] == $i) {
          $active = 'active';
          $color = "onpage";
        } ?>
        <li class="page-item <?=$color?> <?=$active?>" aria-current="page">
          <a class="page-link" href="<?=$base_url?>/<?=$code?>?pages=<?=$i?>"><?=$i?><span class="sr-only">(current)</span></a>
        </li>
      <?php endfor ?>
      <?php if ($page < $pages): ?>
        <li class="page-item">
          <a class="page-link" href="<?=$base_url?>/<?=$code?>?pages=<?=$page+1?>">Next</a>
        </li>
      <?php endif ?>
    </ul>
  </nav>
</div>
</div>
<div class="col-md-3">
  <!-- create search  -->
<div class="search">
  <div class=" header-search pt-4" >
    <div class="row">
      <div class="col-md-12">
       <form action="/action_page.php">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Tìm kiếm bài viết" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><i style="cursor: pointer;" class="fa fa-search"></i></span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 
</div>
  <div class="title-left ">
    <h2 class=  "" ><a class="text-capitalize">Nhiều người xem nhất</a></h2>
  </div>
  <?php if (isset($list_views_max) && !empty($list_views_max)) :?>
  <?php foreach ($list_views_max as $val) :?>
    <div class="item mt-0 pt-2">
      <a href="<?=$base_url?>/<?=$val['title_url']?>-<?=$val['code']?>" target="_blank">
        <img title="<?=$val['title']?>" style="width: 115px; height: 60px;" src="<?=$base_url?>/upload/blogs/<?=$val['avatar']?>" class="img-responsive" alt="5 ý hay để tổ chức sinh nhật cho chồng vừa ấm áp vừa tiết kiệm" width="115px">
        <h3 title="<?=$val['title']?>"><?=$val['title']?></h3>
        <span class="glyphicon glyphicon-time text-small text-gray dp-flex"><span class="pl-1 dp-inline"><i class="far fa-clock"></i>&nbsp;<?=date('d/m/Y',strtotime($val['date_create']))?></span></span>
      </a>
    </div>
    <br>
  <?php endforeach ?>
<?php endif ?>
</div>
</div>
</div>
</section>
<div class="clearfix" style="padding-top:55px">

</div>
<section>
  <?php include 'layouts/footer.php' ?>
</section>
<script type="text/javascript" src="<?=$base_url?>/public/asset_blog/js/jquery-3.4.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?= $base_url?>/public/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= $base_url?>/public/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= $base_url?>/public/assets/js/popper.min.js"></script>
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
<script src="<?= $base_url?>/public/assets/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
<script src="<?= $base_url?>/home/view/js/mobile.js" type="text/javascript" charset="utf-8" async defer></script>

<script type="text/javascript">
  setTimeout(function () {
    var e = document.createElement('script');
    e.src = '/bundles/desktop-blogindex?v=1LEXuh1tpEHweQvEytUz4IGvf7gF2bLqsLXu5ethZlI1';
    e.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(e);
  }, 10);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135795521-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-135795521-1');
</script>
<script>
  var slideIndex = [1,1];
  var slideId = ["mySlides1", "mySlides2"]
  showSlides(1, 0);
  showSlides(1, 1);

  function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
  }

  function showSlides(n, no) {
    var i;
    var x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) {slideIndex[no] = 1}    
      if (n < 1) {slideIndex[no] = x.length}
        for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
       }
       x[slideIndex[no]-1].style.display = "block";  
     }
     window.onscroll = function() {myFunction()};
     var navbar = document.getElementById("navbar");
     var sticky = navbar.offsetTop;

     function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  <script>
   $(document).ready(function(){
    $(window).scroll(function (event) {
      var sticky= $('html,body').scrollTop();
      if (sticky>20) {
        $('#navbar').addClass('fixed-top');
        $('.search-fixed').addClass('show');
      }else{
        $('#navbar').removeClass('fixed-top');
        $('.search-fixed').removeClass('show');
      }
    })
  })
</script>


</body>
</html>
