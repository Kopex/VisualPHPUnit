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
	
    if ($this->request->action() === 'media')
    {
      // Do not template media files
      $this->auto_render = FALSE;
    }
    parent::before();
	}
	
	public function action_index()
	{
		require Kohana::find_file('vendor/VisualPHPUnit', 'index');
		die();
	}
  
  public function action_media()
  {
    // Get the file path from the request
    $file = $this->request->param('file');

    // Find the file extension
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    // Remove the extension from the filename
    $file = substr($file, 0, -(strlen($ext) + 1));

    if ($file = Kohana::find_file("vendor/VisualPHPUnit/ui/$ext", $file, $ext))
    {
      // Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
      $this->response->check_cache(sha1($this->request->uri()).filemtime($file), $this->request);
      
      // Send the file content as the response
      $this->response->body(file_get_contents($file));

      // Set the proper headers to allow caching
      $this->response->headers('content-type',  File::mime_by_ext($ext));
      $this->response->headers('last-modified', date('r', filemtime($file)));
    }
    else
    {
      // Return a 404 status
      $this->response->status(404);
    }
  }
	
  public function action_filetree()
	{
		require Kohana::find_file('vendor/VisualPHPUnit/ui/js/jqueryFileTree/connectors', 'jqueryFileTree');
		die();
	}
	
}