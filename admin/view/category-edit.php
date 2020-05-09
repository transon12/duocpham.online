<?php include_once('layouts/zzz-head.php') ?>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/css/app.min.css">

  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/css/style.css">
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/admin/assets/css/custom.css">

  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/mylibs/css/main.css">

  <style type="text/css">
    .form-group{
      margin-bottom:10px;
    }
  </style>
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php include_once('layouts/zzz-top.php') ?>
      <div class="main-sidebar sidebar-style-2">
      <?php include_once('layouts/zzz-sidebar.php') ?>        
      </div>
      <!-- Main Content -->
      <div class="main-content">
<?php include_once('layouts/category/category-edit-content.php') ?>        
<?php include_once('layouts/zzz-setting.php') ?>        
      </div>
<?php include_once('layouts/zzz-footer.php') ?>      
    </div>
  </div>
  <!-- JS Libraies -->
  <script src="<?=$base_url['lib']?>/public/admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  

  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/cleave-js/dist/cleave.min.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="<?=$base_url['lib']?>/public/admin/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

  <script src="<?=$base_url['lib']?>/public/mylibs/ckeditor/ckeditor.js"></script>
  <!-- Template JS File -->
  <script src="<?=$base_url['lib']?>/public/admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=$base_url['lib']?>/public/admin/assets/js/custom.js"></script>

  <script src="<?=$base_url['lib']?>/public/mylibs/js/notify.min.js" type="text/javascript"></script>
  <script src="<?=$base_url['lib']?>/public/mylibs/js/sys.js" type="text/javascript"></script>

</body>


</html>

<script type="text/javascript">
  
  const base_url_lib = '<?=$base_url["lib"]?>';
 
$(".inputtags").tagsinput('items');

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

function convertStringUrl(str) {
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
            str = str.replace(/đ/g, "d");
            str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "a");
            str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "e");
            str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "i");
            str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "o");
            str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "u");
            str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "y");
            str = str.replace(/Đ/g, "d");
            str = str.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
            str = str.replace(/[\s]+/g, "-");
            return str.toLowerCase();
        };
$('#name').on('change',function(){
  let str = $(this).val();
  if(str!=''){
    $('#code').val(convertStringUrl(str));
  }
});

</script>