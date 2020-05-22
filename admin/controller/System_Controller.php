<?php 
if(!defined('PATH_SYSTEM')) die('Bad requied');
class System_Controller extends VV_Controller{
	protected $_ss_name = '';
	protected $_url = array();
	protected $_user = array();
	function __construct(){
		parent::__construct();
		$this->_helper->load(['session','string','url','password','upload']);
		$this->_config->load('config');
		$this->_model->load('system');
		$this->_model->load('login');
		ss_sessionStartNow();
		$this->_tokenName = $this->_config->item('csrf_token_name');
		$this->_baseUrl = $this->_config->item('base_url');
		if(!isset($_SESSION[$this->_tokenName]['token'])){
			header('Location:'.$this->_baseUrl['web'].'/adw-login');
		}
	}
	public function listAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$data['acti'] = 'system';
		$data['acti2'] = 'list-system';
		$data['list'] = $this->_model->system->get('tbl_banner');
		$this->_view->load('system-list',$data);
	}
	public function addAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$data['acti'] = 'system';
		$data['acti2'] = 'add-system';
		if (isset($_POST['name'])&&$_POST['name']!='') {
			$input = array(
				'name' => str_checkString($_POST['name']), 
			);
		}
		if (isset($_POST['type'])&&$_POST['type']!='') {
			$input['type'] = str_checkString($_POST['type']);
		}
		if (isset($_POST['active'])&&$_POST['active']!='') {
			$input['active'] = str_checkString($_POST['active']);
		}
		if (isset($_POST['position'])&&$_POST['position']!='') {
			$input['position'] = str_checkString($_POST['position']);
		}
		if(!empty($input['name'])&&!empty($_FILES['avatar']['name'])){
				$avatar = up_upLoadFile($_FILES['avatar'],'upload/system/',['png','jpg','jpeg']);
				if($avatar['code']==200){
					$input['avatar'] ='upload/system/'.$avatar['name'];
					$input['date_created'] = date('Y-m-d H:i:s',time());
					$this->_model->system->addnew('tbl_banner',$input);
					url_returnPage($this->_baseUrl['web'].'/adw-system/list','Thêm mới thành công');
					}else{
						url_returnPage($this->_baseUrl['web'].'/adw-system/add','Định dạng ảnh không đúng');
					}
				}
		$this->_view->load('system-add',$data);
	}
	public function editAction(){
		$data['base_url'] = $this->_config->item('base_url');
		$data['acti'] = 'system';
		$data['acti2'] = 'list-system';
		if (isset($_GET['id'])&&$_GET['id']!='') {
			$id = str_checkString($_GET['id']);
			$data['acc'] = $this->_model->system->getrow('tbl_banner',$id);
			if (isset($data['acc']['name'])) {
				$this->_view->load('system-edit',$data);
			}else{
				url_returnPage($this->_baseUrl['web'].'/adw-system/list','Không có mục này');
			}
		}
	}
	
	public function updatedAction(){
		if (isset($_GET['id'])&&$_GET['id']!='') {
			$id = str_checkString($_GET['id']);
			if (isset($_POST['name'])&&$_POST['name']!='') {
				$input = array(
					'name' =>  str_checkString($_POST['name']), 
				);
				if (isset($_POST['type'])&&$_POST['type']!='') {
					$input['type'] = str_checkString($_POST['type']);
				}
				if (isset($_POST['active'])&&$_POST['active']!='') {
					$input['active'] = str_checkString($_POST['active']);
				}
				if (isset($_POST['position'])&&$_POST['position']!='') {
					$input['position'] = str_checkString($_POST['position']);
				}
				if(!empty($input['name'])&&!empty($_FILES['avatar']['name'])){
				$avatar = up_upLoadFile($_FILES['avatar'],'upload/system/',['png','jpg','jpeg']);
					if($avatar['code']==200){
						$input['avatar'] = 'upload/system/'.$avatar['name'];
						$input['date_updated'] = date('Y-m-d H:i:s',time());
						$this->_model->system->up('tbl_banner',$input,'id="'.$id.'"');
						url_returnPage($this->_baseUrl['web'].'/adw-system/list','Sửa thành công');
					}else{
						url_returnPage($this->_baseUrl['web'].'/adw-system/edit?id='.$id,'Định dạng ảnh không đúng');
					}
				}else{
					$input['date_updated'] = date('Y-m-d H:i:s',time());
					$this->_model->system->up('tbl_banner',$input,'id="'.$id.'"');
					url_returnPage($this->_baseUrl['web'].'/adw-system/list','Sửa thành công');
				}
			}
		}
	}
	public function removeAction(){
		if (isset($_POST)&& $_POST !='') {
			$id = $_POST['id'];
			$this->_model->system->removed('tbl_banner','id="'.$id.'"');
			$stt = 200;
			echo json_encode($stt);
		}
	}
}