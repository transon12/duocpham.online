<?php include_once('layouts/zz-head.php') ?>
    
    <link rel="stylesheet" href="<?=$base_url?>/public/blogs/css/main.min.css">
    <link rel="stylesheet" href="<?=$base_url?>/public/blogs/css/style.css">
    <link rel="stylesheet" href="<?=$base_url?>/public/blogs/css/color.css">
    <link rel="stylesheet" href="<?=$base_url?>/public/blogs/css/responsive.css">
    <link rel="stylesheet" href="<?=$base_url?>/public/mylibs/css/responsive.css">
    <link rel="stylesheet" href="<?=$base_url?>/public/mylibs/css/phone-ring.css">


    <style type="text/css">
    	#vv-loader{
            display: block;
            margin: auto;
        }
        .text-content p,
        .text-content{
        	color:#000 !important ;
        }
        .description p,
        .description p a{
        	color:#333;
        	font: 400 13px/16px arial;
        	line-height: 20px;
        }

        .detail p,
        .detail p a{
        	color:#333;
        	font: 400 14px/16px arial;
        	line-height: 18px;
        }
        .detail h6,
        .detail h6 a{
        	color:#333;
        	font: 600 14px/16px arial;
        	line-height: 20px;
        }
        .header-title-2{
        	font: 700 18px arial;
        }
        li h6,
        li h6 a{
        	color:#333 !important;
        	font: 600 14px/16px arial !important;
        	line-height: 20px !important;
        }
        .detail-p-right a,
        .detail-p-right{
        	color: #666 !important;
		    font: 300 13px/16px arial !important;
		    line-height: 15px !important ;
        }
        .btn-modal-close{
            position: fixed;
        	top:0px;
        	right: 0px;
        	width:30px;
            height: 30px;
        	border-radius: 50%;
        	text-align: center;
        	background-color: red !important ;
            padding: 0px !important;
            color:#fff;
            opacity: 1;
        }
        .btn-modal-close-top{
            position: fixed;
            top:20px;
            right: 40px;
            width:35px;
            height: 35px;
            border-radius: 50%;
            text-align: center;
            background-color: red !important ;
            padding: 0px !important;
            color:#fff;
            opacity: 1;
        }

        .fixed-header {
            z-index: 1100;
            width: 100%;
            position: fixed;
            top: 0;
            display: none;
            opacity: 0.5;
        }

        .fixed-header .modal-header {
            background-color: #fff;
            width: 100%;
            margin: 0 auto;
        }

        .affixed {
            display: block;
        }
        .modal-header{
            padding:0px;
            border-bottom:none;
        }

        .blog-title{
            font-weight: normal;
            color: #181818;
            font-size: 24px;
            line-height: 30px;
        }

        .blog-tags{
            font-style: italic;
            padding:0px 2px;
            margin-right: 2px;
            border:1px solid #fb0000;
            border-radius: 10%;
            background-color: red;
            color:#fff;
        }

        .home-title span{
            position: relative;
            overflow: hidden;
            display: block;
            line-height: 1.2;
        }

        .home-title span::after{
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: white;
            animation: a-ltr-after 2s cubic-bezier(.77,0,.18,1) forwards;
            transform: translateX(-101%);
        }

        .home-title span::before{
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: var(--bg-color);
            animation: a-ltr-before 2s cubic-bezier(.77,0,.18,1) forwards;
            transform: translateX(0);
        }

        .home-title span:nth-of-type(1)::before,
        .home-title span:nth-of-type(1)::after{
            animation-delay: 1s;
        }

        .home-title span:nth-of-type(2)::before,
        .home-title span:nth-of-type(2)::after{
            animation-delay: 1.5s;
        }

        @keyframes a-ltr-after{
            0% {transform: translateX(-100%)}
            100% {transform: translateX(101%)}
        }

        @keyframes a-ltr-before{
            0% {transform: translateX(0)}
            100% {transform: translateX(200%)}
        }

        .sidenav {
          height: 100%;
          width: 100%;
          background-color: #fff;
          overflow-x: hidden;
          padding-top: 0px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a{
          padding: 3px 4px 3px 5px;
          text-decoration: none;
          font-size: 14px;
          color: #797979;
          display: block;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          cursor: pointer;
          outline: none;
        }

        .dropdown-btn {
          padding: 3px 4px 3px 5px;
          text-decoration: none;
          font-size: 14px;
          color: #797979;
          display: block;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          cursor: pointer;
          outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
          color: rgb(251,85,85,0.6) ;
        }

        /* Main content */
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
          font-size: 20px; /* Increased text to enable scrolling */
          padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
          background-color: rgb(251,85,85,0.5) ;
          color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
          display: none;
          background-color: #fafafa;
          padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
          float: right;
          padding-right: 8px;
          color:#fb5555 !important;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        .li-active a{
            color:#fb5555 !important ;
        }
