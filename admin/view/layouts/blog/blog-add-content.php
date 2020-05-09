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
		                      <label class="my-lable">ID Video Youtube</label>
		                      <input maxlength="20" name="blog-video" type="text" class="form-control form-control-sm" value="<?=isset($_data['video']) ? $_data['video'] : '' ?>">
		                    </div>
		                    
		                    <div class="form-row">
		                      <div class="form-group col-md-6">
		                        <label class="my-lable">Tên ảnh <small>(không dấu, không khoảng trắng)</small> <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      	<input  name="blog-avatar-name" type="text" class="form-control form-control-sm" value="<?=isset($_data['avatar']) ? $_data['avatar'] : '' ?>">
		                      </div>
		                      <div class="form-group col-md-6">
		                        <label class="my-lable">Tên mô tả ảnh <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      	<input  name="blog-avatar-alt" type="text" class="form-control form-control-sm" value="<?=isset($_data['avatar_alt']) ? $_data['avatar_alt'] : '' ?>">
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="my-lable">File Ảnh mô tả <span class="text-danger" title="Bắt buộc" >*</span></label>
		                      <input  name="blog-avatar" type="file" class="form-control">
		                    </div>

		                    

							<div class="form-group">
								<label for="inputState">Danh mục <span class="text-danger" title="Bắt buộc" >*</span></label>
								<select  name="blog-category" class="form-control">
									<option value="">Chọn danh mục</option>
								  <?php 
		                          if(isset($blog_category)&&!empty($blog_category)){
		                          	foreach($blog_category as $v){
		                          		echo '<option '.(isset($_data['cat_id'])&&$_data['cat_id']==$v['id'] ? 'selected' : '' ).' value="'.$v['id'].'_'.$v['code'].'">'.$v['name'].'</option>';
		                          	}
		                          }
		                          ?>
								</select>
							</div>

		                    <div class="form-row">
		                      <div class="form-group col-md-4">
		                        <label for="inputCity">Tác giả <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <input  name="blog-author" type="text" class="form-control" value="<?=isset($_data['author']) ? $_data['author'] : 'Cooftech' ?>">
		                      </div>
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Ngày viết <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <input  name="blog-date" type="text" class="form-control datepicker" value="<?=isset($_data['date_create']) ? $_data['date_create'] : date('Y-m-d H:i:s',time()) ?>">
		                      </div>
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Lượt xem</label>
		                        <input name="blog-views" type="number" class="form-control" value="<?=isset($_data['views']) ? $_data['views'] : 0 ?>">
		                      </div>
		                    </div>
		                    <div class="form-row">
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Loại tin <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="blog-type" class="form-control">
		                          <?php 
		                          if(isset($blog_type)&&!empty($blog_type)){
		                          	foreach($blog_type as $v){
		                          		echo '<option '.(isset($_data['cat_id'])&&$_data['cat_id']==$v['id'] ? 'selected' : '' ).' value="'.$v['id'].'">'.$v['name'].'</option>';
		                          	}
		                          }
		                          ?>
		                        </select>
		                      </div>
		                      <div class="form-group col-md-4">
		                        <label for="inputState">Ngôn ngữ <span class="text-danger" title="Bắt buộc" >*</span></label>
		                        <select name="blog-language" class="form-control">
		                          <?php 
		                          if(isset($language)&&!empty($language)){
		                          	foreach($language as $v){
		                          		echo '<option '.(isset($_data['language'])&&$_data['language']==$v['id'] ? 'selected' : '' ).' value="'.$v['id'].'">'.$v['name'].'</option>';
		                          	}
		                          }
		                          ?>
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
							<div class="form-row">
			                    <div class="form-group col-md-6">
			                    	<label for="inputState">Website đăng bài</label> <br>
				                    <div class="custom-control custom-radio custom-control-inline">
				                      <input checked type="radio" id="blog-website1" name="blog-website" class="custom-control-input">
				                      <label class="custom-control-label" for="blog-website1">cooftech.com</label>
				                    </div>
				                    <div class="custom-control custom-radio custom-control-inline">
				                      <input type="radio" id="blog-website2" name="blog-website" class="custom-control-input" disabled>
				                      <label class="custom-control-label" for="blog-website2">php.vn</label>
				                    </div>
				                    <div class="custom-control custom-radio custom-control-inline">
				                      <input type="radio" id="blog-website3" name="blog-website" class="custom-control-input" disabled>
				                      <label class="custom-control-label" for="blog-website3">appwe.vn</label>
				                    </div>
			                    </div>
			                    <div class="form-group col-md-6">
			                    	<label for="inputState"><input type="checkbox" name="blog-settime-check" value="1" > Đặt lịch đăng</label>
		                        	<div class="col-md-12 row">
		                        		<div class="col-md-6">
		                        			<input  name="blog-settime-day" type="text" class="form-control datepicker" value="<?=date('Y-m-d H:00:00',time()+7200)?>">
		                        		</div>
		                        		<div class="input-group col-md-6">
		                        			<select name="blog-settime-hour" class="form-control">
					                          <?php 
					                          $time_next = date('H',time()+7200);
					                          	for($time=0;$time<=23;$time++){
					                          		if($time<10){
					                          			echo '<option '.($time_next==$time ? 'selected' : '' ).' value="0'.$time.':00:00" >0'.$time.':00</option>';
					                          		}else{
					                          			echo '<option '.($time_next==$time ? 'selected' : '' ).' value="'.$time.':00:00" >'.$time.':00</option>';
					                          		}
					                          	}
					                          ?>
					                        </select>
		                        		</div>
		                        	</div>
			                    </div>
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