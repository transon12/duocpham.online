<?php 

public function connectorAction(){
		$base_url = $this->_config->item('base_url'); //echo $data['base_url']; die;
		require_once __DIR__ . '/vendor/autoload.php';

		//use CKSource\CKFinder\CKFinder;

		$ckfinder = new CKFinder(__DIR__ . '/../../../config.php');

		$ckfinder->run();
	}