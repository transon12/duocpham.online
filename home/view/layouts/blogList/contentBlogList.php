  <section class="blog-area pt-60 pb-80">
                <div class="container">
                            <div class="row">
                                <?php if (isset($item) && !empty($item))  {
                                    foreach ($item as $key => $v) {?>
                                      <div class="col-lg-3 col-md-6">
                                            <article class="postbox post format-image mb-40">
                                                <div class="postbox__thumb mb-25">
                                                    <a href="#">
                                                         <img src="<?= $base_img?>/upload/blogs/<?= $v['avatar']?>" alt="<?= $v['name']?>">
                                                    </a>
                                                </div>
                                                <div class="postbox__text ">
                                                    <div class="post-meta mb-10">
                                                        <span><a href="#" title="<?= $v['writer']?>"><i class="far fa-user"></i><?= $v['writer']?></a></span>
                                                         <span><i class="far fa-calendar-check"></i> <?= date('d-m-Y',time($v['date_created']))?> </span>
                                                    </div>
                                                    <h3 class="blog-title blog-title-sm">
                                                       <a href="<?= $base_url?>/blog/detail/chi-tiet-bai-viet-<?= $v['id']?>-<?= md5($v['id'])?>-<?= $v['url']?>" title="<?= $v['name']?>">
                                                        <?= readMore($v['name'],'',100)?></a>
                                                    </h3>
                                                    <div class="post-text">
                                                        <?= readMore($v['name'],'<div class="read-more-btn"> <a href="'.$base_url.'/blog/detail/chi-tiet-bai-viet-'.$v['id'].'-'.md5($v['id']).'-'.$v['url'].'">read more <i class="fas fa-long-arrow-alt-right"></i></a></div>',200)?>
                                                    </div>
                                                    
                                                </div>
                                            </article>
                                        </div>
                                    <?php } }?>
                            </div>
                            <div class="basic-pagination basic-pagination-2 mb-40">
                                <ul>
                                    <?php if(isset($_GET['page'])){?>
                                    <li><a href="<?= $base_url?>/blog?page=<?= $_GET['page']-1?>"><i class="fas fa-angle-double-left"></i></a></li>
                                    <?php } for ($i=1; $i < $page; $i++) {?>
                                       <li class="<?= $i == $_GET['page']? 'active':''?>"><a href="<?= $base_url?>/blog?page=<?= $i?>"><?= $i?></a></li>
                                   <?php }if(isset($_GET['page']) ){?>
                                    <li><a href="<?= $base_url?>/blog?page=<?= $_GET['page']< $page?  $_GET['page']+1: '0'?>"><i class="fas fa-angle-double-right"></i></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                       
                </div>
            </section>