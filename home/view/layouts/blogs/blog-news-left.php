
<aside class="sidebar static left">
	<div class="widget">
		<h4 class="widget-title text-red" style="margin-bottom:5px;" >Danh mục</h4>
		<ul class="sidenav activitiez">
		<?php 
		if(isset($item_category)&&!empty($item_category)){
			foreach($item_category as $v){
				echo '<li class="'.($blog_category==$v['code'] ? 'li-active' : '' ).'" ><a href="'.$base_url.'/blogs/'.$v['code'].'">'.$v['name'].'</a></li>';
			}
		}
		?>
		  
		</ul>
	</div><!-- recent activites -->
	<div class="widget stick-widget">
		<h3 class="widget-title text-red">Tin mới nhất</h3>
		<ul class="followers">
			<?php 
			if(isset($item_me)&&!empty($item_me)){
				foreach($item_me as $v){
					echo '<li>
							<div class="linked-image align-left">
								<a title="" href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html"><img alt="" src="'.$base_url.'/'.$v['avatar'].'"></a>
							</div>
							<div class="detail">
								<h6><a href="'.$base_url.'/'.$v['title_url'].'-'.$v['code'].'.html">'.$v['title'].'</a></h6>
							</div>	
							
						</li>';
				}
			}
			?>
		</ul>
		<div class="banner medium-opacity bluesh">
			<a href="https://cooftech.com" target="_blank">
				<div class="bg-image" style="background-image: url(<?=$base_url?>/upload/banner/banner_qc.png)"></div>
				<div class="baner-top">
					<span><img alt="" src="<?=$base_url?>/upload/icon/logo_cft_fff.png"></span>
					<i class="fa fa-ellipsis-h"></i>
				</div>
				<div class="banermeta">
					<p class="home-title">
					  <span>Thiết kế ứng dụng</span>
					  <span> Mobile App</span>
					</p>
					<span><i class="fa fa-phone"></i> 0818 456 969</span><br>
					<span><i class="fa fa-home"></i> 233 Quan Hoa, Cầu Giấy, Hà Nội</span>
				</div>
			</a>
		</div>
	</div><!-- who's following -->
</aside>