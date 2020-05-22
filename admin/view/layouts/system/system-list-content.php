
<section class="section">
  <div class="section-body">
<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách Banner-Slide</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th style="width: 250px">Tên</th>
                    <th>Ảnh</th>
                    <th style="width: 150px">Loại</th>
                    <th style="width: 150px">Vị trí</th>
                    <th style="width: 150px">Trạng thái</th>
                    <th style="width: 150px">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if(isset($list)&&!empty($list)){
                    foreach($list as $v){
                      if ($v['active'] == 1) {
                        $at = 'Hiển thị';
                      }else{
                        $at = 'Không hiển thị';
                      }
                      if ($v['type'] == 1) {
                        $type = 'Slide';
                      }else{
                        $type = 'Banner';
                      }
                      echo '<tr id="tr-'.$v['id'].'">
                              <td title="'.$v['name'].'" >'.str_trimText($v['name'],50).'</td>
                              <td><img src="'.$base_url['img'].'/'.$v['avatar'].'" alt="" width="300px" hight="20px"></td>
                              <td>'.$type.'</td>
                              <td>'.$v['position'].'</td>
                              <td>'.$at.'</td>
                              <td><a href="'.$base_url['web'].'/adw-system/edit?id='.$v['id'].'" class="btn btn-sm btn-primary">Sửa</a> <a data-code="'.$v['id'].'" href="#" class="btn btn-sm btn-warning blog-del">Xóa</a></td>
                            </tr>';
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>