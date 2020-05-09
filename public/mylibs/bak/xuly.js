  
const base_url = '<?=$base_url?>'
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

  config.removeButtons = 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Scayt,Checkbox,Radio,TextField,Textarea,Select,Button,HiddenField,ImageButton,CopyFormatting,RemoveFormat,CreateDiv,BidiLtr,BidiRtl,Flash,Iframe,About,Form';

  config.filebrowserBrowseUrl = base_url+'/public/mylibs/ckfinder/ckfinder.html';
 
  config.filebrowserImageBrowseUrl = base_url+'/public/mylibs/ckfinder/ckfinder.html?type=Images';
   
  config.filebrowserImageUploadUrl = base_url+'/upload/connector?command=QuickUpload&type=Images';
   config.smiley_columns = 10;

};
CKEDITOR.plugins.addExternal('bootstrapVisibility', base_url+'/public/mylibs/ckeditor/plugins/bootstrapVisibility/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'bootstrapVisibility';
CKEDITOR.plugins.addExternal('image2', base_url+'/public/mylibs/ckeditor/plugins/image2/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'image2';
CKEDITOR.plugins.addExternal('imageresponsive', base_url+'/public/mylibs/ckeditor/plugins/imageresponsive/', 'plugin.js');
CKEDITOR.config.extraPlugins = 'imageresponsive';

  CKEDITOR.replace("content",
{
     height: 500,
});