  <div class="widget mb-50">
<div class="widget-title-box mb-40">
    <span class="animate-border"></span>
    <h3 class="widget-title">Bài viết phổ biến</h3>
</div>
<ul class="recent-posts">
    <?php if(isset($list_popular) && !empty($list_popular))
        foreach ($list_popular as $val) {?>
    <li>
        <div class="widget-posts-image">
            <a href="<?=$base_url?>/blogdetails/<?=url_link_encode($val['title_url'],$val['code'])?>"><img src="<?=$base_url?>/upload/blogs/<?=$val['avatar']?>" alt="" style="height: auto"></a>
        </div>
        <div class="widget-posts-body" style="padding-top: 2px">
            <div class="widget-posts-meta"><i style="color: #ff5b5b" class="far fa-calendar-check"></i>&nbsp;<?= date('d-m-Y',time($val['date_create']))?> </div>
            <h6 class="widget-posts-title"><a href="<?=$base_url?>/blogdetails/<?=url_link_encode($val['title_url'],$val['code'])?>"><?= $val['title']?>.</a></h6>
        </div>
    </li>
<?php }?>
</ul>
</div>