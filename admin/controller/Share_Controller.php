<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Share_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password']);
		$this->_config->load('config');
		$this->_model->load('share');
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

	public function websiteAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['item'] = $this->_model->share->get_list_website();
		$this->_view->load('share-website',$data);
	}

	public function blogAction(){
		$data['base_url'] = $this->_config->item('base_url');  //print_r($data['base_url']) ;
		$data['item'] = $this->_model->share->get_list_blog_share(); //print_r($data['item']); die;
		$this->_view->load('share-blog',$data);
	}

	public function addValidateAction(){
		$input = array(
			'bind_param'=>'iss',
			'code'=>str_createCode17(21),
			'domain'=>$_POST['web-url'],
			'date_create'=>date('Y-m-d H:i:s',time())
		);

		if(!empty($input['domain'])){
			$this->_model->share->insert_share_website($input);

			echo json_encode(array(
				'code'=>200,
				'alias'=>$input['code'],
				'domain'=>$input['domain']
			)); die;
		}
	}
}