.my-menu-fixed {
  position: fixed; top: 0px; width: 100%;
  z-index: 9;
}        
.header [class*="my-menu-"] {
  cursor: pointer;
  font-size: 22px;
  height: initial;
  padding: 5px;
  width: initial;
}
[id*="my-menu-"] {
  bottom: 0;
  height: 100%;
  position: fixed;
  top: 0;
  width: 205px;
  z-index: 99;
}
[id*="my-menu-"] .box {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: auto;
  background-color: #fff;
}
[id*="my-menu-"] .box::-webkit-scrollbar {
  height: 4px;
  width: 4px;
}

[id*="my-menu-"] ul {
  margin: 2px;
  padding: 0;
}
[id*="my-menu-"] li {
  font-size: 12px;
  line-height: 28px;
  margin: 3px 0px ;
  overflow: hidden;
  padding: 5px;
  position: relative;
  background-color: #fafafa;
}
[id*="my-menu-"] li:last-child {
  border: 0 ;
}

.my-menu-left,.my-menu-right{
  color:rgb(158,158,158,0.7);
}

.menu-buttom-active{
  color:#fb0000;
}

#my-menu-left {
  color:#fb0000 !important;
  border-right: 1px solid #161616;
  left: -205px;
  -webkit-transform: translate3d(0,0,0);
     -moz-transform: translate3d(0,0,0);
          transform: translate3d(0,0,0);
  -webkit-transition: all 500ms ease-in-out;
     -moz-transition: all 500ms ease-in-out;
          transition: all 500ms ease-in-out;
}
#my-menu-left .content {
  position: relative;
  height: initial;
  width: 100%;
}
#my-menu-right {
  border-left: 1px solid #161616;
  top: 57px;
  right: 0;
  width: 205px;
  -webkit-transform: translate3d(205px,0,0);
     -moz-transform: translate3d(205px,0,0);
          transform: translate3d(205px,0,0);
  -webkit-transition: all 500ms ease-in-out;
     -moz-transition: all 500ms ease-in-out;
          transition: all 500ms ease-in-out;
}
#my-menu-right.menu-active {
  right: 0;
  -webkit-transform: translate3d(0,0,0);
     -moz-transform: translate3d(0,0,0);
          transform: translate3d(0,0,0);
  -webkit-transition: all 500ms ease-in-out;
     -moz-transition: all 500ms ease-in-out;
          transition: all 500ms ease-in-out;
}
.header.menu-active, #my-menu-left.menu-active, .footer.menu-active {
  -webkit-transform: translate3d(205px,0,0);
     -moz-transform: translate3d(205px,0,0);
          transform: translate3d(205px,0,0);
  -webkit-transition: all 500ms ease-in-out;
     -moz-transition: all 500ms ease-in-out;
          transition: all 500ms ease-in-out;
}  

#form-search-submit{
  position:absolute;
  top:6px;
  right:6px;
}

    </style>

</head>
<body id="vv-main">
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="postoverlay"></div>
<?php include_once('layouts/zz-header.php') ?>

