    
// document.getElementsByTagName("html").etAttribute("amp", "amp")
    window.addEventListener('scroll', function() {
    	 var a = document.getElementsByClassName('logoWhite');
       var b = document.getElementsByClassName('logoBlack');
      var sticky= $(document).scrollTop();
      console.log(sticky);
      if (sticky>100) {
      a[0].style.display = "none";
      b[0].style.display = "block";
      }else{
       b[0].style.display = "none";
        a[0].style.display = "block";
      }
    })
