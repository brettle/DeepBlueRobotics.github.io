<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:43:12
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/adduserproject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204441975956616030cac9e4-27952384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2788855f6ee3961edb4af1bcb45b722db79c78' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/adduserproject.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204441975956616030cac9e4-27952384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56616030cc7f61_67175694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56616030cc7f61_67175694')) {function content_56616030cc7f61_67175694($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<form novalidate class="main" method="post" action="manageproject.php?action=assign&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this);"  >
		<fieldset>
			
			<div class="row">
				<label for="addtheuser"><?php echo $_smarty_tpl->getConfigVariable('user');?>
</label>
				<select name="user" id="addtheuser" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('user');?>
">
					<option value="-1" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['usr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['name'] = 'usr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['usr']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usr']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usr']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				<button onclick="blindtoggle('form_member');toggleClass('addmember','add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>
	
</div> 
<?php }} ?>