<div id="my-menu-left">
    <div class="box">
    <h4 class="text-red" style="padding:3px 2px;background-color: #fb5555;color:#fff !important;" >Menu</h4>
    <ul class="sidenav activitiez">
      <li><a href="<?=$base_url?>">Trang chủ</a></li>
      <li><a href="<?=$base_url?>/about">Về chúng tôi</a></li>
      <li>
      <button class="dropdown-btn">Dịch vụ 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="<?=$base_url?>/thiet-ke-mobile-app">Ứng dụng di động</a>
        <a href="<?=$base_url?>/thiet-ke-website">Thiết kế web</a>
        <a href="<?=$base_url?>/he-thong-phan-mem">Phát triển hệ thống</a>
        <a href="<?=$base_url?>/ha-tang-mang">Hạ tầng mạng</a>
      </div>
      </li>
      <li>
        <a href="<?=$base_url?>/project">Dự án</a>
      </li>
      <li>
      <button class="dropdown-btn">Đào tạo 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="<?=$base_url?>/training">Đào tạo lập trình</a>
        <a href="<?=$base_url?>/recruitment">Tuyển dụng</a>
      </div>
      </li>
      <li><a href="<?=$base_url?>/contact">Liên hệ</a></li>
      
    </ul>
    </div>
  </div>
  <div id="my-menu-right">
    <div class="box">
      <form id="form-search-blog" class="mh-form" method="get" action="<?=$base_url?>/search" >
        <input id="keyword" type="text" name="keyword" minlength="1" maxlength="50" placeholder="Tìm kiếm" />
        <a id="form-search-submit" href="#/" class="fa fa-search"></a>
      </form>
      <h4 class="text-red" style="padding:3px 2px;background-color: #fb5555;color:#fff !important;" >Danh mục</h4>
      <ul class="sidenav activitiez">
      <?php 
      if(isset($item_category)&&!empty($item_category)){
        foreach($item_category as $v){
          echo '<li class="'.($blog_category==$v['code'] ? 'li-active' : '' ).'" ><a href="'.$base_urls['web'].'/blogs/'.$v['code'].'">'.$v['name'].'</a></li>';
        }
      }
      ?>
        
      </ul>
    </div>
  </div>
			
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3 hidden-smartphone">
								<?php include_once('layouts/blogs/blog-news-left.php') ?>
							</div><!-- sidebar -->
							
							<div class="col-lg-6">
								<div id="vv-blog-list">
									<?php include_once('layouts/blogs/blog-list.php') ?>
								</div>
								<input type="hidden" id="vv-pageno" value="<?=isset($page_current) ? $page_current : 0 ?>">
     							<img id="vv-loader" src="<?=$base_url?>/upload/sys/loading.gif">
							</div><!-- centerl meta -->
							<div class="col-lg-3 hidden-smartphone">
								<?php include_once('layouts/blogs/blog-news-right.php') ?>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

<?php include_once('layouts/zz-footer.php') ?>	
</div>		
	
	

</body>	

</html>

<script src="<?=$base_url?>/public/blogs/js/main.min.js"></script>
<script src="<?=$base_url?>/public/blogs/js/script.js"></script>
<script src="<?=$base_url?>/public/mylibs/js/jquery.inview.min.js"></script>



<!-- Modal -->
<div class="fixed-header">
    <div class="modal-header">
        <button type="button" class="close btn-modal-close-top" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal-blog-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content modal-blog-content">
      
    </div>
  </div>
</div>


<script type="text/javascript">
const base_url_web = '<?=$base_url?>' ;
const base_url = '<?=$base_url?>' ;
const base_url_img = '<?=$base_url?>' ;
var nextPage = parseInt($('#vv-pageno').val());
var blog_category = '<?=$blog_category?>';

var width = $(window).width();
if (width < 600){
    $('.hidden-smartphone').remove();
    $('.topbar').remove();
}

$('#vv-loader').on('inview', function(event, isInView) {
    if (isInView) {
        $.ajax({
             type: 'GET',
             url: base_url_web+'/data/load-data',
             data: { pageno: nextPage,category:blog_category },
             dataType:'json',
             success: function(data){ console.log(data);
                 if(data != ''&&typeof data==='object'&&data!=[]){
                 	nextPage = nextPage+1;	
                 	let html = '';						 
                     
                     $('#vv-pageno').val(nextPage);
                     for(let i in data){
                     	html +=htmlBlogList(data[i]['title'],data[i]['description'],base_url_img+'/upload/blogs/'+data[i]['avatar'],data[i]['video'],base_url_web+'/'+data[i]['title_url']+'-'+data[i]['code']+'.html');
                     }
                     html +='<div class="banner medium-opacity bluesh"> <a href="https://cooftech.com" target="_blank"><div class="bg-image" style="background-image: url('+base_url_img+'/upload/banner/quytrinh.png)"></div><div class="baner-top"> <span><img alt="" src="'+base_url_img+'/upload/icon/cooftech.png"></span> <i class="fa fa-ellipsis-h"></i></div><div class="banermeta"><p class="home-title"> <span>Thiết kế ứng dụng</span> <span> Mobile App</span></p> <span><i class="fa fa-phone"></i> 0818 456 969</span><br> <span><i class="fa fa-home"></i> 233 Quan Hoa, Cầu Giấy, Hà Nội</span></div> </a></div>';
                     $('#vv-blog-list').append(html);
                     //history.pushState(nextPage, '', base_url_web+'?page='+nextPage);
                 }else{
                    $("#vv-loader").hide();
                 }
             }
         });
    }
});

