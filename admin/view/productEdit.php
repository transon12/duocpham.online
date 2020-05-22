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
  .modal-dialog{
    max-width: 65%
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
        <?php include_once('layouts/products/products-edit-content.php') ?>        
        <?php include_once('layouts/zzz-setting.php') ?>        
      </div>
      <?php include_once('layouts/zzz-footer.php') ?>
      <!-- //Modal nhiều ảnh    -->
      <div id="modal_img" class="container" style="width: 85%">
          <!-- Button to Open the Modal -->
          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content" style="margin-top: 100px;">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Update hình ảnh chi tiết sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
               <table class="table table-hover">
                 <tbody>
                   <tr>
                     <td>
                      <div class="row" id="html_img">
                      </div>
                     </td>
                   </tr>
                 </tbody>
               </table>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <form method="POST" action="<?=$base_url['web']?>/adw-product/addimg" enctype="multipart/form-data">
                  <input class="list_img" type="file" name="image[]" multiple="true">
                  <input class="code_product_img" name="code_product" type="hidden" value="<?=$item['code']?>">
                  <input name="id_products" type="hidden" value="<?=$item['id']?>">
                  <!-- <input class="code_product_img" name="code_product" type="hidden" value=""> -->
                  <button type="submit" id="add_img" class="btn btn-success btn-sm">Thêm ảnh</button>
                </form>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>
      </div> 

      </div> 
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
  const base_url_web = '<?=$base_url["web"]?>';
</script>
<script type="text/javascript" src="<?=$base_url['lib']?>/admin/view/js/editProduct.js"></script>
<script type="text/javascript">
</script>
  