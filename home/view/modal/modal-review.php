              <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">

                  <div class="product-details-info-area">
                    <div>
                      <h5> Đánh giá sản phẩm bạn đã mua</h5>
                    </div>

                 <section class='rating-widget'>

                  <!-- Rating Stars Box -->
                  <div class='rating-stars' style="font-size: 20px">
                    <ul id='stars' >
                      <li class='star' title='Rất kém' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Kém' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Tốt' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Kha tốt' data-value='4' >
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Tuyệt!!!' data-value='5' >
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                </ul>

                <div class='success-box'>
                    <div class='clearfix'></div>
                    <img alt='tick image' width='20' src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>
                    <div class='text-message'></div>
                    <div class='clearfix'></div>
                </div>



            </div>
            
        </section>
    <div class="row" style="padding-top: 20px">
        <div class="contact-form">
            <form action="<?= $base_url?>/cart/addreview" method="post">
                <fieldset>
                    <div class="col-sm-12">
                        <div class="form-group">

                            <select name="review-name"  class="form-control">
                              <option value="">Ý kiến đánh giá của bạn về sản phẩm</option>
                              <?php if(isset($item)) {
                                foreach ($item as $key => $v) {?>
                                 <option value="<?= $v['id']?>"><?= $v['content']?></option>
                                <?php }
                              }?>
                              
                              
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <input type="hidden" name="ratingstar" value="" class="ratingstar">
                      <input type="hidden" name="code_product" value="<?= $_GET['code']?>" class="code_product">
                       <input type="hidden" name="order_id" value="<?= $_GET['order']?>" class="order_id">
                        <div class="form-group">
                            <textarea placeholder="Message*" name="describe" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn-send-message">Gửi</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>      
<script>
  $(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
     stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var ratingstar= $('.ratingstar').val(ratingValue);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Cảm ơn! bạn đã đánh giá  " + ratingValue + " sao.";
    }
    else {
        msg = "chúng tôi xin lỗi Và sẽ liên hệ với bạn sau ";
    }
    responseMessage(msg);
    
  });

});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
 
</script>         
