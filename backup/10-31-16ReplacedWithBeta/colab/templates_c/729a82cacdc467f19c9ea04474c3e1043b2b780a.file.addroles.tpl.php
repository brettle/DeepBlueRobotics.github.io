<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:37:05
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/addroles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27452738256615ec1197be1-77167920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729a82cacdc467f19c9ea04474c3e1043b2b780a' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/addroles.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27452738256615ec1197be1-77167920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'myprojects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615ec1239734_19674047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615ec1239734_19674047')) {function content_56615ec1239734_19674047($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('addrole');?>
</h2>
	
	<form novalidate class="main" method="post" action="manageroles.php?action=addrole"  onsubmit="return validateCompleteForm(this);"  >
		<fieldset>
			
			<div class="row">
				<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
				<input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
			</div>
			
			<div class="clear_both_b"></div>
	        
	        <div class="row">
	        <label><?php echo $_smarty_tpl->getConfigVariable('permissions');?>
:</label>
				
	            <div class="row"><label></label>
	            	<label><?php echo $_smarty_tpl->getConfigVariable('projects');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_projects[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_projects[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_projects[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_projects[close]" /><?php echo $_smarty_tpl->getConfigVariable('close');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_milestones[view]" /><?php echo $_smarty_tpl->getConfigVariable('view');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_milestones[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_milestones[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_milestones[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_milestones[close]" /><?php echo $_smarty_tpl->getConfigVariable('close');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('tasks');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_tasks[view]" /><?php echo $_smarty_tpl->getConfigVariable('view');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_tasks[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_tasks[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_tasks[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_tasks[close]" /><?php echo $_smarty_tpl->getConfigVariable('close');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('messages');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_messages[view]" /><?php echo $_smarty_tpl->getConfigVariable('view');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_messages[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_messages[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_messages[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_messages[close]" /><?php echo $_smarty_tpl->getConfigVariable('answer');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('files');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_files[del]" /><?php echo $_smarty_tpl->getConfigVariable('view');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_files[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_files[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_files[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_timetracker[view]" /><?php echo $_smarty_tpl->getConfigVariable('view');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_timetracker[read]" /><?php echo $_smarty_tpl->getConfigVariable('permissionread');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_timetracker[add]" /><?php echo $_smarty_tpl->getConfigVariable('add');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_timetracker[edit]" /><?php echo $_smarty_tpl->getConfigVariable('edit');?>

	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_timetracker[del]" /><?php echo $_smarty_tpl->getConfigVariable('delete');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('chat');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_chat[add]" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['chat']['add']){?> checked <?php }?> /><?php echo $_smarty_tpl->getConfigVariable('chat');?>

	            </div>
				
	            <div class="row"><label></label>
					<label><?php echo $_smarty_tpl->getConfigVariable('admin');?>
</label>
	            </div>
	            <div class="row"><label></label>
					<input type="checkbox" class="checkbox" value="1" name="permissions_admin[add]" /><?php echo $_smarty_tpl->getConfigVariable('administration');?>

	            </div>
				
	        </div>
			
		    <div class="clear_both_b"></div>
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['myprojects']->value)===null||$tmp==='' ? '' : $tmp)=="1"){?>
				<button onclick="blindtoggle('form_addmyroles');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
				<?php }else{ ?>
				<button onclick="blindtoggle('form_addmyroles');toggleClass('addrolelink','add-active','add');return false;"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
				<?php }?>
			</div>
			
		</fieldset>
	</form>
	
</div> 
<?php }} ?>