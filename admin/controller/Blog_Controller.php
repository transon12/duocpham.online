<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Blog_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','upload']);
		$this->_config->load('config');
		$this->_model->load('blog');
		$this->_model->load('login');
		ss_sessionStartNow();
		$this->_ss_name = $this->_config->item('csrf_token_name');
		$this->_url = $this->_config->item('base_url');
		if(isset($_SESSION[$this->_ss_name]['token'])){
			$this->_user = $this->_model->login->get_userInfoToken($_SESSION[$this->_ss_name]['token']);
			if(empty($this->_user)){
				header('Location:'.$this->_url['web'].'/adw-login');
			}
		}else{
			header('Location:'.$this->_url['web'].'/adw-login');
		}
	}

	public function listAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['item'] = $this->_model->blog->get_listBlog(); //print_r($data['item']); die;
		$this->_view->load('blog-list',$data);
	}

	public function addAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['blog_type'] = $this->_model->blog->get_blog_type();
		$data['blog_category'] = $this->_model->blog->get_blog_category();
		$data['language'] = $this->_model->blog->get_language();

		$data['_noti'] = array(
					'code'=>200,
					'error'=>''
				);

		if(isset($_POST['blog-btn'])&&!empty($_POST['blog-btn'])){
			usleep(rand(200000,1000000));
			$cat = isset($_POST['blog-category']) ? str_explodeCategory($_POST['blog-category']) : array() ;
			$is_settime = isset($_POST['blog-settime-check'])&&$_POST['blog-settime-check']==1 ? $_POST['blog-settime-check'] : 0; //echo $is_settime; die;
			$data['_data'] = array(
				'bind_param'=>'iisissssssssisiiisi',
				'code'=>str_createCodeBlog(),
				'cat_id'=>isset($cat[0]) ? $cat[0] : '',
				'cat_code'=>isset($cat[1]) ? $cat[1] : '',
				'website'=>1,
				'avatar'=>isset($_POST['blog-avatar-name']) ? str_checkString($_POST['blog-avatar-name']) : '',
				'avatar_alt'=>isset($_POST['blog-avatar-alt']) ? str_checkString($_POST['blog-avatar-alt']) : '',
				'video'=>isset($_POST['blog-video']) ? str_checkString($_POST['blog-video']) : '',
				'title'=>isset($_POST['blog-title']) ? str_checkString($_POST['blog-title']) : '',
				'title_url'=>isset($_POST['blog-title-url']) ? str_checkString($_POST['blog-title-url']) : '',
				'description'=>isset($_POST['blog-description']) ? str_checkString($_POST['blog-description']) : '',
				'tags'=>isset($_POST['blog-tags']) ? str_checkString($_POST['blog-tags']) : '',
				'keywords'=>isset($_POST['blog-keywords']) ? str_checkString($_POST['blog-keywords']) : '',
				'views'=>isset($_POST['blog-views']) ? str_checkString($_POST['blog-views']) : '',
				'author'=>isset($_POST['blog-author']) ? str_checkString($_POST['blog-author']) : '',
				'stick'=>isset($_POST['blog-stick']) ? str_checkString($_POST['blog-stick']) : '',
				'language'=>isset($_POST['blog-language']) ? str_checkString($_POST['blog-language']) : '',
				'blog_type_id'=>isset($_POST['blog-type']) ? str_checkString($_POST['blog-type']) : '',
				'date_create'=>isset($_POST['blog-date']) ? str_checkString($_POST['blog-date']).' '.date('H:i:s',time()) : '',
				'active'=> $is_settime==0 ? 1 : -1
			);

			$data['_content'] = array(
				'bind_param'=>'iis',
				'blog_id'=>0,
				'blog_code'=>$data['_data']['code'],
				'content'=>isset($_POST['blog-content']) ? $_POST['blog-content'] : '',
			);

			$data['_settime'] = array(
				'bind_param'=>'is',
				'blog_code'=>$data['_data']['code'],
				'date_settime'=>isset($_POST['blog-settime-day']) ? str_checkString($_POST['blog-settime-day'].' '.$_POST['blog-settime-hour']) : '',
			); //print_r($data['_settime']); die;
			//$this->_model->blog->insert_blog_settime($data['_settime']); die;

			if(!empty($data['_data']['title'])&&!empty($data['_content']['content'])&&!empty($data['_data']['tags'])&&!empty($data['_data']['title_url'])&&!empty($data['_data']['description'])&&!empty($data['_data']['keywords'])){

				if(isset($_FILES['blog-avatar']['name'])&&!empty($_FILES['blog-avatar']['name'])){ //print_r($_FILES['blog-avatar']); die;
					$upload = up_upLoadFile($_FILES['blog-avatar'],'upload/blogs/',['jpg','jpeg','png'],$data['_data']['avatar'],''); 
					//print_r($upload); die;
					if($upload['code']==200){
						$data['_data']['avatar'] = $upload['name'];
						$blog_id = $this->_model->blog->insert_blog_list($data['_data']); //print_r($blog_id); die;
						if(!empty($blog_id)){
							$data['_content']['blog_id'] = $blog_id;
							$this->_model->blog->insert_blog_content($data['_content']);

							if($is_settime==1){
								$this->_model->blog->insert_blog_settime($data['_settime']);
							}

							$data['_data'] = array();

							$data['_content'] = array();

							$data['_noti'] = array(
								'code'=>200,
								'error'=>'Bạn đã đăng bài thành công '
							);
						}else{
							$data['_noti'] = array(
								'code'=>404,
								'error'=>'Upload dữ liệu lỗi'
							);
						}
					}else{
						$data['_noti'] = array(
							'code'=>404,
							'error'=>'Ảnh upload lỗi. '.$upload['msg']
						);
					}
				}

			}else{
				$data['_noti'] = array(
					'code'=>404,
					'error'=>'Bạn chưa điền đầy đủ dữ liệu'
				);
			}

				
			
		}

		$data['_noti'] = json_encode($data['_noti'],JSON_UNESCAPED_UNICODE);

		$this->_view->load('blog-add',$data);
	}

	public function editAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['blog_type'] = $this->_model->blog->get_blog_type();
		$data['blog_category'] = $this->_model->blog->get_blog_category();
		$data['language'] = $this->_model->blog->get_language();
		$blog_code = isset($_GET['code']) ? str_checkString($_GET['code']) : ''; //echo $blog_code;
		$data['_noti'] = array(
					'code'=>200,
					'error'=>''
				);
		if(isset($_POST['blog-btn'])&&!empty($_POST['blog-btn'])&&!empty($blog_code)){
			usleep(rand(200000,1000000));
			$cat = isset($_POST['blog-category']) ? str_explodeCategory($_POST['blog-category']) : array() ;
			$data['_data'] = array(
				'bind_param'=>'isssssssisiiii',
				'cat_id'=>isset($cat[0]) ? $cat[0] : '',
				'cat_code'=>isset($cat[1]) ? $cat[1] : '',
				'video'=>isset($_POST['blog-video']) ? str_checkString($_POST['blog-video']) : '',
				'title'=>isset($_POST['blog-title']) ? str_checkString($_POST['blog-title']) : '',
				'title_url'=>isset($_POST['blog-title-url']) ? str_checkString($_POST['blog-title-url']) : '',
				'description'=>isset($_POST['blog-description']) ? str_checkString($_POST['blog-description']) : '',
				'tags'=>isset($_POST['blog-tags']) ? str_checkString($_POST['blog-tags']) : '',
				'keywords'=>isset($_POST['blog-keywords']) ? str_checkString($_POST['blog-keywords']) : '',
				'views'=>isset($_POST['blog-views']) ? str_checkString($_POST['blog-views']) : '',
				'author'=>isset($_POST['blog-author']) ? str_checkString($_POST['blog-author']) : '',
				'stick'=>isset($_POST['blog-stick']) ? str_checkString($_POST['blog-stick']) : '',
				'language'=>isset($_POST['blog-language']) ? str_checkString($_POST['blog-language']) : '',
				'blog_type_id'=>isset($_POST['blog-type']) ? str_checkString($_POST['blog-type']) : ''
			); //print_r($data['_data']); die;

			$data['_content'] = array(
				'bind_param'=>'si',
				'content'=>isset($_POST['blog-content']) ? $_POST['blog-content'] : '',
			);

			if(!empty($data['_data']['title'])&&!empty($data['_content']['content'])&&!empty($data['_data']['tags'])&&!empty($data['_data']['title_url'])&&!empty($data['_data']['description'])&&!empty($data['_data']['keywords'])){
				$this->_model->blog->update_blog_list($data['_data'],['where'=>'code=?','param'=>[$blog_code]]);
				$this->_model->blog->update_blog_content($data['_content'],['where'=>'blog_code=?','param'=>[$blog_code]]); //die;

				$data['_noti'] = array(
								'code'=>200,
								'error'=>'Bạn đã update bài thành công '
							);

			}else{
				$data['_noti'] = array(
					'code'=>404,
					'error'=>'Bạn chưa điền đầy đủ dữ liệu'
				);
			}

			$data['_noti'] = json_encode($data['_noti'],JSON_UNESCAPED_UNICODE);

			$this->_view->load('blog-edit',$data);
		}else if(!empty($blog_code)){
			$data['_data'] = $this->_model->blog->get_blogInfo($blog_code); //print_r($data['_data']); die;

			if(!empty($data['_data'])){
				$data['_content'] = array(
					'bind_param'=>'s',
					'content'=> isset($data['_data']['content']) ? $data['_data']['content'] : '' ,
				);

				$data['_noti'] = json_encode($data['_noti'],JSON_UNESCAPED_UNICODE);

				$this->_view->load('blog-edit',$data);
			}else{
				header('Location:'.$data['base_url']['web'].'/admin');
			}
		}else{
			header('Location:'.$data['base_url']['web'].'/admin');
		}

		
	}

	public function connectorAction(){
		$base_url = $this->_config->item('base_url'); //echo $data['base_url']; die;
		require_once __DIR__ . '/vendor/autoload.php';

		//use CKSource\CKFinder\CKFinder;

		$ckfinder = new CKFinder(__DIR__ . '/../../../config.php');

		$ckfinder->run();
	}

	public function removeAction(){
		$code = isset($_POST['code']) ? str_checkString($_POST['code']) : 0;
		if(!empty($code)){
			$this->_model->blog->remove_blog($code);
			echo json_encode(array(
				'code'=>200,
				'msg'=>'Bạn đã xóa thành công '
			));
		}else{
			echo json_encode(array(
				'code'=>404,
				'msg'=>'Lỗi, vui lòng kiểm tra lại '
			));
		}
	}

	public function settimeAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['item'] = $this->_model->blog->get_listBlogSettime(); //print_r($data['item']); die;
		$this->_view->load('blog-settime',$data);
	}

	public function settimeUpAction(){
		$code = isset($_POST['code']) ? str_checkString($_POST['code']) : 0; //echo $code; die;
		if(!empty($code)){
			$this->_model->blog->update_blog_up($code);
			echo json_encode(array(
				'code'=>200,
				'msg'=>'Bạn đã up thành công '
			));
		}else{
			echo json_encode(array(
				'code'=>404,
				'msg'=>'Lỗi, vui lòng kiểm tra lại '
			));
		}
	}

	public function settimeRemoveAction(){
		$code = isset($_POST['code']) ? str_checkString($_POST['code']) : 0;
		if(!empty($code)){
			$this->_model->blog->remove_blog_up($code);
			echo json_encode(array(
				'code'=>200,
				'msg'=>'Bạn đã xóa thành công '
			));
		}else{
			echo json_encode(array(
				'code'=>404,
				'msg'=>'Lỗi, vui lòng kiểm tra lại '
			));
		}
	}

	public function editAvatarAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$input = array(
			'avatar_alt'=>str_checkString($_POST['blog-avatar_alt'])
		);
		$result = array(
			'code'=>404,
			'error'=>'',
			'avatar'=>''
		);
		$blog_code = isset($_POST['blog-code']) ? str_checkString($_POST['blog-code']) : '';
		if($input['avatar_alt']&&!empty($blog_code)){
			if(isset($_FILES['blog-file']['name'])&&!empty($_FILES['blog-file']['name'])){ //print_r($_FILES['blog-file']); die;
				$img_old = $_POST['blog-avatar'];
				$upload = up_upLoadFile1($_FILES['blog-file'],'upload/blogs/',['jpg','jpeg','png'],explode('-',$img_old)[0],$img_old); 
				//print_r($upload); die;
				if($upload['code']==200){
					$input['avatar'] = $upload['name'];
					$input['bind_param'] = 'ssi';
					$result['avatar'] = $input['avatar'];
				}else{
					$result['error'] = 'Ảnh upload lỗi. '.$upload['msg'];
				}
			}else{
				$input['bind_param'] = 'si';
			}
			$result['code'] = 200;
			$result['error'] = 'Thay đổi thành công';
			$this->_model->blog->update_blog_list($input,['where'=>'code=?','param'=>[$blog_code]]);
		}else{
			$result['error'] = 'Dữ liệu thiếu';
		}

		echo  json_encode($result,JSON_UNESCAPED_UNICODE); die;

	}

	public function shareAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$data['blog_code'] = $_GET['code'];

		$data['item'] = $this->_model->blog->get_list_website_active();

		$this->_modal->load('blog-share',$data);
	}

	public function addShareAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$input = array(
				'bind_param'=>'iiis',
				'code'=>str_createCode17(22),
				'blog_code'=>$_POST['blog-code'],
				'website_code'=>$_POST['web-code'],
				'date_create'=>date('Y-m-d H:i:s',time())
			); //print_r($input);
		if(!empty($input['website_code'])&&!empty($input['blog_code'])){
			$rs = $this->_model->blog->get_blog_share_by_2code($input['blog_code'],$input['website_code']);
			$blog = $this->_model->blog->get_blogInfoList($input['blog_code']);
			if(!empty($rs)){
				echo json_encode(array(
					'code'=>200,
					'error'=>'Bạn đã share trang này',
					'web'=>$input['website_code'],
					'data'=>$data['base_url']['web'].'/'.$blog['title_url'].'-'.$blog['code'].'.html?s='.$rs['code']
				),JSON_UNESCAPED_UNICODE); die;
			}else{
				$this->_model->blog->insert_share_blog($input);
				echo json_encode(array(
					'code'=>200,
					'error'=>'Bạn đã share thành công',
					'web'=>$input['website_code'],
					'data'=>$data['base_url']['web'].'/'.$blog['title_url'].'-'.$blog['code'].'.html?s='.$input['code']
				),JSON_UNESCAPED_UNICODE); die;
				
			}
				
		}else{
			echo json_encode(array(
				'code'=>404,
				'error'=>'Bạn đã share trên trang này ',
				'data'=>$input['code']
			),JSON_UNESCAPED_UNICODE); die;
		}
	}

	function editShareAction(){
		$input = array(
				'bind_param'=>'si',
				'date_settime'=>isset($_POST['blog-settime-day']) ? str_checkString($_POST['blog-settime-day'].' '.$_POST['blog-settime-hour']) : '',
			); //print_r($input);
		$blog_code = $_POST['blog-settime-code'];
		if(!empty($input['date_settime'])){
			$this->_model->blog->update_blog_settime($input,['where'=>'blog_code=?','param'=>[$blog_code]]);

			echo json_encode(array(
				'code'=>200,
				'error'=>'Bạn đã thay đổi thành công ',
				'data'=>$input['date_settime'],
				'id'=>$blog_code
			),JSON_UNESCAPED_UNICODE); die;
		}else{
			echo json_encode(array(
				'code'=>404,
				'error'=>'Lỗi, vui lòng kiểm tra lại ',
				'data'=>''
			),JSON_UNESCAPED_UNICODE); die;
		}
	}
}