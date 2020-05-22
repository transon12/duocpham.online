<section class="section">
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                	<div class="card-body">
                		
		                   <form id="form-avatar-edit" enctype="multipart/form-data">
		                   	<div class="form-row">
		                      <div class="col-md-4" id="blog-avatar-view">
			                      <img style="width:100%;" src="<?=$base_url['img']?>/upload/blogs/<?=$_data['avatar']?>">
			                   </div>
			                   <div class="form-row col-md-8">
									<div class="form-group col-md-6">
										<div class="form-group">
									  		<label class="my-lable">Tên ảnh <span class="text-danger" title="Bắt buộc" >(không đổi)</span></label>
									  		<input required readonly id="blog-avatar" name="blog-avatar" type="text" class="form-control form-control-sm" value="<?=$_data['avatar']?>" >
									  		<input type="hidden" id="blog-code" name="blog-code" value="<?=(isset($_GET['code']) ? (int)$_GET['code'] : '' )?>">
										</div>
									</div>
									<div class="form-group col-md-6">
										<div class="form-group">
									  		<label class="my-lable">Tên mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
									  		<input required id="blog-avatar_alt" name="blog-avatar_alt" type="text" class="form-control form-control-sm" value="<?=isset($_data['avatar_alt']) ? $_data['avatar_alt'] : '' ?>" >
										</div>
									</div>
									<div class="form-group col-md-12">
										<input id="blog-file" name="blog-file" type="file">
									</div>
									<div class="form-group col-md-12">
										<button type="submit" name="blog-btn-avatar" class="btn btn-primary" value="<?=time()?>" >Thay đổi</button>
									</div>
			                   </div>
		                    </div>
		                   </form>
                	</div>
                	<hr>
                	
                  	<form id="form-submit-content"  method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
                   		<div class="card-body">
                   			<div class="form-group">
		                      <label class="my-lable">Tiêu đề <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-title" type="text" class="form-control form-control-sm" value="<?=isset($_data['title']) ? $_data['title'] : '' ?>" >
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">Tiêu đề URL <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-title-url" type="text" class="form-control form-control-sm" value="<?=isset($_data['title_url']) ? $_data['title_url'] : '' ?>">
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">Mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <textarea  maxlength="200" name="blog-description" class="form-control"><?=isset($_data['description']) ? $_data['description'] : '' ?></textarea>
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">Thẻ tags <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-tags" type="text" class="form-control inputtags" value="<?=isset($_data['tags']) ? $_data['tags'] : '' ?>">
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">Keywords <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-keywords" type="text" class="form-control inputtags" value="<?=isset($_data['keywords']) ? $_data['keywords'] : '' ?>">
		                    </div>
		                  

		                   
							<div class="form-row">
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Loại tin <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="status" class="form-control">
								  <option value="1" <?=isset($_data['status'])&&$_data['status']==1 ? 'selected' : '' ?>>Tạo bài viết</option>
								  <option value="2"  <?=isset($_data['status'])&&$_data['status']==2 ? 'selected' : '' ?> >Giới thiệu công ty</option>
								  <option value="3"  <?=isset($_data['status'])&&$_data['status']==3 ? 'selected' : '' ?>>Chứng nhận công ty</option>
								  <option value="4"  <?=isset($_data['status'])&&$_data['status']==4 ? 'selected' : '' ?>>Liên hệ công ty</option>
		                        </select>
		                      </div>
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Trạng thái <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="active" class="form-control">
								  <option value="1">Hiển thị</option>
								  <option value="0">Không Hiển thị</option>
		                        </select>
		                      </div>
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Ghim Top <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="blog-stick" class="form-control">
		                          <option  value="0" >Tin thường</option>
		                          <option <?=isset($_data['stick'])&&$_data['stick']==1 ? 'selected' : '' ?> value="1">Tin hot</option>
		                          <option <?=isset($_data['stick'])&&$_data['stick']==2 ? 'selected' : '' ?> value="2">Tin chính</option>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <label class="my-lable">Content <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <textarea  class="blog-content" name="blog-content" ><?=isset($_content['content']) ? $_content['content'] : '' ?></textarea>
		                    </div>
                   		</div>
		                   	

	                    <div class="card-footer text-right">
	                      <button type="submit" name="blog-btn" class="btn btn-primary" value="<?=time()?>" >Lưu</button>
	                    </div>

                   </form>
                </div>
            </div>
			<div class="col-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>            	