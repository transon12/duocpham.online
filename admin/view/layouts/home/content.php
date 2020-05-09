<section class="section">
  <div class="row ">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Tổng danh mục</h5>
                  <h2 class="mb-3 font-18"><?=isset($count['category']) ? $count['category']['total'] : 0?></h2>
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="<?=$base_url['img']?>/public/admin/assets/img/banner/1.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Bài viết</h5>
                  <h2 class="mb-3 font-18"><?=isset($count['blog']) ? $count['blog']['total'] : 0?></h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="<?=$base_url['img']?>/public/admin/assets/img/banner/3.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Tổng sản phẩm</h5>
                  <h2 class="mb-3 font-18"><?=isset($count['product']) ? $count['product'] : 0?></h2>
                  <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="<?=$base_url['img']?>/public/admin/assets/img/banner/4.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>