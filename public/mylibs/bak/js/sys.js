function sys_ShowError(noti,time,list,type=1){
  if(noti!=''){
    if(type==1){
      var show_error = noti.split('-');
      if(time- parseInt(show_error[1])<5){
        $.notify(list[show_error[0].charAt(1)],{
          className:"error",
          position:"top center"
        });
      }
    }else{
      $.notify(noti,{
          className:"error",
          position:"top center"
        });
    }
  }
 }

function sys_preLoadSubmit() {
      var div = document.createElement('div');
      var img = document.createElement('img');
      img.src = base_url+"/public/images/sys/spin2.gif";
      div.setAttribute("id", "sp-main-preload");
      div.innerHTML = "Đang xử lý...<br />";
      div.style.cssText = 'position: fixed; top: 0;left:0; z-index: 99999; width: 100%;height:100%; text-align: center; background: #fff;opacity: 0.8;padding-top:10%;';
      div.appendChild(img);
      document.body.appendChild(div);
      return true;
      // These 2 lines cancel form submission, so only use if needed.
      //window.event.cancelBubble = true;
      //e.stopPropagation();
  }
