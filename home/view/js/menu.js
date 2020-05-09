$('.menus').hover(function(){
  $('.categoryx').hover(function(){
    $('.show').removeClass('show');
    var industry= document.getElementsByClassName('categoryx');
    var group= document.getElementsByClassName('txt');
    for(i=0; i<industry.length; i++){
        var industry= this.value;
         var groupid= $('.'+industry).val();
   if(industry== groupid){
  $('.'+industry).addClass('show');
     }
    }

  })
  }, function(){
    $('.txt').removeClass( "show" );})