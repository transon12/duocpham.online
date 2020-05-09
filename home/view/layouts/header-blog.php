<header id="header-sticky" class="header-transparent header-text-white header-shop" style="border-bottom: 1px solid #ddd; background-color:#fff">
        <div class="header-area">
            <div class="container">
                <div class="position-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-5 col-md-5  pl-0 pr-0 ">
                            <div class="logo d-flex">
                                <a href="<?= $base_url?>" > <img src="<?= $base_url?>/public/assets/img/logo.png" alt="" style="width: 7em"></a>
                                 
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-5 col-md-5 position-static">
                            <div class="main-menu white-menu text-center">
                                <nav id="mobile-menu">
                                    <ul >
                                      <?php if (isset($list_name_cate) && !empty($list_name_cate)) :?>
                                        <?php foreach ($list_name_cate as $val) :?>
                                            <li class="">
                                                <a  style="font-size: .9em;  <?php if($_GET['code'] == $val['code'] ){echo 'color:#28a745';}?>" href="<?=$base_url?>/<?=$val['code']?>"><?=$val['name']?></a>
                                            </li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>