		<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12 col-md-2 col-lg-2"></div>
				<div class="col-12 col-md-8 col-lg-8">
					<div class="card">
						<form action="<?=$base_url['web']?>/adw-products/updated_product?code=<?=$item['code']?>" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
							<div class="card-body">

								<input type="hidden" class="code_product" value="<?=$id['id']?>" data-code="<?=$item['code']?>">
								<div class="form-group">
									<label class="my-lable">Tên sản phẩm <span class="text-danger" title="Bắt buộc" >*</span></label>
									<input  name="name" type="text" class="form-control" value="<?=$item['name']?>">
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="my-lable">Url <span class="text-danger" title="Bắt buộc" >*</span></label>
										<input  name="url_code" type="text" class="form-control" value="<?=$item['url_code']?>">
									</div>
									<div class="form-group col-md-6">
										<label class="my-lable">Mã sản phẩm <span class="text-danger" title="Bắt buộc" >*</span></label>
										<input  name="product_code" type="text" class="form-control" value="<?=$item['product_code']?>">
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
									<div class="form-group">
									<label for="inputState">Nhóm hàng <span class="text-danger" title="Bắt buộc" >*</span></label>
									<select  name="group" class="form-control">
										<?php if (isset($group)&&$group!='') {
											foreach ($group as $v) {
												if($v['cat_id'] == $item['id_category']){?>
												<option value="<?= $v["id"]?>" <?= $v["id"] == $item['id_group'] ? 'selected="selected"':''?>><?= $v["name"]?></option>								
											<?php }} }?>
										</select>
									</div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="inputState">Giá niêm yết <span class="text-danger" title="Bắt buộc" >*</span></label>
											<input name="price" type="number" class="form-control" value="<?=$item['price']?>">
										</div>
										<div class="form-group col-md-4">
											<label for="inputState">Giá khuyến mại <span class="text-danger" title="Bắt buộc" >*</span></label>
											<input name="price_sale" type="number" class="form-control" value="<?=$item['price_sale']?>">
										</div>
										<div class="form-group col-md-4">
											<label for="inputState">Bảo hành (Tháng) <span class="text-danger" title="Bắt buộc" >*</span></label>
											<input max="48" min="0" name="guarantee" type="number" class="form-control" value="<?=$item['guarantee']?>">
										</div>
									</div>
									<div class="form-group">
										<label>Thuộc tính <span class="text-danger" title="Bắt buộc" >*</span></label>
										<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thêm thuộc tính</button> -->
										<input type="hidden" id="properties-list" value="">
										<button style="" type="button" class="btn btn-sm btn-primary" id="btn-editproperties">Thêm thuộc tính</button>
										<!-- <button style="" type="button" class="btn btn-success" id="addnew">Thêm mới</button> -->
										<br>
									</div>

									<div class="form-group" id="list-addproperties">

										

									</div>
									<div class="form-group appendd">
										<?php if (isset($properties_ct) && !empty($properties_ct)) :?>
										<?php foreach ($properties_ct as $val) :?>
											<div class="row del-id-<?=$val['id_properties']?>" >
												<div class="form-group col-md-3">
													<label><?=$val['name']?>:</label>
													<input type="hidden" class="form-control form-control-sm id_properties" name="id_properties1[]" value="<?=$val['id_properties']?>">
												</div>
												<div class="form-group col-md-9">
													<input type="" class="form-control form-control-sm data" name="properties_content[]" value="<?=$val['properties_content']?>">
												</div>
											</div>
										<?php endforeach ?>
									<?php endif ?>
								</div>


			                   <br>
			                   <div class="form-group">
			                   	<label class="my-lable">Mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   	<textarea  maxlength="200" name="description" class="form-control" class="description"><?=$item['description']?></textarea>
			                   </div>
			                   <div class="form-group">
			                   	<label class="my-lable">Thẻ tags <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   	<input  name="tags" type="text" class="form-control inputtags" value="<?=$item['tags']?>">
			                   </div>
			                   <div class="form-group">
			                   	<label class="my-lable">Keywords <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   	<input  name="keywords" type="text" class="form-control inputtags" value="<?=$item['keywords']?>">
			                   </div>
			                   <div class="form-row">
			                   	<div class="form-group col-md-6">
			                   		<label class="my-lable">Ảnh đại diện sản phẩm <span class="text-danger" title="Bắt buộc" >*</span><button type="button" class="click_detail1 btn btn-primary" data-code1="<?=$item['code']?>" data-toggle="modal" data-target="#myModal1"><i class="fas fa-edit"></i>   Sửa ảnh đại diện</button></label>
			                   		<img src="<?=$base_url['img']?>/<?=$item['avatar']?>" alt="" style="width:100px; height:75px; !important">
								</div>
			                   	<div class="form-group col-md-6">
			                   		<label class="my-lable">Ảnh mô tả sản phẩm <span class="text-danger" title="Bắt buộc" >*</span><button type="button" class="click_detail btn btn-primary" data-code="<?=$item['code']?>" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i>   Sửa ảnh mô tả</button></label>
			                   		<br>
			                   		<?php if (isset($images)&& !empty($images)):?>
			                   		<?php foreach ($images as $val):?>
			                   			<img src="<?=$base_url['img']?>/<?=$val['images']?>" alt="" style="width:100px; height:75px; !important">
			                   		<?php endforeach ?>
			                   	<?php endif ?>
			               	</div>
			               	</div>
			               <br>
			               <div class="form-row">
			               	<div class="form-group col-md-4">
			               		<label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
			               		<select name="active" class="form-control">
			               			<option value="1">Chọn trạng thái</option>
			               			<option <?php if ($item['active']==1) {
			               				echo 'selected';
			               			} ?> value="1">Còn hàng</option>
			               			<option <?php if ($item['active']==0) {
			               				echo 'selected';
			               			} ?> value="0">Hết hàng</option>
			               		</select>
			               	</div>
			               	<div class="form-group col-md-4">
			               		<label for="inputState">Sản phẩm hot <span class="text-danger" title="Bắt buộc" >*</span></label>
			               		<select name="product_hot" class="form-control">
			               			<option <?php if ($item['product_hot']==1) {
			               				echo 'selected';
			               			} ?>  value="1" >Sản phẩm hot</option>
			               			<option <?php if ($item['product_hot']==2) {
			               				echo 'selected';
			               			} ?>  value="2">Sản phẩm thường</option>
			               		</select>
			               	</div>
			               	<div class="form-group col-md-4">
			               		<label for="inputState">Ngôn ngữ <span class="text-danger" title="Bắt buộc" >*</span></label>
			               		<select name="language" class="form-control">
			               			<option value="1">Chọn ngôn ngữ</option>
			               			<option <?php if ($item['language']==1) {
			               				echo 'selected';
			               			} ?> value="1">Tiếng Việt</option>
			               			<option <?php if ($item['language']==2) {
			               				echo 'selected';
			               			} ?> value="2">Tiếng Anh</option>
			               			<option <?php if ($item['language']==3) {
			               				echo 'selected';
			               			} ?> value="3">Tiếng Nhật</option>
			               		</select>
			               	</div>
			               </div>

			               <div class="form-group">
			               	<label class="my-lable">Chi tiết <span class="text-danger" title="Bắt buộc" >*</span></label>
			               	<textarea  class="content" name="content" ><?=$content['content']?></textarea>
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

