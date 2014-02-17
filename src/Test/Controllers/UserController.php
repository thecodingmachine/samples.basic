<?php
namespace Test\Controllers;
				
use Mouf\Html\Widgets\MessageService\Service\UserMessageInterface;

use Mouf\MVC\BCE\BCEFormInstance;

use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Mvc\Splash\Controllers\Controller;
				
/**
 * This is the controller in charge of managing the first page of the application.
 * 
 * @Component
 */
class UserController extends Controller {
	
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
	 * @var BCEFormInstance
	 */
	public $formInstance;
	
	/**
	 * User edition page.
	 * @param string $id the user's id (null for creation)
	 * @URL editUser
	 */
	public function editUser($id = null) {
		$this->formInstance->load($id);
		
		$this->content->addFile(ROOT_PATH."src/views/user/edit-user.php", $this);
		$this->template->toHtml();
	}
	
	/**
	 * Save the user into DB.
	 * @URL saveUser
	 */
	public function saveUser() {
		$id = $this->formInstance->save();

		if ($id){
			set_user_message("User has been saved", UserMessageInterface::SUCCESS);
		}else{
			set_user_message("An error occured while saving the user", UserMessageInterface::ERROR);
		}
		
		header("location:".ROOT_URL."editUser?id=".$id);
		return;
	}
}