<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Home_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','web']);
		$this->_config->load('config');
		$this->_model->load('home');
		$this->_model->load('blogs');
		$this->_model->load('blog');
		ss_sessionStartNow();
		$this->_tokenName = $this->_config->item('csrf_token_name0');
		$this->_baseUrl = $this->_config->item('base_url');
		$this->_baseImg = $this->_config->item('base_img');
		$this->_baseLib = $this->_config->item('base_lib');
		
		

	}

	public function indexAction(){ //print_r($_GET); die;
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_lib'] = $this->_config->item('base_url'); 
		$code = isset($_GET['code']) ? str_checkString($_GET['code']) : '';
		if ($code === 'error') {
			$data['head'] = array(
				'title'=>'404 Lỗi tìm kiếm',
				'title_url'=>$data['base_url'],
				'description'=>'Công ty PHP cung cấp dịch vụ lập trình phần mềm,  thiết kế website chuẩn SEO theo yêu cầu hoặc mẫu sẵn giá rẻ Hà Nội. Chúng tôi có những gì bạn cần trên một ứng dụng.',
				'keywords'=>'Thiết kế website, lập trình phần mềm, phát triển phần mềm, thiết kế website chuẩn SEO, thiết kế website theo yêu cầu',
				'category'=>'Trang chủ',
				'url_code'=>$data['base_url'].'/error',
			) ;

		$this->_view->load('error',$data);
		}else{
			if(!empty($code)){

			$service = array(
				'thiet-ke-app'=>array(
					'url'=>'service',
					'head'=>array(
							'title'=>'Appwe - Phát triển ứng dụng',
							'title_url'=>$data['base_url'].'/thiet-ke-app',
							'description'=>'Cung cấp các giải pháp hoàn hảo trong thiết kế app, thiết kế phần cho doanh nghiệp, giúp thúc đẩy bán hàng, cải tiến hệ thống quản lý doanh nghiệp hiệu quả hơn. ',
							'keywords'=>'thiết kế ứng dụng, thiết kế app, ứng dụng di động, mobile app, thiết kế phần mềm, ứng dụng di động Android, ứng dụng di động iOS. ',
							'category'=>'thiet-ke-app',
							'url_code'=>'Thiet-ke-app',
						)
				),
				'thiet-ke-mobile-app'=>array(
					'url'=>'info',
					'head'=>array(
							'title'=>'Appwe - Thiết kế ứng dụng',
							'title_url'=>$data['base_url'].'/thiet-ke-mobile-app',
							'description'=>'Thiết kế ứng dụng chuyên nghiệp với hơn 100+ dự án lớn nhỏ. Quy trình thiết kế Appwe là sự kết hợp chặt chẽ các bước với sự tương tác giữa Appwe và khách hàng. Mang những công nghệ mới nhất đên với khách hàng',
							'keywords'=>'thiết kế ứng dụng, thiết kế app, ứng dụng di động, mobile app, thiết kế phần mềm, ứng dụng di động Android, ứng dụng di động iOS. ',
							'category'=>'thiet-ke-ung-dung',
							'url_code'=>'thiet-ke-ung-dung',
						)
				),
				'lien-he-thiet-ke-ung-dung'=>array(
					'url'=>'contact',
					'head'=>array(
							'title'=>'Appwe - Liên hệ thiêt kế ứng dụng',
							'title_url'=>$data['base_url'].'/lien-he-thiet-ke-ung-dung',
							'description'=>'Đừng để bạn quá tải trong công việc quản lý, hãy để công nghệ hỗ trợ bạn. Với thiết kế ứng dụng quản lý sẽ giúp bạn quản lý hiệu quả hiệu quả, chính xác và nhanh chóng hơn và tiết kiệm chi phí thuê nhân sự. '	,
							'keywords'=>'thiết kế ứng dụng, thiết kế app, ứng dụng di động, mobile app, thiết kế phần mềm, ứng dụng di động Android, ứng dụng di động iOS. ',
							'category'=>'Thiết kế website',
							'url_code'=>'thiet-ke-website',
						)
					),
				'blogs-thiet-ke-ung-dung'=>array(
					'url'=>'blogs',
					'head'=>array(
							'title'=>'Appwe - Thiết kế ứng dụng',
							'title_url'=>$data['base_url'].'/blogs-thiet-ke-ung-dung',
							'description'=>'Cooftech chuyên thiết kế web, app,design thương hiệu , cung cấp dịch vụ hạ tầng mạng, phát triển phân mềm hàng đầu Việt Nam',
							'keywords'=>'thiết kế ứng dụng, thiết kế app, ứng dụng di động, mobile app, thiết kế phần mềm, ứng dụng di động Android, ứng dụng di động iOS. ',
							'category'=>'Thiết kế website',
							'url_code'=>'thiet-ke-website',
						)
					)
				);
				if(array_key_exists($code,$service)){
								$data['head'] = $service[$code]['head'];
								$this->_view->load($service[$code]['url'],$data);
								
							}else{
									 $data['list_cat'] = $this->_model->blog->get_list_cat();
									 $data['lists'] = $this->_model->blog->get_list_blog_cate($code);
									if (isset($data['lists']) && !empty($data['lists'])) {
										
										$datas = $this->_model->blog->get_list_tag_cate($code);
										$datax = array_merge($datas);
										$keyword= array();
										 if(!empty($datas)){
										 	foreach ($datas as $key => $v) {
										 		if(!empty($v['tags'])){
										 			$keyword=array_unique(array_merge($keyword,explode(',',trim($v['tags'],','))));
										 		}
										 	}
										 }
										$data['tags'] = $keyword;

										$data['name'] = $this->_model->blog->get_name($code); //print_r($data['tags']); die;
										$limit = 8;
										$data['pages'] = ceil(count($data['lists']) / $limit);
										if (isset($_GET['pages']) && $_GET['pages'] != '' ? $cr_page = $_GET['pages'] : $cr_page = 1) {
											$start = ($cr_page - 1)*$limit;
											$data['blog_cate'] = $this->_model->blog->get_blog_cate($code,$start,$limit);
										}
										$data['head']=array(
											'title'=>'Appwe -'.$data['name']['name'],
											'title_url'=>$data['base_url'].'/'.$data['name']['code'],
											'description'=>$data['name']['description'].'chúng tôi sẽ mang những công nghệ mới nhất chia sẽ cho bạn.',
											'keywords'=> $data['name']['tags'],
											'category'=>$data['name']['name'],
											'url_code'=>$data['name']['code']
										);
										$this->_view->load('blog_category',$data);
									}else {

										$code = url_get_blogid($_GET['code']);
										$data['item'] = $this->_model->blog->get_details_code($code);
										if(!empty($data['item']) && isset($data['item'])){
											$keywords = $data['item']['tags'];
											$data['keyword'] = explode(',',$keywords);
											$data['bloghots']= $this->_model->home->Get_listblogHot();				

											$this->_view->load('blogDetail',$data);	
										}else{
											header('Location:'.$data['base_url'].'/error');
											
										}
												
									}
									
														
								
							}
						}else{
							//$data['service_list'] = $this->_model->data->get_list_service();  //print_r($data['service_list']); die;
							//$data['blog_list'] = $this->_model->home->get_list_blog_home();
							$data['head'] = array(
								'title'=>'APPWE.VN® | Thiết kế website chuẩn SEO theo yêu cầu ',
								'title_url'=>$data['base_url'],
								'description'=>'Công ty APPWE cung cấp dịch vụ lập trình phần mềm,  thiết kế website chuẩn SEO theo yêu cầu hoặc mẫu sẵn giá rẻ Hà Nội, Tự tin mang lại những gì bạn cần thể hiện trên ứng dụng',
								'keywords'=>'hiết kế website, lập trình phần mềm, phát triển phần mềm, thiết kế website chuẩn SEO, thiết kế website theo yêu cầu',
								'category'=>'Trang chủ',
								'url_code'=>'home',
							) ;
							$data['category']= $this->_model->home->Get_listCategory();
							$data['banner']	= $this->_model->home->Get_listBanner();
							$data['prodcutSort']= $this->_model->home->Get_listProduct1();
							$data['prodcutSort2']= $this->_model->home->Get_listProduct3();
							$data['group']= $this->_model->home->Get_listGroup1();
							$data['blogNew']= $this->_model->home->Get_listblog();
							$data['bloghots']= $this->_model->home->Get_listblogHot();				
							$this->_view->load('home',$data);
						}

					}
		}
		

}