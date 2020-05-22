<section class="section">
  <div class="section-body">
<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Danh sách sản phẩm</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($product) && !empty($product)) :?>
                    <?php $i = 1 ?>
                    <?php foreach ($product as $val) :?>
                        <tr>
                            <td><?=$i++?></td>                          
                            <td title="<?=$val['name']?>"><?=str_trimText($val['name'],50)?></td>
                            <td><?=$val['name_cate']; ?></td>
                            <td><?=$val['price']?></td>
                            <td class="text-center">
                                <a class="btn btn-success btn-sm" href="<?=$base_url['web']?>/adw-product/edit_product?code=<?=$val['code'] ?>">Sửa</a>
                                <a data-code="<?=$val['code']?>" href="#" class="btn btn-sm btn-warning blog-del">Del</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                  <?php endif ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>