<div class="modal-header">
    <button type="button" class="close btn-modal-close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<h1 class="blog-title"><?=isset($blog_item['title']) ? $blog_item['title'] : '' ?></h1>
	<div class="we-video-info">
		<ul>
			<li><i class="fa fa-user"></i> Red.vn</li>
			<li><i class="fa fa-clock-o"></i> <?=isset($blog_item['date_create']) ? str_timeBlog($blog_item['date_create']) : ''?></li>
		</ul>
		<div class="post-share-options">
            <div class="post-share-inner clearfix">
                <div class="pull-left">
                    <div class="a2a_kit a2a_kit_size_22 a2a_default_style" data-a2a-url="<?=$base_urls['web']?>/<?=$blog_item['title_url']?>-<?=$blog_item['code']?>.html"> 
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_facebook_messenger"></a>
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="like-box"></div>
                </div>
            </div>
        </div>
	</div>
	<div class="clearfix"></div>
	<hr/>
	<div class="text-content"><?=isset($blog_item['content']) ? $blog_item['content'] : '' ?></div>
</div>
<script async src="<?=$base_urls['lib']?>/public/mylibs/js/a2a_share.js"></script>