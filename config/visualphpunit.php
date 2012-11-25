<?php defined('SYSPATH') or die('No direct script access.');

return array(

	// media directories, copy assets from ui/
	'css_dir' => 'phpunit/media/',
	'js_dir' => 'phpunit/media/',
	'img_dir' => 'phpunit/media/',
	
	'display_errors' => 1,
	'pear_path' =>"C:\\Documents and Settings\\admin\\Application Data\\PEAR\\pear",//'/usr/share/pear',
	'base_install' => MODPATH . 'visualphpunit/vendor/VisualPHPUnit',
	'test_directory' => MODPATH . 'visualphpunit/vendor/VisualPHPUnit/tests',//APPPATH . '/tests/classes/',
	'create_snapshots' => false,
	'snapshot_directory' => MODPATH . 'visualphpunit/vendor/VisualPHPUnit/history/',
	'sandbox_errors' => false,
	'sandbox_filename' => MODPATH . 'visualphpunit/vendor/VisualPHPUnit/errors/errors.tmp',
	'sandbox_ignore' => 'E_STRICT',
	'store_statistics' => false,
	
	// database settings
	'database_name' => 'vpu',
	'database_host' => 'localhost',
	'database_user' => 'root',
	'database_pass' => 'root',
	
	// array of bootstrap files to load
	'bootstraps' => array(),
	
);
