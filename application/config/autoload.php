<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array(APPPATH.'third_party/ion_auth');
$autoload['libraries'] = array('form_validation', 'ion_auth', 'template', 'common/mobile_detect');
$autoload['helper'] = array('array', 'language', 'url');
$autoload['config'] = array('common/dp_config', 'common/dp_language');
$autoload['language'] = array();
$autoload['model'] = array('common/prefs_model');
