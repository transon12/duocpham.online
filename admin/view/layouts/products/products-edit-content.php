		<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12 col-md-2 col-lg-2"></div>
				<div class="col-12 col-md-8 col-lg-8">
					<div class="card">
						<form action="<?=$base_url['web']?>/adw-product/updated_product?code=<?=$item['code']?>" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
							<div class="card-body">

								<input type="hidden" class="code_product" value="<?=$id['id']?>" data-code="<?=$item['code']?>">
								<div class="form-group">
									<label class="my-lable">Tên sản phẩm <span class="text-danger" title="Bắt buộc" >*</span></label>
									<input  name="name" type="text" class="form-control" value="<?=$item['name']?>">
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="my-lable">Url <span class="text-danger" title="Bắt buộc" >*</span></label>
										<input  name="url_code" type="text" class="form-control" value="<?=$item['url_code']?>">
									</div>
									
								</div>


								<div class="form-group">
									<label for="inputState">Danh mục <span class="text-danger" title="Bắt buộc" >*</span></label>
									<select  name="id_category" class="form-control categorySelect" >
										<?php if (isset($list)&&$list!='') {
											foreach ($list as $value) {
												$sl = '';
												if ($value['id'] == $item['id_category']) {
													$sl = 'selected';
												}
												echo '<option '.$sl.' value="'.$value["id"].'">'.$value["name"].'</option>';								}
											} ?>
										</select>
									</div>
								
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputState">Giá niêm yết <span class="text-danger" title="Bắt buộc" >*</span></label>
											<input name="price" type="number" class="form-control" value="<?=$item['price']?>">
										</div>
										
										
									</div>
									
			                   <br>
			                   <div class="form-group">
			                   	<label class="my-lable">Mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   	<textarea  maxlength="200" name="description" class="form-control" class="description"><?=$item['descriptions']?></textarea>
			                   </div>
			                   
			                   <div class="form-row">
			                   	<div class="form-group col-md-6">
			                   		<label class="my-lable">Ảnh mô tả sản phẩm <span class="text-danger" title="Bắt buộc" >*</span><button type="button" class="click_detail btn btn-primary" data-code="<?=$item['code']?>" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i>   Sửa ảnh mô tả</button></label>
			                   		<br>
			                   		<?php if (isset($avatars)&& !empty($avatars)):?>
			                   		<?php foreach ($avatars as $val):?>
			                   			<img src="<?=$base_url['img']?>/<?=$val?>" alt="" style="width:100px; height:75px; !important">
			                   		<?php endforeach ?>
			                   	<?php endif ?>
			               	</div>
			               	</div>
			               <br>
			               <div class="form-row">
			               	<div class="form-group col-md-6">
			               		<label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
			               		<select name="active" class="form-control">
			               			<option value="1">Chọn trạng thái</option>
			               			<option <?php if ($item['active']==1) {
			               				echo 'selected';
			               			} ?> value="1">Bán</option>
			               			<option <?php if ($item['active']==0) {
			               				echo 'selected';
			               			} ?> value="0">Tạm dừng</option>
			               		</select>
			               	</div>
			               	<div class="form-group col-md-6">
			               		<label for="inputState">Sản phẩm hot <span class="text-danger" title="Bắt buộc" >*</span></label>
			               		<select name="product_hot" class="form-control">
			               			<option <?php if ($item['hotProduct']==1) {
			               				echo 'selected';
			               			} ?>  value="1" >Sản phẩm hot</option>
			               			<option <?php if ($item['hotProduct']==2) {
			               				echo 'selected';
			               			} ?>  value="2">Sản phẩm thường</option>
			               		</select>
			               	</div>
			              
			               </div>

			              
			           </div>
			           <div class="card-footer text-right">
			           	<a href="<?=$base_url['web']?>/adw-products/list" title="" class="btn btn-warning">Hủy</a>
			           	<button type="submit" name="blog-btn" class="btn btn-primary" value="">Xác nhận</button>

			           </div>

			       </form>
			   </div>
			</div>
			<div class="col-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>            	
<!-- Modal -->
<div class="modal fade" id="modal-properties" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-properties">

		</div>
	</div>
</div> 

