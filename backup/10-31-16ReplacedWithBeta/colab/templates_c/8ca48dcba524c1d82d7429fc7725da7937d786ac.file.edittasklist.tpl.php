<?php /* Smarty version Smarty-3.1.13, created on 2016-09-25 22:56:58
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/edittasklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41291821857e8b8aa7f8344-13072777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca48dcba524c1d82d7429fc7725da7937d786ac' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/edittasklist.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41291821857e8b8aa7f8344-13072777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'projectname' => 0,
    'settings' => 0,
    'tasklist' => 0,
    'milestones' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57e8b8aa8814f1_03571262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8b8aa8814f1_03571262')) {function content_57e8b8aa8814f1_03571262($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="tasks">
			
			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['projectname']->value;?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,25,"...",true);?>

				</a>
				<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('tasklists');?>

				</a>
				<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasklist']->value['name'],55,"...",true);?>

				</a>
			</div>
			
			<h1 class="second">
				<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" />
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasklist']->value['name'],30,"...",true);?>

			</h1>
			
<?php }?>
			
			<div class="block_in_wrapper">
				
				<h2><?php echo $_smarty_tpl->getConfigVariable('edittasklist');?>
</h2>
				
				<form novalidate class="main" method="post" action="managetasklist.php?action=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this);"  >
					<fieldset>
						
						<div class="row">
							<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['name'];?>
" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
						</div>
						
						<div class="row">
							<label for="desc"><?php echo $_smarty_tpl->getConfigVariable('description');?>
:</label>
							<div class="editor">
								<textarea name="desc" id="desc" rows="3" cols="1"><?php echo $_smarty_tpl->tpl_vars['tasklist']->value['desc'];?>
</textarea>
							</div>
						</div>
						
						<div class="row">
							<label for="milestone"><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
:</label>
							<select name="milestone" id="milestone">
								<option value="0"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['name'] = 'stone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['tasklist']->value['milestone']==$_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID']){?> selected="selected" <?php }?> >
										<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'];?>

									</option>
								<?php endfor; endif; ?>
							</select>
						</div>
						
						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
							<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_tasklist','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
						</div>
						
					</fieldset>
				</form>
				
			</div> 
			
<?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>
			
			<div class="content-spacer"></div>
			
		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?><?php }} ?>