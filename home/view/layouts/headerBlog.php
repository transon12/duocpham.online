 <header id="header-sticky" class="header-transparent header-green">
            <div class="header-area"  >
                <div class="container">
                    <div class="position-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?= $base_url?>" class="logo"> 
                                        <img src="<?= $base_url?>/public/assets/img/logo.png" class="logoWhite" alt="Thiết kế ứng dụng" width="100px">
                                    <img src="<?= $base_url?>/public/assets/img/logo.png" class="logoBlack" width="100px" alt="Thiết kế ứng dụng" style="display: none"> </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 position-static">
                                <div class="main-menu text-center">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="<?php if(empty($_GET['code']) && ($_GET['c']== 'home') ){echo 'active';}?>"><a href="<?= $base_url?>">Trang chủ</a></li>
                                            <li class="<?php if($_GET['code']== 'thiet-ke-app'){echo 'active';}?>"><a href="<?= $base_url?>/thiet-ke-app">Dịch vụ</a></li>
                                            <li class="<?php if($_GET['code']== 'appwe-thiet-ke-ung-dung'){echo 'active';}?>"><a href="<?= $base_url?>/appwe-thiet-ke-ung-dung">Giới thiệu</a></li>
                                            <li class="<?php if($_GET['c']== 'blogs'){echo 'active';}?>"><a href="<?= $base_url?>/blogs">Blog</a></li>
                                            <li class="<?php if($_GET['code']== 'lien-he-thiet-ke-ung-dung'){echo 'active';}?>"><a href="<?= $base_url?>/lien-he-thiet-ke-ung-dung">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu"></div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                <div class="header-btn text-right">
                                    <a href="<?= $base_url?>/lien-he-thiet-ke-ung-dung" class="x-btn ">Báo giá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>