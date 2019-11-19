<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:31:14
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/addfolder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177991889256615d623a3a73-67008578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3240fadfc6ff200e6a2879a2772efeb4f7bcef6e' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/addfolder.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177991889256615d623a3a73-67008578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'allfolders' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615d623c1a39_17726201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615d623c1a39_17726201')) {function content_56615d623c1a39_17726201($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('addfolder');?>
</h2>
	
	<form novalidate class="main" action="managefile.php?action=addfolder&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" method="post" onsubmit="return validateCompleteForm(this,'input_error');">
		<fieldset>
			
			<div class="row">
				<label for="folderparent"><?php echo $_smarty_tpl->getConfigVariable('parent');?>
:</label>
				<select name="folderparent" id="folderparent">
					<option value="0"><?php echo $_smarty_tpl->getConfigVariable('rootdir');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['name'] = 'fold';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allfolders']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['allfolders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['allfolders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['abspath'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="row">
				<label for="foldertitle"><?php echo $_smarty_tpl->getConfigVariable('title');?>
:</label>
				<input type="text" class="text" name="foldertitle" id="foldertitle" required="1" />
			</div>
			
			<input type="hidden" name="visible[]" value="" />
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				<button onclick="blindtoggle('form_folder');toggleClass('addfolder','addfolder-active','addfolder');toggleClass('add_folder_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
			</div>
			
		</fieldset>
	</form>
	
</div> 
<?php }} ?>