<?php 
define('PATH_SYSTEM',__DIR__.'/system');
define('PATH_APPLICATION',__DIR__.'/home');

require(PATH_SYSTEM.'/config/config.php');
include_once(PATH_SYSTEM.'/core/VV_Model.php');
include_once(PATH_SYSTEM.'/core/VV_Common.php');
// require_once 'Facebook/autoload.php';

VV_load();