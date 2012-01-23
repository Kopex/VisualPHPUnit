<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * VisualPHPUnit controller
 *
 * @package			VisualPHPUnit
 * @author			Justin Hernandez <justin@transphorm.com>
 */
class Controller_PHPUnit extends Controller {

	
	public function before()
	{
		parent::before();
		
		if ( Kohana::$environment === Kohana::PRODUCTION)
			die();
	}
	
	public function action_index()
	{
		require Kohana::find_file('vendor/VisualPHPUnit', 'index');
		die();
	}
	
	public function action_filetree()
	{
		require Kohana::find_file('vendor/VisualPHPUnit/ui/js/jqueryFileTree/connectors', 'jqueryFileTree');
		die();
	}
	
}