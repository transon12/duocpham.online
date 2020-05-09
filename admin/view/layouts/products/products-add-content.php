	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12 col-md-2 col-lg-2"></div>
				<div class="col-12 col-md-8 col-lg-8">
					<div class="card">
						<form action="<?=$base_url['web']?>/adw-product/add" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
							<div class="card-body">
								<div class="form-group">
									<label class="my-lable">Tên sản phẩm <span class="text-danger" title="Bắt buộc" >*</span></label>
									<input  name="name" type="text" class="form-control" value="" >
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="my-lable">Url <span class="text-danger" title="Bắt buộc" >*</span></label>
										<input  name="url_code" type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="inputState">Danh mục <span class="text-danger" title="Bắt buộc" >*</span></label>
									<select  name="id_category" class="form-control categorySelect">
										<?php if (isset($list)&&$list!='') {
											foreach ($list as $value) {
												echo '<option value="'.$value["id"].'">'.$value["name"].'</option>';							
												}
											} ?>
										</select>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputState">Giá niêm yết <span class="text-danger" title="Bắt buộc" >*</span></label>
											<input name="price" type="number" class="form-control" value="0">
										</div>
										
									</div>
									
								
			                   	<br>
			                   	<div class="form-group">
			                   		<label class="my-lable">Thẻ tags <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   		<input  name="tags" type="text" class="form-control inputtags" value="">
			                   	</div>
			                   	<div class="form-group">
			                   		<label class="my-lable">Keywords <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   		<input  name="keywords" type="text" class="form-control inputtags" value="">
			                   	</div>
			                   	<div class="form-group">
			                   		<label class="my-lable">Chọn ảnh cho sản phẩm (<span style="color: red"> Ảnh đầu tiên là Hình ảnh chính	</span>)<span class="text-danger" title="Bắt buộc" >*</span></label>
			                   		<div class="file-upload-previews">
			                   			
			                   		</div>
			                   		<div class="">
			                   			<input required type="file" name="images" multiple="">
			                   		</div>
			                   	</div>
			                   	<br>
			                   	<div class="form-row">
			                   		<div class="form-group col-md-6">
			                   			<label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   			<select name="active" class="form-control">
			                   				<option value="1">Bán</option>
			                   				<option value="0">Tạm dừng</option>
			                   			</select>
			                   		</div>
			                   		<div class="form-group col-md-6">
			                   			<label for="inputState">Sản phẩm hot <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   			<select name="product_hot" class="form-control">
			                   				<option value="1" >Sản phẩm hot</option>
			                   				<option value="2">Sản phẩm thường</option>
			                   			</select>
			                   		</div>
			                   	</div>
			                   	<div class="form-group">
			                   		<label class="my-lable">Chi tiết <span class="text-danger" title="Bắt buộc" >*</span></label>
			                   		<textarea  class="content" name="content" ></textarea>
			                   	</div>
			                   </div>
			                   <div class="card-footer text-right">
			                   	<a href="<?=$base_url['web']?>/adw-products/list" title="" class="btn btn-warning">Hủy</a>
			                   	<button type="submit" name="blog-btn" class="btn btn-primary" value="" >Xác nhận</button>
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

