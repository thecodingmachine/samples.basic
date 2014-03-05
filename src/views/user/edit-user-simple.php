<?php
use Test\Controllers\UserController;
/* @var $this UserController */
?>
<h1>Edit User (quickstart form - role edition disabled)</h1>
<p>
This example is almost the simpliest one possible. It simply allows to edit or add a user's role, email and name.
As you see, the role dropdown has been generated, and the email field format is validated. Moreover, we added an
"editCondition" to the role field so you can see it working.
</p>
<blockquote>
	<ul>
		<li>Lines of code: 10</li>
		<li>Mouf configuration time: &lt; 5 minutes</li>
	</ul>
	:)
</blockquote>
<?php 
$this->simpleUserFormInstance->toHtml();