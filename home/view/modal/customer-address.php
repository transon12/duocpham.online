<div id="myadd">

    <div class="modal-header text-center" style="background: #f49344">
        <h5 class="modal-title text-uppercase">Thông tin đị chỉ của bạn</h5>
        <div class="col-md-6 col-sm-6 col-xs-6 text-left add-row ">
            <span class="add-address"><b>Thêm địa chỉ giao hàng</b> <i class="fa fa-angle-down"></i></span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>

  </div>
  <div class="product-details1-area">
    <div class="product-details-info-area custome-add">
        <div class="row" >
            <form class="address_cus">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                  <select class=" province js-example-basic-multiple-limit form-control text-lowercase" id="provinces" style="width: 100%; ">
                    <option value="0">Lựa chọn tỉnh thành</option>
                    <?php if (isset($province) && !empty($province)){
                       foreach ($province->data as $key => $v){
                          echo "<option value='".$v->PROVINCE_ID."'>".$v->PROVINCE_NAME."</option>";
                      }
                  }?>
              </select>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <select  class=" district js-example-basic-multiple-limit form-control" id="districts"required="" style="width: 100%; text-transform: lowercase">
                <option>Lựa chọn quận huyện</option>
            </select>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
           <select  class=" wards js-example-basic-multiple-limit form-control text-lowercase" id="wardsx" required style="width: 100%;">
            <option>Lựa chọn xã phường</option>
        </select>
    </div>
    <div class="col-md-10 pt-2">
       <input type="text" name="addressx" value="" id="" class="form-control addressx" required placeholder="Địa chỉ chi tiết">
   </div>
   <div class="col-md-2 pt-2">
      <button class="Getdata btn btn-success">Lưu địa chỉ</button>
  </div>
</form>
</div>
</div>

<div class="product-details-area" >
  <form class="get-checked">
     <div style="padding:10px 0 20px 25px">
        <?php if(isset($item)&& !empty($item)){
            foreach ($item as $key => $v) {
             ?>
             <div>
                <input type="radio" name="id_address" <?php echo $v['set_default']==1? 'checked': ''?> value="<?= $v['id']?>" placeholder="" class="id_address text-lowercase">
                <span  style="text-transform:lowercase"><?= $v['address']?></span>
            </div>
        <?php }
         }?>
      </div>
      <div class="row  border-top" style="padding:10px 0 20px 25px">
        <div class="col-md-6">
            <div class="form-group"> 
              <span>Số điện thoại </span>
              <input type="search" class="form-control phone" value="<?= $userInfo['phone']?>" placeholder="">
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group"> 
              <span>email</span>
              <input type="search" class="form-control email" value="<?= $userInfo['email']?>" placeholder="">
            </div>
        </div>
      </div>
    
    </form>
</div>
</div>
<div class="modal-footer">
   <a href="#" class="btn-services-shop-now updatedata" style="background: #fff" >Cập nhật</a>
    <a href="#" class="btn-services-shop-now" style="background: #fff" data-dismiss="modal">Đóng</a>
</div>
</div>



<script  type="text/javascript"> 
    $('#provinces').select2();
    $('#districts').select2();
    $('#wardsx').select2();
    var base_url = '<?=$base_url?>';
    $('.province').change(function(){
        var html;
        var provinces= $('.province').val();
        $.ajax({
            url: base_url +'/index.php?c=product&a=addresscustomer&provinceid='+provinces ,
            dataType:'json',
            cache:false,
            success:function(data){ console.log(data['data']);
              if(data!=''&&typeof data=='object'){
                for(var i in data['data']){
                  html +='<option class="text-lowercase" value="'+data['data'][i]["DISTRICT_ID"]+'" <span stype="text-transform: lowercase">'+data['data'][i]["DISTRICT_NAME"]+'</span></option>';
              }
              $('.district').html(html);
          }
      }
  });
    });
    $('.district').change(function(){
        var htmls;
        var districts= $('.district').val();
        $.ajax({
            url: base_url +'/index.php?c=product&a=addresscustomer&dictrictid='+districts ,
            dataType:'json',
            cache:false,
            success:function(data){ console.log(data);
              if(data!=''&&typeof data=='object'){
                for(var i in data['data']){
                   htmls +='<option value="'+data['data'][i]["WARDS_ID"]+'"> <span stype="text-transform: lowercase">'+data['data'][i]["WARDS_NAME"]+'</span> </option>';
              }
              $('.wards').html(htmls);
          }
      }
  });
    });
    $('.add-address').click(function() {
        $('.custome-add').removeClass('show');
        var html= '<span class="remove-row"><b>Thêm địa chỉ giao hàng</b> <i class="fa fa-angle-up"></i></span>';
        $('.add-address').html(html);
        $('.custome-add').addClass('show');
    });

    $(document).on('click', '.remove-row', function(event) {
        var html= '<span class="add-address"><b>Thêm địa chỉ giao hàng</b> <i class="fa fa-angle-down"></i></span>';
        $('.remove-row').html(html);
         $('.custome-add').removeClass('show');
        event.preventDefault();
      
    });
    $('.Getdata').click(function(ev){
        var province= $('.province').val();
        var district= $('.district').val();
        var wards= $('.wards').val();
        var addressx = $('.addressx').val();
        var province_text=$('#provinces option:selected').text();
        var district_text=$('#districts option:selected').text();
        var wards_text=$('#wardsx option:selected').text();
        var address_detail= addressx +','+ wards_text +' ,'+district_text+' ,'+province_text;
        $.ajax({
            url:base_url+'/index.php?c=product&a=address_cus',
            method:'post',
            dataType:'json',
            data:{province:province,district:district, wards:wards,address_detail:address_detail,addressx:addressx},
            success:function(data){
             location.reload(); 
            }
        })
        ev.preventDefault();
    })
    $('.updatedata').click(function() {
      var datas= $('input[name=id_address]:checked').val();
      var phone= $('.phone').val();
      var email= $('.email').val();
  $.ajax({
    url: base_url+'/index.php?c=cart&a=changeaddress',
    method: 'post',
    cache: false,
    dataType:'json',
    data:{datas:datas, phone:phone,email:email},
    success:function (data) { console.log(data);
      location.reload(); 
    }
  })
});



</script>