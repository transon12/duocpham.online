

                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">

                    <div class="product-details-info-area">
                        <div class="row">
                            <?php if (isset($codecheck) && ($time-strtotime($codecheck['date_success']))<259200){?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <b style="color: red"> Bạn có muốn đổi trả đơn hàng này không??</b>
                                <form class="data-return" action="<?= $base_url?>/cart/refesh" method="post">
                                  <input type="hidden" name="code" class="data-refresh" value="ma-don-hang-<?=$codecheck['id']?>-HD-<?= $codecheck['code']?>">
                                  <div class="form-group ">
                                    <div class="">
                                      <label><b>Lý do đổi trả của bạn</b></label>
                                      <textarea type="text" name="" class="form-control" name="feeback"> </textarea>
                                    </div>
                                     <div class="pt-2">
                                      <label><b>Hình ảnh</b></label>
                                      <input type="file" name="image" class="" value="">
                                    </div>  
                                  </div>
                                  <div class="text-center"><button class="btn btn-success" type="submit">Gửi phản hồi</button></div>
                                </form>
                            </div>
                             <?php }else{?>
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <b style="color: red"> Bạn đã quá ngày đổi trả??</b>

                              </div>
                            <?php }?>
                          </div>
                        </div>
            
           