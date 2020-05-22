<section class="section">
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  	<form id="form-submit-content" method="post" enctype="multipart/form-data" onsubmit="sys_preLoadSubmit()" >
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
		                 
		                    
		                    <div class="form-group">
		                      <label class="my-lable">File Ảnh mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-avatar" type="file" class="form-control">
		                    </div>
		                    <div class="form-row">
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Loại tin <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="status" class="form-control">
								  <option value="1">Tạo bài viết</option>
								  <option value="2">Giới thiệu công ty</option>
								  <option value="3">Chứng nhận công ty</option>
								  <option value="4">Liên hệ công ty</option>
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
		                      <label class="my-lable">Nội dung <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <textarea  class="blog-content" name="blog-content" ><?=isset($_content['content']) ? $_content['content'] : '' ?></textarea>
		                    </div>
							
		                    
                   		</div>
		                   	

	                    <div class="card-footer text-right">
	                      <button type="submit" name="blog-btn" class="btn btn-primary" value="<?=time()?>" >Đăng bài</button>
	                    </div>

                   </form>
                </div>
            </div>
			<div class="col-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>            	