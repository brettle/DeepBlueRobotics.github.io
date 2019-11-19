<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 07:39:44
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-desk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8498505315661b3c07f2a94-13631012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ac0307162cedaa55f375c708bed4541c68a765' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-desk.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8498505315661b3c07f2a94-13631012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desktab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661b3c07f9c40_57232034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661b3c07f9c40_57232034')) {function content_5661b3c07f9c40_57232034($_smarty_tpl) {?><div class="tabswrapper">
<ul class="tabs">
		<li class="desk"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['desktab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="index.php"></a></li>
	</ul>
</div><?php }} ?>