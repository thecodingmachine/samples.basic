<?php
namespace Test\Controllers;
				
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Mvc\Splash\Controllers\Controller;
				
/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @Component
 */
class RootController extends Controller {
	
	/**
	 * The template used by the controller.
	 *
	 * @var TemplateInterface
	 */
	public $template;
		
	/**
	 * This object represents the block of main content of the web page.
	 *
	 * @var HtmlBlock
	 */
	public $content;
	
	/**
	 * Page displayed when a user arrives on your web application.
	 * 
	 * @URL /
	 */
	public function index() {
		$this->content->addFile(ROOT_PATH."src/views/root/index.php", $this);
		$this->template->toHtml();
	}
}