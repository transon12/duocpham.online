
  window.addEventListener('scroll', function() {
    var a = document.getElementsByClassName('infoCompany');
    var sticky= $(document).scrollTop();
      // console.log(sticky);
      if (sticky>500) {
        a[0].style.display = "none";
      }else{
        a[0].style.display = "block";
      }
    })