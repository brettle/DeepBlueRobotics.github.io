<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:27:28
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55600325256615c8026bc22-60025209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff14477d974959994b9b95653651c6e16131222' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-admin.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55600325256615c8026bc22-60025209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projecttab' => 0,
    'customertab' => 0,
    'usertab' => 0,
    'settingstab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615c8029bd47_48988229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615c8029bd47_48988229')) {function content_56615c8029bd47_48988229($_smarty_tpl) {?><div class="tabswrapper">
	<ul class="tabs">
		<li class="projects"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['projecttab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
		<li class="customers"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['customertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>
		<li class="user"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
		<li class="system-settings"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settingstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
	</ul>
</div><?php }} ?>