
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <b style="color: red"> Bạn có muốn xóa đơn hàng này không??</b>
                                <input type="hidden" name="" class="data-remove" value="ma-don-hang-<?=$codecheck['id']?>-HD-<?= $codecheck['code']?>">
                               
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                 <a href="#" class="btn-services-shop-now remove-data" style="background: #fff">Có</a>
                <a href="#" class="btn-services-shop-now" style="background: #fff" data-dismiss="modal">Đóng</a>
            </div>
            <script>
                $('.remove-data').click(function() {
                   var data= $('.data-remove').val();
                  $.ajax({
                   url:base_url+'/index.php?c=cart&a=removeoder',
                   dataType:'json',
                    method: 'post', 
                    data:{data:data},
                    cache:false,
                    success:function(data){ console.log(data);
                     if(data['code']===200){
                            alert(data['msg']);
                            location.reload();
                          }else if(data['code']===404){
                            alert(data['msg']);
                          }else{
                            alert('Lỗi, Vui lòng kiểm tra lại');
                          }
                    }
                  });
                });
            </script>