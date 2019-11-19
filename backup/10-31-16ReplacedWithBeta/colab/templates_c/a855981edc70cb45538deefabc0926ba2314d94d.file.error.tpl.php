<?php /* Smarty version Smarty-3.1.13, created on 2015-12-18 14:17:46
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14295647985674860ae97cb1-67257893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a855981edc70cb45538deefabc0926ba2314d94d' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/error.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14295647985674860ae97cb1-67257893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errortext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5674860b3218c8_76308855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674860b3218c8_76308855')) {function content_5674860b3218c8_76308855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>


<div class="login">
	<div class="login-in">
		
        <div class="row">
        	<h1 style="color:red;"><?php echo $_smarty_tpl->getConfigVariable('error');?>
</h1>
            <div style="color:red;" class="row"><?php echo $_smarty_tpl->tpl_vars['errortext']->value;?>
</div>
        </div>
		
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>