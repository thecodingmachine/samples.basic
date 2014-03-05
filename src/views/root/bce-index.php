<?php /* @var $this Test\Controllers\RootController */ ?>
<h1>BCE <br/><small>assisted form generator</small></h1>

<p>
	First of all, you can read the documentation here:
	<a href="http://mouf-php.com/packages/mouf/mvc.bce">http://mouf-php.com/packages/mouf/mvc.bce</a>
</p>

<h2>What is BCE, and when should it be used ?</h2>

<p>BCE helps you to generate simple forms to handle your model. It is very efficient in Back-Office application CRUDs.</p>

<p><strong>BCE is a good choice when...</strong> you want to edit objects that reflect you database's tables,
and the behavior of the form you want to implement is simple (no field dependencies, nore enhanced 
display style).</p>

<p><strong>You should not use BCE when...</strong> you want to produce front end forms with multiple display modes,
or a complicted design.</p>

<h2>Live example</h2>
<p>These examples come from the documentation, and they are based on the following data model (which, as told previously is the reference for BCE):</p>
<p class="text-center"><img src="<?php echo ROOT_URL?>vendor/mouf/mvc.bce/doc/images/data-model.png" class="img-thumbnail"/></p>

<ul>
	<li><a href="<?php echo ROOT_URL?>editSimpleUser?id=1">Simple User Form</a></li>
	<li><a href="<?php echo ROOT_URL?>editUser?id=1">Advanced User Form</a></li>
</ul>