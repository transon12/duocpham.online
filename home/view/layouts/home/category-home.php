<div class="sidebar-menu col-md-3 col-sm-12 hidden-xs ">
                        <div class="responsive so-megamenu ">
                            <div class="so-vertical-menu no-gutter compact-hidden">
                                <nav class="navbar-default">
                                    <div class="container-megamenu vertical open">
                                        <div id="menuHeading-1">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern" style="background:#80BB35">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        Danh mục sản phẩm
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navbar-header">
                                            <button id="show-verticalmenu" data-toggle="collapse"
                                                class="navbar-toggle fa fa-list-alt">

                                            </button>

                                        </div>
                                        <div class="vertical-wrapper " style="display: block; position:relative; margin-bottom: 1em">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu">
                                                        <?php if(isset($category) && !empty($category)){
                                                        foreach($category as $k =>$v){?>
                                                        <li class="item-vertical style1 ">
                                                            <p class="close-menu"></p>
                                                            <a href="<?= $base_url?>/product/list?category=<?=$v['code']?>"
                                                                class="clearfix">

                                                                <span><?= $v['name']?></span>

                                                            </a>
                                                        </li>
                                                        <?php } }?>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
						</div>
						<div class="fb-page" data-href="https://www.facebook.com/H&#x1ed3;ng-&#x111;&#x1eb3;ng-s&#xe2;m-Vinnate-102290151265867" data-tabs="" data-width="262" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
						<blockquote cite="https://www.facebook.com/H&#x1ed3;ng-&#x111;&#x1eb3;ng-s&#xe2;m-Vinnate-102290151265867" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/H&#x1ed3;ng-&#x111;&#x1eb3;ng-s&#xe2;m-Vinnate-102290151265867">Hồng đẳng sâm  Vinnate</a></blockquote></div>
                        <div class="mt-4" style="margin-top: 1em ">
                            <div id="menuHeading-1">
                                <div class="megamenuToogle-wrapper">
                                    <div class="megamenuToogle-pattern" style="background:#80BB35">
                                        <div class="container">
                                            <div>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            Bài viết mới

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="newBlog">
                                <?php if(isset($blogNew) && !empty($blogNew)){
                                foreach($blogNew as $k => $v){
                            ?>
                                <li>
                                    <a
                                        href="<?= $base_url?>/<?=$v['title_url']?>-<?=$v['code']?>.html"><?= $v['title']?></a>
                                </li>
                                <?php }}?>

                            </ul>
                        </div>
                        <div class="mt-2">
                            <div id="menuHeading-1">
                                <div class="megamenuToogle-wrapper">
                                    <div class="megamenuToogle-pattern" style="background:#80BB35">
                                        <div class="container">
                                            <div>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            Sản phẩm bán chạy

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="newBlog">
                                <?php if(isset($prodcutSort2) && !empty($prodcutSort2)){
                                foreach($prodcutSort2 as $k =>$v ){?>
                                <li>
                                <div class="row">
                                        <div class="col-md-5">
                                        <?php $img= explode(',',$v['avatar']);
                                        $itemImg= $img[0]; ?>
                                            <img src="<?= $base_url?>/<?=$itemImg?>" alt="" width="100%">
                                        </div>
                                        <div class="col-md-7 p-0">
                                        <b class="mb-5"><?=$v['name']?></b>
                                        <br>
                                    
                                    <a href="#" class=" btn-success mt-1"
                                        style="padding: .2em .2em; margin-top: 1em;">xem
                                        chi tiết</a>
                                            </a>
                                        </div>
                                    </div>
                                   
                                </li>
                                <?php } }?>
                            </ul>
                        </div>
                    </div>