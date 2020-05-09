<section class="section">
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  	<form action="<?=$base_url['web']?>/adw-product/update_category?code=<?=$item['code']?>" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
                   		<div class="card-body">
                   			<div class="form-group">
		                      <label class="my-lable">Tên danh mục <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="name" type="text" class="form-control form-control-sm" id="name" value="<?=$item['name']?>">
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">Code<span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="code" type="text" class="form-control form-control-sm" id="code" value="<?=$item['code']?>">
		                    </div>
		                    <div class="form-row">
							
		                      	<div class="form-group col-md-12">
			                        <label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
			                        <select name="active" class="form-control">
			                         	<option value="1">Chọn trạng thái</option>
			                         	<option value="1" <?php if ($item['active'] == 1) {
			                         		echo 'selected';
			                         	} ?>>Active</option>
			                         	<option value="0" <?php if ($item['active'] == 0) {
			                         		echo 'selected';
			                         	} ?>>Not Active</option>
			                        </select>
		                      	</div>
		                    </div>
                   		</div>
	                    <div class="card-footer text-right">
	                    	<a href="<?=$base_url['web']?>/adw-products/list_category" title="" class="btn btn-warning">Cancel</a>
	                      	<button type="submit" name="blog-btn" class="btn btn-primary">Xác nhận</button>
	                    </div>
                   </form>
                </div>
            </div>
			<div class="col-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>            	