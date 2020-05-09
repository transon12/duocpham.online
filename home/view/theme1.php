<!doctype html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP.VN - Danh Sách Giao Diện </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- Place favicon.ico in the root directory -->
    <?php include_once 'layouts/favicon.php';?>
    <meta name="name" content="content">
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
<style type="text/css" media="screen">
    #demo-1 {
        position: relative; /* can either be relative, absolute or fixed. If position is not set (i.e. static), it would be set to "relative" by script */
        width: 100%;
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
        height: 80vh;
        min-height: 25rem;
        top:-2em;

    }
    .shadow{
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
    }
  .search-product .button-group{
    border: 1px solid #bbb;
    width: 100%;
    display: inline-flex;
}

.search-product div input{
    width: 90%;
    background: #fff;

}
.search-product div button{
    width: 10%;
    margin: 0;
    padding: 1em;
    background: #563d7c;
    color: #fff

}

.imgs{
    box-shadow: none
}
.product-theme{
    width: 100%
    padding:0;
    margin: 0;
    box-sizing: border-box;
}
.star{
        color: #ffc107;
    }
.card-body .btn {
    padding: .5em .9em!important;
}
.fillter ul li{
    width: 100%;
    padding: 1em;
    border-bottom: 1px solid #bbb;

}
.angle-down{
    cursor:pointer;
}
.fillter .category ul li:last-child{
    border-bottom: none;
}
.category {
    border-bottom: 1px solid #bbb;
}

