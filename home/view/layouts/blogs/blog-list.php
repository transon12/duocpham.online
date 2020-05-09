<?php 

	if(isset($item_detail)&&!empty($item_detail)){
		echo '<div class="central-meta item">
				<div class="user-post">
					<div class="friend-info">
						<div class="post-meta">
							<h1 class="blog-title" style="color:#fb0000;">'.$item_detail['title'].'</h1>
							<div class="we-video-info">
								<ul>
									<li><i class="fa fa-user"></i> cooftech.vn</li>
									<li><i class="fa fa-clock-o"></i> '.str_timeBlog($item_detail['date_create']).'</li>
								</ul>
								<div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <div class="pull-left">
	                                        <div class="a2a_kit a2a_kit_size_22 a2a_default_style" data-a2a-url="'.$base_url.'/'.$item_detail['title_url'].'-'.$item_detail['code'].'.html"> 
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
							<div class="text-content">'.$item_detail['content'].'</div><hr/>
							<div class="we-video-info">
								<p><strong>Tags</strong>: '.str_listTags($item_detail['tags'],$base_url.'/tags').' </p>
							</div>
						</div>
					</div>
				</div>
			</div>';
	}

	if(isset($item)&&!empty($item)){
		foreach($item as $k=>$v){
			if($k==2){
				echo '<div class="post-image"><a href="https://cooftech.com"><img src="'.$base_img.'/upload/banner/cftads.png" alt="cooftech"></a></div>';
			}
			if(!empty($v['video'])){
				echo '<div class="central-meta item">
				<div class="user-post">
					<div class="friend-info">
						<div class="post-meta">
							<iframe width="" height="285" src="https://www.youtube.com/embed/'.$v['video'].'" frameborder="0" allowfullscreen></iframe>
							<h4 class="header-title"><a class="blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['title'].'</a></h4>
							<div class="description">
								<p><a class="blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['description'].'</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}else{
			if($k===0&&empty($item_detail)){
				echo '<div class="central-meta item">
				<div class="user-post">
					<div class="friend-info">
						<div class="post-meta">
							<img src="'.$base_img.'/upload/blogs/'.$v['avatar'].'" alt="">
							<h4 class="header-title"><a class="header-title-1 blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['title'].'</a></h4>
							<div class="description">
								<p class="description"><a class="blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['description'].'</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}else{
			echo '<div class="central-meta item">
		<div class="user-post">
			<div class="post-meta">
					<h4 class="header-title"><a class="header-title-2 blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['title'].'</a></h4>
					<div class="linked-image align-left">
						<a class="blog-ilink" title="" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'"><img alt="" src="'.$base_img.'/upload/blogs/'.$v['avatar'].'"></a>
					</div>
					<div class="detail">
						<p><a class="blog-ilink" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.str_trimText($v['description'],COUNT_DESCRIPTION).'</a></p>
					</div>
				</div>
		</div>
	</div>';
		}
		}

		}
	}
	?>