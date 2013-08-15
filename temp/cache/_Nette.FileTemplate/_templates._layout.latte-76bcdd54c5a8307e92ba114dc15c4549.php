<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.77134200 1376602998";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/Users/wise/Documents/workspace/web/daty/app/templates/@layout.latte";i:2;i:1376602997;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: /Users/wise/Documents/workspace/web/daty/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 't6e6041nct')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb0e61a7a9b6_head')) { function _lb0e61a7a9b6_head($_l, $_args) { extract($_args)
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

	<title>Daty test app</title>

	<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap_datagrid.css" />
	<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" />

	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />

	<script type="text/javascript" language="javascript" src="<?php echo htmlSpecialChars($basePath) ?>/dataTable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo htmlSpecialChars($basePath) ?>/dataTable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/DT_bootstrap.js"></script>
	<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>

<div class="container">

	<div class="masthead">
		<h3 class="muted">Daty test application</h3>
	</div>

<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>

	<hr />

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>

	<hr />

	<div class="footer">
		<p>&copy; Jakub Kratina 2013</p>
	</div>

</div> <!-- /container -->

</body>
</html>
