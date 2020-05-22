
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

  CKEDITOR.replace("description",
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

  $('#btn-editproperties').on('click', function(){
    var id_product = $('.code_product').val();
    var a='';
    var id_properties = document.getElementsByClassName('id_properties');
    for (var i= 0; i<id_properties.length; i++) {
      a += id_properties[i].value +','
    }
    console.log(a); 
    $('#modal-properties').modal();
          var list_id = $('#properties-list').val(); //console.log(list_id);
          $.ajax({
            url: base_url_web+'/adw-products/modal_editproperties',
            method:'POST',
            data:{
              list_id:list_id,
              id_product:id_product,
              a:a,
              input:$('#modal-form-addproperties').serialize(),
            },
            success: function(data){ 
              $('.modal-content-properties').html(data);
            }

          });
        });

  $('#add-new').hide();
  $('#addnew').on('click',function(){
    $('#add-new').show();
  });


  $(document).ready(function() {
    $('.click_detail').on('click', function(){
      var code = $('.code_product').attr('data-code');
      $('.code_product_img').val(code);
      
      var html = '';
      $.ajax({
        url:base_url_web+'/adw-product/modal',
        method: 'POST',
        dataType : 'JSON',
        data: {code:code},
        success: function(dataa){
          for (var i in dataa) {
            html += '<article style="margin-top:30px;" class="img_detail col-md-3 portfolio-item apps"><div class="portfolio-thumb in" style="width:150px;"><a href="#" class="main-link"><img style="width:100%"; class="img-responsive img-center img image" src="'+base_url_web+'/'+dataa[i]+'" alt=""><span class="overlay-mask"></span></a></div></article>';}
          $('#html_img').html(html);
        }
      });
    });
})

  

  //Upload 1 ảnh

  $(document).ready(function() {
    $('.click_detail1').on('click', function(){
      var code = $(this).attr('data-code1');
      $('.code_product_img1').val(code);
      var html = '';
      $.ajax({
        url:base_url_web+'/adw-products/modal1',
        method: 'POST',
        dataType : 'JSON',
        data: {code:code},
        success: function(dataa1){
          for (var i in dataa1) {
            html += '<article style="margin-top:30px; margin-left:150px;" class="img_detail1 portfolio-item apps"><div class="portfolio-thumb in" style="width:150px;"><a href="#" class="main-link"><img style="width:100%"; dataId1="'+dataa1[i]['id']+'" class="img-responsive img-center img image" src="'+base_url_web+'/'+dataa1[i]+'" alt=""><span class="overlay-mask"></span></a><a class="link centered text1"><i class="fas fa-trash-alt"><span style="font-size: 12px;">  Xóa ảnh</span></i></a></div></article>';}
          $('#html_img1').html(html);
        }
      });
    });

    $(document).on('click', '.text1', function() {
      var par = $(this).parent().parent().find('img');
      var id = par.attr('dataId1');
      $.ajax({
        url : base_url_web+'/adw-products/del_img_id1',
        method : 'POST',
        dataType : 'JSON',
        data : {id:id},
        success : function(dataa1){
          if (dataa1['err'] === 200) {
            alert('Xóa thành công');
            location.reload();
          }
        }
      });
    });

    $('.list_img1').on('click', function() {
      $('#add_img1').show();
    });
  });
  
