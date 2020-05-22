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
  <link rel="stylesheet" href="<?=$base_url['lib']?>/public/mylibs/fileupload/jquery.fileuploader.css">
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
<?php include_once('layouts/products/products-add-content.php') ?>        
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
  
  <script src="<?=$base_url['lib']?>/public/mylibs/fileupload/jquery.fileuploader.min.js" type="text/javascript"></script>

</body>


</html>

<script type="text/javascript">
  
  var base_url_lib = '<?=$base_url["web"]?>';
  var base_url_web = '<?=$base_url["web"]?>';
    CKEDITOR.editorConfig = function( config ) {
  config.toolbarGroups = [
    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
    { name: 'forms', groups: [ 'forms' ] },
    '/',
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
    { name: 'links', groups: [ 'links' ] },
    { name: 'insert', groups: [ 'insert' ] },
    '/',
    { name: 'styles', groups: [ 'styles' ] },
    { name: 'colors', groups: [ 'colors' ] },
    { name: 'tools', groups: [ 'tools' ] },
    { name: 'others', groups: [ 'others' ] },
    { name: 'about', groups: [ 'about' ] }
  ];

  config.removeButtons = 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Scayt,Checkbox,Radio,TextField,Textarea,Select,Button,HiddenField,ImageButton,CopyFormatting,RemoveFormat,CreateDiv,BidiLtr,BidiRtl,Flash,About,Form';

  config.filebrowserBrowseUrl = base_url_lib+'/public/mylibs/ckfinder/ckfinder.html';
 
   config.smiley_columns = 10;

};
CKEDITOR.plugins.addExternal('bootstrapVisibility', base_url_lib+'/public/mylibs/ckeditor/plugins/bootstrapVisibility/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'bootstrapVisibility';

CKEDITOR.plugins.addExternal('imageresponsive', base_url_lib+'/public/mylibs/ckeditor/plugins/imageresponsive/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'imageresponsive';

CKEDITOR.plugins.addExternal('youtube', base_url_lib+'/public/mylibs/ckeditor/plugins/youtube/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'youtube';

  CKEDITOR.replace("content",
{
     height: 300,
});
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
$('input[name="name"]').on('keyup',function(){
  let str = $(this).val();
  if(str!=''){
    $('input[name="url_code"]').val(convertStringUrl(str));
  }
});
var i = 1;
$('#test').on('click',function(){
    $.ajax({
      url: base_url_web+'/adw-products/ajax',
      method: 'POST',
      data: {i:i},
      success: function(data){
        $('#properties').append(data);
      }
    });
    i++;
});
$('#add-new').hide();
$('#addnew').on('click',function(){
  $('#add-new').show();
})
function change(a){
        var b = $('#change'+a+' option:selected').val();
        $.ajax({
          url: base_url_web+'/adw-products/ajax2',
          method: 'POST',
          data: {b:b},
          success: function(data){
            $('#properties-'+a).html(data);
          }
        });
}
function clearip(a){
            $('#clearx'+a).remove();
            $('#item'+a).remove();
        }
$('#btn-addproperties').on('click', function(){
          $('#modal-properties').modal();
          $('.modal-content-properties').empty();
          var list_id = $('#properties-list').val();// console.log(list_id);
          $.ajax({
            url: base_url_web+'/adw-products/modal_addproperties',
            method:'get',
            data:{
              list_id:list_id
            },
          success: function(data){ //console.log(data);
            $('.modal-content-properties').html(data);
          }
        })
})
$('#modal-form-addproperties').on('submit', function(){
           
})
$('#add-properties').on('click',function(ev){
          var id_properties = $('#id_properties').val();
          var content_pr = $('#content_pr').val();
          if (content_pr != '') {
            $.ajax({
              url: base_url_web+'/adw-products/add_new_properties',
              method: 'POST',
              data: {
                id_properties:id_properties,
                content_pr:content_pr,
              },
              success: function(data){
                $('#content_pr').val('');
                $('#add-new').hide();
                $('#select-'+id_properties).html(data);
              }
            });
            ev.preventDefault();
          }
});

$('input[name="images"]').fileuploader({
        limit: 5, // limit of the files {Number}
        maxSize: 3, // files maximal size in Mb {Number}
        fileMaxSize: 15, // file maximal size in Mb {Number}
        extensions: ['jpg', 'jpeg', 'png'], // allowed extensions or types {Array}
        changeInput: '<div class="fileuploader-input">' +
                          '<div class="fileuploader-input-caption">' +
                              '<span>${captions.feedback}</span>' +
                          '</div>' +
                          '<div class="fileuploader-input-button">' +
                              '<span title="Tên ảnh <50 ký tự" >${captions.button}</span>' +
                          '</div>' +
                      '</div>',
        inputNameBrackets: true,
        
        addMore: true,
     
        captions: {
            button: function(options) { return 'Chọn ' + (options.limit == 1 ? 'ảnh' : 'nhiều ảnh'); },
            feedback: function(options) { return 'Chọn ' + (options.limit == 1 ? 'ảnh' : 'nhiều ảnh') + ' tải lên'; },
            feedback2: function(options) { return options.length + ' ' + (options.length > 1 ? ' ảnh' : ' ảnh') + ' được chọn'; },
            //drop: 'Kéo thả ảnh vào đây !',
            removeConfirmation: 'Bạn muốn xóa file ảnh này ?',
            errors: {
                filesLimit: 'Bạn chỉ được upload ${limit} ảnh.',
                filesType: 'Lỗi định dạng, bạn chỉ được upload nhưng file có định dạng sau: ${extensions}',
                fileSize: '${name} vượt quá dung lượng cho phép! Bạn hãy chon ảnh có dung lượng nhỏ hơn ${fileMaxSize}MB.',
                filesSizeAll: 'Dung lượng các file đã lớn. Ban hãy tải lên khi tổng dung lượng đạt tới ${maxSize} MB.',
                fileName: 'Ảnh ${name} đã được chọn.',
                folderUpload: 'Bạn không được tải lên thư mục.'
            }
        }
    });



</script>   

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  
 
</script>

