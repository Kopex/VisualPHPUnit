<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package     VisualPHPUnit
 * @copyright   (c) 2012 Kopex
 */

 // Static file serving (CSS, JS, images)
Route::set('phpunit/media', 'phpunit/media(/<file>)', array('file' => '.+'))
  ->defaults(array(
    'controller' => 'phpunit',
    'action'     => 'media',
    'file'       => NULL,
  ));

