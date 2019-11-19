<?php /* Smarty version Smarty-3.1.13, created on 2016-01-04 14:19:22
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/milestone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1432895307568aefeab46334-66996901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f672be9fb9ff37c8913bee105b2865b8afdfa1c8' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/milestone.tpl',
      1 => 1422544084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432895307568aefeab46334-66996901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'settings' => 0,
    'projectname' => 0,
    'milestone' => 0,
    'userpermissions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_568aefeacf7ec7_53833384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568aefeacf7ec7_53833384')) {function content_568aefeacf7ec7_53833384($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('milestab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="miles">

			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" />
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,40,"...",true);?>

				</a>
				<a href="managemilestone.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
">
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/miles.png" alt="" />
					<?php echo $_smarty_tpl->getConfigVariable('milestones');?>

				</a>
			</div>

			<h1 class="second">
				<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/miles.png" alt="" />
				<?php echo $_smarty_tpl->tpl_vars['milestone']->value['name'];?>

			</h1>

			<div class="statuswrapper">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['close']){?><?php if ($_smarty_tpl->tpl_vars['milestone']->value['status']==1){?>
					<li class="link">
						<a class="close" href="managemilestone.php?action=close&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
					</li>
					<?php }?><?php }?>

					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
					<li class="link">
						<a class="edit" href="javascript:void(0);" id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_mile','smooth','nosmooth');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
					</li>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['del']){?>
					<li class="link">
						<a class="del" href="javascript:void(0);" onclick="confirmit('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','managemilestone.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
					</li>
					<?php }?>

					<li><a><?php echo $_smarty_tpl->getConfigVariable('start');?>
: <?php echo $_smarty_tpl->tpl_vars['milestone']->value['startstring'];?>
</a></li>

					<li><a><?php echo $_smarty_tpl->getConfigVariable('end');?>
: <?php echo $_smarty_tpl->tpl_vars['milestone']->value['endstring'];?>
</a></li>
				</ul>
			</div>

			
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
				<div id="form_edit" class="addmenue" style="display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php echo $_smarty_tpl->getSubTemplate ("editmilestone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showhtml'=>"no"), 0);?>

				</div>
			<?php }?>

			<div class="content-spacer"></div>

			<div class="nosmooth" id="sm_mile">
				
				<div id="descript" class="descript">
					<h2><?php echo $_smarty_tpl->getConfigVariable('description');?>
</h2>
					<?php echo $_smarty_tpl->tpl_vars['milestone']->value['desc'];?>

				</div>

				
				<?php if ($_smarty_tpl->tpl_vars['milestone']->value['tasklists'][0][0]){?>
					<div class="content-spacer-b"></div>

					<h2><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</h2>

					<div class="inwrapper">
						<ul>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestone']->value['tasklists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total']);
?>
								<li>
									<div class="itemwrapper">

										<table cellpadding="0" cellspacing="0" border="0">
											<tr>
												<td class="leftmen" valign="top">
													<div class="inmenue"></div>
												</td>
												<td class="thumb">
													<a href="managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
														<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" style="width:32px; height:auto;" alt="" />
													</a>
												</td>
												<td class="rightmen" valign="top">
													<div class="inmenue"></div>
												</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="name">
														<a href="managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
															<?php if ($_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name']!=''){?>
																<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['milestone']->value['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'],13,"...",true);?>

															<?php }else{ ?>
																<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>

															<?php }?>
														</a>
													</span>
												</td>
											<tr/>
										</table>

									</div> 
								</li>
							<?php endfor; endif; ?> 

						</ul>
					</div> 
				<?php }?>


				
				<?php if ($_smarty_tpl->tpl_vars['milestone']->value['messages'][0][0]){?>
					<div class="content-spacer-b"></div>

					<h2><?php echo $_smarty_tpl->getConfigVariable('messages');?>
</h2>

					<div class="inwrapper">
						<ul>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['msg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['name'] = 'msg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestone']->value['messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['msg']['total']);
?>
								<li>
									<div class="itemwrapper">

										<table cellpadding="0" cellspacing="0" border="0">
											<tr>
												<td class="leftmen" valign="top">
													<div class="inmenue"></div>
												</td>
												<td class="thumb">
													<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['title'];?>
">
														<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" style="width:32px; height:auto;" alt="" />
													</a>
												</td>
												<td class="rightmen" valign="top">
													<div class="inmenue"></div>
												</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="name">
														<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['title'];?>
">
															<?php if ($_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['title']!=''){?>
																<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['milestone']->value['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['msg']['index']]['title'],13,"...",true);?>

															<?php }else{ ?>
																<?php echo $_smarty_tpl->getConfigVariable('message');?>

															<?php }?>
														</a>
													</span>
												</td>
											<tr/>
										</table>

									</div> 
								</li>
							<?php endfor; endif; ?> 
						</ul>
					</div> 

				<?php }?>

			</div> 

			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>