.fillterTop {
    display:inline-flex;
    justify-content: end;
    width: 100%;
    margin-bottom: 1em; 
}
.fillterTop ul li{
    padding: 0.6em 1em;
    border-left:1px;
    border-top:1px;
    border-bottom:1px;
    border-right:0px;
    border-style: solid;
    border-color: #bbb;
    font-size: 1em;
    font-weight: 500;
}
.fillterTop ul li a{
    color: inherit;
}
.fillterTop ul li:last-child{
    border-right:1px;
    border-style: solid;
    border-color: #bbb;
}
.fillterTop ul li:hover{
    background: #563d7c;
    color:#fff;
}
.fillterTop ul .active{
    color: #fff;
    background: #563d7c;
}
.card-title{
    font-size: 1.3em
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

    <div id="demo-1" data-zs-src='["<?= $base_url?>/public/assets/photo/bg1.jpg", "<?= $base_url?>/public/assets/photo/bg2.jpg"]'>

        <div class="demo-inner-content" style="width: 100%">
            <h1 id="typed2" style="color: yellow"></h1>
            <p>Giúp khách hàng có góc nhìn ấn tượng, trải nghiệm hoàn hảo nhất.</p>
        </div>
    </div>
    <!-- page-title-area end -->

    <!-- portfolio-area -->
    <section class="blog-area  pb-80">
        <div class="portfolio-area pb-100">
                <form action="<?= $base_url?>/kho-giao-dien" method="get" accept-charset="utf-8" class="search-product p-3" >
                    <div class="portfolio-menu mb-30 d-flex justify-content-sm-center button-group">
                       <input type="text" name="keysearch"  class="flex-grow-1 p-2 keysearch" placeholder="Tìm kiếm ..." > 
                       <button type="submit " class="btn search" ><i class="fa fa-search  " style="font-size: 1.5em"></i></button>
                   </div>
               </form>
            <div class="product-theme" >
                <div class="container-fluid">
                     <div class="row ml-0 mr-1">
                           <div class=" col-md-3 pl-0 col-sm-12 col-xs-12" >
                            <div class="fillter " >
                                <div class="pb-10 category">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 d-flex justify-content-start">
                                            <h4> Danh mục giao diện</h4>
                                        </div>
                                        <div class=" d-flex justify-content-end pt-2 angle-down">
                                            <i class="fa fa-angle-down"></i>                                        
                                        </div>
                                        
                                    </div>
                                    
                                    <ul>
                                    <?php if ( isset($category) && !empty($category)) {
                                        foreach ($category as $k => $v) {?>

                                         <li><span class="text-dark categorys" style="cursor:pointer" url="<?=$v['name_url']?>"><?=$v['name']?></span></li>

                                        <?php }}?>
                                    </ul>
                                    
                                </div>
                                <div class="pb-10 category pt-3" >
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 d-flex justify-content-start">
                                            <h4> Thẻ tags </h4>
                                        </div>
                                        <div class=" d-flex justify-content-end pt-2 angle-down">
                                            <i class="fa fa-angle-down"></i>                                        
                                        </div>
                                        
                                    </div>
                                    
                                    <ul style="height: 35em; overflow-y: scroll;">
                                        <?php if(isset($tags) && !empty($tags)){
                                        foreach ($tags as $k => $v) {?>
                                        
                                        <li><label><input type="radio" name="tags" class="tags" value="<?= strEnglish($v)?>"> <?= $v?></label></li>

                                       <?php }}?>
                                       
                                    </ul>
                                    
                                </div>
                                 <div class="pb-10 category pt-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 d-flex justify-content-start">
                                            <h4> Giá Sản phẩm </h4>
                                        </div>
                                        <div class=" d-flex justify-content-end pt-2 angle-down">
                                            <i class="fa fa-angle-down"></i>                                        
                                        </div>
                                    </div>
                                    
                                   <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 d-flex p-2 justify-content-start">
                                            <input type="number" name="priceMin" class="priceMin"  class="p-2 border-success" style="width: 100%;border: 1px solid #bbb  !important;" placeholder="1.000.000đ">
                                        </div>
                                        <div style="padding-top:5%"> - </div>
                                        <div class="flex-grow-1 d-flex justify-content-start p-2">
                                            <input type="number" name="priceMax" class="priceMax" style="width: 100%; border: 1px solid #bbb !important;" class="p-2 border-success" placeholder="10.000.000đ">
                                        </div>
                                        <span class="text-dark searchPrice"  style="cursor:pointer"><i class="fa fa-search pt-3"></i></span>
                                       
                                   </div>
                                    
                                </div>
                                <div class="pb-10 category pt-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 d-flex justify-content-start">
                                            <h4> Fillter</h4>
                                        </div>
                                        <div class=" d-flex justify-content-end pt-2 angle-down">
                                            <i class="fa fa-angle-down"></i>                                        
                                        </div>
                                    </div>
                                    <ul>
                                        <li><span class="text-dark filler" style="cursor:pointer" status="1" >Giá giảm dần</span></li>
                                        <li><span class="text-dark filler" style="cursor:pointer" status="2">Giá Tăng dần</span></li>
                                        <li><span class="text-dark filler" style="cursor:pointer" status="3">Bán chạy nhất</span></li>
                                        <li><span class="text-dark filler" style="cursor:pointer" status="4">phổ biến</span></li>
                                        <li><span class="text-dark filler" style="cursor:pointer" status="5">Đánh giá</span></li>
                                    </ul>
                                </div>
                                
                            </div>
                           </div>
                           <div class=" col-md-9  col-sm-12 col-xs-12 pl-0 pr-0" id="myid">
                            <div class="container">
                                <div class=" text-right fillterTop">
                                    <ul class="d-flex">
                                        <li><span class=" filler" style="cursor:pointer" status="3">Bán chạy nhất</span></li>
                                        <li><span class=" filler" style="cursor:pointer" status="4">phổ biến</span></li>
                                        <li><span class=" filler" style="cursor:pointer" status="5">Đánh giá <i class="fa fa-arrows-v"></i></span></li>
                                    </ul>
                                </div>
                            </div>
                                <div class="row grid text-center ">
                                    <?php if(isset($themeList) && !empty($themeList)){
                                        foreach ($themeList as $k => $v) {?>
                                           <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat1 mb-30">
                                                <div class="card shadow bg-white rounded" >
                                                    <div class="imgs" style="height: 18em">
                                                      <img class="card-img-top" src="<?= $base_url?>/<?=$v['avatar']?>" alt="<?=$v['name']?>">
                                                    </div>
                                                    <div class="card-body">
                                                        <h2 class="card-title"><a href="<?= $base_url?>/<?=$v['name_url']?>"><?=$v['name']?></a></h2>
                                                        <span class="card-text pb-3" style="color:#bbb; font-size: 1em"><?= readMore($v['description'],'...',100)?></span>
                                                        <div class="row pt-2">
                                                            <div class="col-md-6 col-xs-6">
                                                                <div class="text-left">
                                                                   <span class="card-text "><?= number_format($v['price'])?></span>
                                                                </div>
                                                                <div class="star text-left p-0">
                                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><span style="color:#bbb; font-size: .8em"> (66)</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-6">
                                                                <div class="star text-right p-0">
                                                                    <a href="#" class="btn btn-outline-success "><i class="fas fa-cart-plus" style="font-size: 1.5em; font-weight: 400"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }}?>
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
<script src="<?= $base_url?>/public/assets/js/type/typed.min.js" type="text/javascript"></script>
<script src="<?= $base_url?>/home/view/js/mobile.js" type="text/javascript" charset="utf-8" async defer></script>


<script>
    var baseUrl="<?= $base_url?>";
    $(document).on('click', '.angle-down', function(){

        $(this).parent().parent().find('ul').slideUp('slow',function(){
            $(this).css({
                display: 'none'
            });
        }) 
        $(this).children().removeClass('fa-angle-down')

         $(this).children().addClass('fa-angle-up');
        $(this).addClass('angle-up');
        $(this).removeClass('angle-down');
        // body...
    })



    $(document).on('click', '.angle-up', function(){
        $(this).parent().parent().find('ul').slideDown('slow',function(){
            $(this).css({
                display: 'block'
            });
        }) 
        $(this).children().fadeOut('slow', function() {
            $(this).removeClass('fa-angle-up')
        });

         $(this).children().fadeIn('slow', function() {$(this).addClass('fa-angle-down')})
        $(this).removeClass('angle-up');
        $(this).addClass('angle-down');

    })
     var typed2 = new Typed('#typed2', {
    strings: [ 'Thiết kế website khẳng định thương hiệu'],
    startDelay: 1000,
    typeSpeed: 100,
    backSpeed: 0,
    fadeOut: true,
    cursorChar: '',
    shuffle: true,
    smartBackspace: false,
});
var url= '';
        var category='';
        var country='';
        var status='';
        var priceMin='';
        var priceMax=''; 
        var keysearch= '';
        var tags= '';
    

        $('.categorys').click(function(e){
            url = $(location).attr('href');
            category= $(this).attr('url');
            if(status=='' && priceMax=='' && priceMin=='' && keysearch=='')
            {
                window.history.pushState('', '', baseUrl+'/kho-giao-dien?category='+category);
                $("#myid").fadeIn('slow',function(){
                    $(this).load(location.href+" #myid>*","");
                })
            }else{
                window.history.pushState('', '', url+'&category='+category);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }
            e.preventDefault();
        })
        $('.tags').change(function(){
            url = $(location).attr('href');
            tags= $(this).val();
            if(status=='' && priceMax=='' && priceMin=='' && keysearch=='' && category==''  )
            {
                window.history.pushState('', '', baseUrl+'/kho-giao-dien?tags='+tags);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }else{
                window.history.pushState('', '', url+'&tags='+tags);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }
        })

        $('.searchPrice').click(function(ev){
            get= $('.get').val();
            url = $(location).attr('href');
            priceMax= $('.priceMax').val();
            priceMin= $('.priceMin').val();
            //alert(priceMin);
            if(category==''&& status=='' && tags=='' && keysearch =='' ){
                window.history.pushState('', '', baseUrl+'/kho-giao-dien?priceMin='+priceMin+'&priceMax='+priceMax);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }else{
                window.history.pushState('', '', url+'&priceMin='+priceMin+'&priceMax='+priceMax);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));}
                return false;
            })

         $('.filler').click(function(){
            url = $(location).attr('href');
            status= $(this).attr('status');
            if(tags=='' && priceMax=='' && priceMin==''  && category=='' && keysearch ==''  )
            {
                window.history.pushState('', '', baseUrl+'/kho-giao-dien?status='+status);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }else{
                window.history.pushState('', '', url+'&status='+status);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }
        })
          $('.search').click(function(){
            url = $(location).attr('href');
            keysearch= $('.keysearch').val();
            if(tags=='' && priceMax=='' && priceMin==''  && category==''  )
            {
                window.history.pushState('', '', baseUrl+'/kho-giao-dien?keysearch='+keysearch);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }else{
                window.history.pushState('', '', url+'&keysearch='+keysearch);
                $("#myid").load(location.href+" #myid>*","",setTimeout(3000));
            }
        })
</script>
</body>
</html>
