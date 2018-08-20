<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = function() {
	$CI =& get_instance();
	$appConfigOptions = $CI->AppConfigModel->get_configurations();
	if($appConfigOptions) {
		
		foreach($appConfigOptions as $appConfigOption)
		{
			$CI->config->set_item($appConfigOption->option_name,$appConfigOption->option_value);
		}
	}
};