function htmlBlogList(title,description,avatar,video='',url=''){
	if(video==''||video==null||video==undefined){
		return '<div class="central-meta item"><div class="user-post"><div class="post-meta"><h4 class="header-title"><a class="header-title-2 blog-ilink" href="'+url+'">'+title+'</a></h4><div class="linked-image align-left"><a class="blog-ilink" title="" href="'+url+'"><img alt="" src="'+avatar+'"></a></div><div class="detail"><p><a class="blog-ilink" href="'+url+'">'+vvCutString(description,150)+'</a></p></div></div></div></div>';
	}else{
		return '<div class="central-meta item"><div class="user-post"><div class="friend-info"><div class="post-meta"><iframe width="" height="285" src="https://www.youtube.com/embed/'+video+'" frameborder="0" allowfullscreen></iframe><h4 class="header-title"><a class="blog-ilink" href="'+url+'">'+title+'</a></h4><div class="description"><p><a class="blog-ilink" href="'+url+'">'+description+'</a></p></div></div></div></div></div>'
	}

        //return '<div class="central-meta item"><div class="user-post"><div class="friend-info"><div class="post-meta"><img src="'+avatar+'" alt=""><h4 class="header-title"><a class="header-title-1 blog-ilink" href="'+url+'"></a></h4><div class="description"><p class="description"><a class="blog-ilink" href="'+url+'">'+description+'</a></p></div></div></div></div></div>'
}

function vvCutString(s, n){
    var cut= s.indexOf(' ', n);
    if(cut== -1) return s;
    return (s.substring(0, cut))+' ...';
}

$(document).on('click','a.blog-ilink',function(){
	var link = $(this).attr('href'); //console.log(link);
	if(link!=''){
		$('.modal-content').empty();
		$('#modal-blog-detail').modal('show');
      	$(".modal-blog-content").html('<div style="text-align:center;"><img src="'+base_url_img+'/upload/sys/loading.gif"></div>');

		$.ajax({
			url:base_url_web+'/data/load-blog',
			method:'get',
			data:{url:link},
			//dataType:'json',
			success:function(data){
				if(data!=''){
					$(".modal-blog-content").html(data);
          history.pushState('', '', link);
				}
			}
		});
	}

	event.preventDefault();
	return false;
});

$('#modal-blog-detail').on('scroll', function() {
    var threshold = 60;

    //var post_div = 100;

    if ($('#modal-blog-detail').scrollTop() > threshold) {
        $('.fixed-header').addClass('affixed');
    }
    else {
        $('.fixed-header').removeClass('affixed');
    }
});

$('#modal-blog-detail').on('hide.bs.modal', function (e) {
    $('.fixed-header').removeClass('affixed');
});

$('.fixed-header button,.modal-header button').click(function() {
    $('#modal-blog-detail').modal('hide');
});

$( "#form-search-submit" ).click(function() {
    if($('#keyword').val()){
        $( "#form-search-blog" ).submit();
    }
  
});

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("menu-active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

  (function(){
    $('.my-menu-left').click(function(){
      $('#my-menu-right').removeClass('menu-active')
      $('.my-menu-right').removeClass('menu-buttom-active');

      $('.header,#my-menu-left,.section,.footer').toggleClass('menu-active')
      $('.my-menu-left').toggleClass('menu-buttom-active');
    })
    $('.my-menu-right').click(function(){
      $('.header,#my-menu-left,.section,.footer').removeClass('menu-active')
      $('.my-menu-left').removeClass('menu-buttom-active');

      $('#my-menu-right').toggleClass('menu-active')
      $('.my-menu-right').toggleClass('menu-buttom-active');

    })
  })()

</script>

<script async src="<?=$base_url?>/public/mylibs/js/a2a_share.js"></script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=560184944548714&autoLogAppEvents=1"></script>

<script async type="text/javascript" src="<?=$base_url?>/home/view/js/main.js"></script>