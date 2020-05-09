<?php if (isset($detail) && !empty($detail)) {?>

 <div class="post-meta mb-15">
    <span><i class="far fa-calendar-check"></i> <?= date('d-m-Y',time($detail['date_create']))?> </span>
</div>
<h1 class="blog-title">
   <?= $detail['title']?>
</h1>
 <div class="post-text mb-20" id="blogdetail">
    <?= $detail['content']?>
</div>
<div class="row mt-50">
    <div class="col-xl-8 col-lg-8 col-md-8 mb-15">
        <div class="blog-post-tag">
            <span>Thẻ tags liên quan</span>
            <?php if (isset($detail['tags']) &&!empty($detail['tags'])) {
               $tags= explode(',',$detail['tags']);
               foreach ($tags as $val) {?>
                   <a href="<?=$base_url?>/blogs/search?keyword=<?=$val?>" title="" class="pt-1"><?=$val?></a> 
               <?php }
            }?>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 mb-15">
        <div class="blog-share-icon text-left text-md-right">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=506546826736096&autoLogAppEvents=1"></script>
            <div class="fb-share-button" data-href="" data-layout="button" data-size="large "><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
        </div>
    </div>
</div>

<?php }?>