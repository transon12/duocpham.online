<section class="section">
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  	<form action="<?=$base_url['web']?>/adw-system/updated?id=<?=$acc['id']?>" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
                   		<div class="card-body">
							<div class="form-row">
	                   			<div class="form-group col-md-4">
			                      <label class="my-lable">Tên <span class="text-danger" title="Bắt buộc" >*</span></label>
			                      <input  name="name" type="text" class="form-control" required="" value="<?=$acc['name']?>">
			                    </div>
			                    <div class="form-group col-md-8">
				                    <label class="my-lable">Ảnh đại diện <span class="text-danger" title="Bắt buộc" >*</span></label>
				                    <input  name="avatar" type="file" class="form-control">
				                    <br>
				                    <img src="<?=$base_url['img']?>/<?=$acc['avatar']?>" alt="" width="250px">
				                </div>
				                
							</div>
		                    <div class="form-row">
								<div class="form-group col-md-4">
			                        <label for="inputState">Kiểu <span class="text-danger" title="Bắt buộc" >*</span></label>
			                        <select name="type" class="form-control">
			                         	<option value="1">Slide</option>
			                         	<option value="2">Banner</option>
			                         	<option value="3">Banner quảng cáo</option>
			                        </select>
		                      	</div>
		                      	<div class="form-group col-md-4">
		                      		<label for="inputState">Vị trí <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      		<select name="position" class="form-control">
			                         	<option value="1">Vị trí 1</option>
			                         	<option value="2">Vị trí 2</option>
			                         	<option value="3">Vị trí 3</option>
			                         	<option value="4">Vị trí 4</option>
			                         	<option value="5">Vị trí 5</option>
			                        </select>
		                      	</div>
		                      	<div class="form-group col-md-4">
			                        <label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
			                        <select name="active" class="form-control">
			                         	<option value="1">Chọn trạng thái</option>
			                         	<option value="1">Active</option>
			                         	<option value="0">Not Active</option>
			                        </select>
		                      	</div>
		                    </div>
                   		</div>
	                    <div class="card-footer text-right">
	                    	<a href="<?=$base_url['web']?>/adw-system/list" title="" class="btn btn-warning">Hủy</a>
	                      	<button type="submit" name="blog-btn" class="btn btn-primary">Xác nhận</button>
	                    </div>
                   </form>
                </div>
            </div>
			<div class="col-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>            	