<?php 

	if(isset($item)&&!empty($item)){
		foreach($item as $k=>$v){
			if($k==2){
				echo '<div class="post-image"><a href="https://cooftech.com"><img src="'.$base_img.'/upload/banner/cftads.png" alt="cooftech"></a></div>';
			}
			echo '<div class="central-meta item">
					<div class="user-post">
						<div class="post-meta">
								<h4 class="header-title"><a class="header-title-2 " href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['title'].'</a></h4>
								<div class="linked-image align-left">
									<a class="" title="" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'"><img alt="" src="'.$base_img.'/upload/blogs/'.$v['avatar'].'"></a>
								</div>
								<div class="detail">
									<p><a class="" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.str_trimText($v['description'],COUNT_DESCRIPTION).'</a></p>
								</div>
							</div>
					</div>
				</div>';

		}
	}else{
		echo 'Không có kết quả nào phù hợp. Quay lại <a href="'.$base_url.'" >Trang chủ</a>
				<div class="post-image"><a href="https://cooftech.com"><img src="'.$base_img.'/upload/banner/cftads.png" alt="cooftech"></a></div>';
	}
	?>

