
<section class="section">
  <div class="section-body">
<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh mục sản phẩm</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if(isset($list)&&!empty($list)){
                    foreach($list as $v){
                      if ($v['active'] == 1) {
                        $at = 'Active';
                      }else{
                        $at = 'Not Active';
                      }
                      echo '<tr id="tr-'.$v['code'].'">
                              <td title="'.$v['name'].'" >'.str_trimText($v['name'],50).'</td>
                              <td>'.$at.'</td>
                              <td><a href="'.$base_url['web'].'/adw-product/edit_category?code='.$v['code'].'" class="btn btn-sm btn-primary">Sửa</a> </td>
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