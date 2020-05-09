<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Contact_Controller extends VV_Controller{
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','web']);
		$this->_config->load('config');
		$this->_model->load('home');
		$this->_model->load('blog');
		ss_sessionStartNow();
		$this->_tokenName = $this->_config->item('csrf_token_name0');
		$this->_baseUrl = $this->_config->item('base_url');
		$this->_baseImg = $this->_config->item('base_img');
		$this->_baseLib = $this->_config->item('base_lib');
		

		if(!isset($_SESSION[$this->_tokenName]['token'])){
			
		}else{
			$this->_dataUser = $this->_model->login->get_dataUserByToken($_SESSION[$this->_tokenName]['token']);
			if(empty($this->_dataUser)){
				ss_unSession($this->_tokenName);
				url_returnPage($this->_baseUrl.'/login','Tài khoản của bạn đã bị đăng nhập trên 1 thiết bị khác');
			}
		 //echo '<pre>'; print_r($_SESSION[$this->_tokenName]['cart']['total']); die;
		}
	}

	public function aAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;
		$inpage= 12;
		$all=count($this->_model->blog->getallitemBlog());
		$data['page']= ceil($all/$inpage)+1;
		//print_r ($data['page']); die;
		if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page']>0){
			$from=((int)str_CheckString($_GET['page'])-1)*$inpage;
			$data['item'] = $this->_model->blog->getListBlog($from,$inpage);
		}else{
			$data['item'] = $this->_model->blog->getListBlog(0,$inpage);
		}
		$this->_view->load('blog',$data);
	}
	public function indexAction(){
		$data['base_url'] = $this->_config->item('base_url'); //echo $data['base_url'];
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');
		$this->_view->load('contact',$data);
	}
	public function aboutAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;];
		
		$this->_view->load('about',$data);
	}
	public function detailAction(){
		$data['base_url'] = $this->_config->item('base_url'); 
		$data['base_img'] = $this->_config->item('base_img');
		$data['base_lib'] = $this->_config->item('base_lib');//echo $data['base_lib']; die;
		if (isset($_GET) && !empty($_GET)) {
			$id= explode('-', $_GET['code'])[4];
			$idcheck= explode('-', $_GET['code'])[5];
			if(md5($id)==$idcheck){
				$data['item']= $this->_model->blog->getBlogDetail($id);//print_r ($id); die;
				$data['new']= $this->_model->blog->getListBlogid($data['item']['id_cate']);
				$data['categories']= $this->_model->blog->getcategoryBlogCount();
				$tags= $this->_model->blog->getcategoryKey(); 
				$tagWords= array();
				if(!empty($tags)){
					foreach ($tags as $key => $v) {
						if(!empty($v['tags'])){
							$tagWords=array_unique(array_merge($tagWords,explode(',',trim($v['tags'],','))));
						}
					}
				}
				 $data['tagWords']=array_values($tagWords);// echo '<pre>'; print_r ( $data['tagWords']); die;
				 $this->_view->load('blogDetail',$data);
				}else{
					url_returnPage($this->_baseUrl.'/blog','Truy cập sai hướng, vui lòng truy cập lại');
				}
			}

		}
		public function sendcontactAction(){
			if(isset($_POST) && !empty($_POST)){
				if (!empty($_POST['name'] && !empty($_POST['email']) && !empty($_POST['price'])) {
					$inputs= array(
						'name'=> str_CheckString($_POST['name']),
						'email'=> str_CheckString($_POST['email']),
						'content'=> str_CheckString($_POST['message']),
						'phone'=> str_CheckString($_POST['phone']),
						'price'=> str_CheckString($_POST['price']),
						'type_contact'=> 0,
						'status'=> 1,
						'date_created'=> date('Y-m-d H:i:m', time())
					);
					require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
			// $mail->SMTPDebug = 4;     
		   	$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = '120995transon@gmail.com';                 // SMTP username
			$mail->Password = '12345Transon';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			$mail->CharSet = 'UTF-8';
			$mail->setfrom('120995transon@gmail.com', 'appwe.vn');
			$mail->addAddress('lichpv1030@gmail.com');     // Add a recipient
			$mail->addreplyto('120995transon@gmail.com');
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Khách hàng yêu cầu tư vấn về App Mobile APPWE.VN ';
			$mail->Body    = '<div>
								<h3>Họ tên:</h3><strong style="color: red">'.$inputs['name'].'</strong>
								</div>
							<div>
								<h3>Số điện thoại:<strong style="color: red">'.$inputs['phone'].'</strong></h3>
							</div>
							<div>
								<h3>Nội dung yêu cầu:</h3><strong style="color: red">'.$inputs['content'].'</strong>
							</div> 
							<div>
								<h3>Mức giá đề xuất:</h3><strong style="color: red">'.$inputs['price'].'</strong>
							</div>';
			$mail->AltBody = 'Xác nhận';
			$mail->send();
			$this->_model->blog->insertContact($inputs);
			echo str_createJson(array(
				'code'=>200,
				'msg'=>'Chúng tôi sẽ liên hệ với bạn ngay...',
			)); die;
		} catch (Exception $e) {
			 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo; die;
		}
	}else{
		echo str_createJson(array(
			'code'=>404,
			'msg'=>'Vui lòng điền đây đủ thông tinâ',
		)); die;
	}
}
}




}