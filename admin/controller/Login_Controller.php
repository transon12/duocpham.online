<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class Login_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();

	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password']);
		$this->_config->load('config');
		$this->_model->load('login');
		ss_sessionStartNow();

		$this->_ss_name = $this->_config->item('csrf_token_name');
		$this->_url = $this->_config->item('base_url');
		if(isset($_SESSION[$this->_ss_name]['token'])){
			$this->_user = $this->_model->login->get_userInfoToken($_SESSION[$this->_ss_name]['token']);
			if(!empty($this->_user)){
				header('Location:'.$this->_url['web']);
			}else{
				ss_unSession($this->_ss_name);
			}
		}
	}

	public function indexAction(){
		$data['base_url'] = $this->_url;  print_r($data['base_url']) ;
		$this->_view->load('zz-login',$data);
	}

	public function validateAction(){
		$data['base_url'] = $this->_config->item('base_url');

		usleep(rand(200000,2000000));

		$user_name = isset($_POST['login-username']) ? str_checkString($_POST['login-username']) : '';
		$password = isset($_POST['login-password']) ? md5($_POST['login-password']) : '';

		if(!empty($user_name) &&!empty($password) ){
			$info = $this->_model->login->get_userInfoLogin($user_name,$password);// print_r($info);die;
			if(!empty($info)){
				if($info['active']==1){
					$ss = array(
						'token'=>md5($info['id'].time().rand(100000,999999)),
					); //print_r($ss); die;
					ss_setSession($this->_ss_name,$ss);
					$input = array(
						'token'=>$ss['token'],
						'dateLogin'=>date('Y-m-d H:i:s',time())
					);
					$this->_model->login->update_login($input,'id='.$info[id]);
					header('location:'.$data['base_url']['web'].'/admin');
				}else{
					header('location:'.$data['base_url']['web'].'/adw-login#3-'.time());
				}
			}else{
				header('location:'.$data['base_url']['web'].'/adw-login#2-'.time());
			}

			//url_header($data['base_url']['web'].'/login#2-'.time());
		}else{
			header('location:'.$data['base_url']['web'].'/adw-login#1-'.time());
		}
	}

}