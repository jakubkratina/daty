<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.95392800 1376603434";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"/Users/wise/Documents/workspace/web/daty/app/templates/Homepage/default.latte";i:2;i:1376603433;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: /Users/wise/Documents/workspace/web/daty/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w1yuqh4r49')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf379842c57_content')) { function _lbf379842c57_content($_l, $_args) { extract($_args)
;if ($debtors): ?>
		<table class="table table-striped table-bordered" id="example">
			<thead>
			<tr>
				<th>Okres</th>
				<th>ID/DOB</th>
				<th>Název/Jméno</th>
								<th>Dluh celkem</th>
			</tr>
			</thead>
			<tbody>
<?php $iterations = 0; foreach ($debtors as $debtor): ?>			<tr>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($debtor->district_name, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($debtor->pid, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($debtor->name, ENT_NOQUOTES) ?></td>
								<td><?php echo Nette\Templating\Helpers::escapeHtml($template->number($debtor->debt, 2, ',', ' '), ENT_NOQUOTES) ?></td>
			</tr>
<?php $iterations++; endforeach ?>

			</tbody>
		</table>
<?php endif ;
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

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 