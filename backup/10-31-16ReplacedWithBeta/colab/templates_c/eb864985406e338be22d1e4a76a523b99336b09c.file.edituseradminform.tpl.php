<?php /* Smarty version Smarty-3.1.13, created on 2015-12-18 14:18:37
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/edituseradminform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18135708815674863d13fef4-55916772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb864985406e338be22d1e4a76a523b99336b09c' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/edituseradminform.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18135708815674863d13fef4-55916772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cl_config' => 0,
    'settings' => 0,
    'languages_fin' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5674863d253825_97452327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674863d253825_97452327')) {function content_5674863d253825_97452327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('usertab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="user">
			
			<h1><?php echo $_smarty_tpl->getConfigVariable('edituser');?>
<span>/ <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span></h1>
			
			<div class="userwrapper">
				
				<form novalidate class="main" method="post" action="admin.php?action=edituser&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value['ID'];?>
" enctype="multipart/form-data"  onsubmit="return validateCompleteForm(this,'input_error');"  >
					<fieldset>
						
						<table cellpadding="0" cellspacing="0" border="0">
							
							<tr>
								<td class="avatarcell" valign="top">
									
									<?php if ($_smarty_tpl->tpl_vars['user']->value['avatar']!=''){?>
										<a href="#avatarbig" id="ausloeser">
											<div class="avatar-profile">
												<img src="thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
&amp;width=122;" alt="" />
											</div>
										</a>
									<?php }else{ ?>
										<?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="f"){?>
											<div class="avatar-profile">
												<img src="thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-female.jpg&amp;width=122;" alt="" />
											</div>
										<?php }else{ ?>
											<div class="avatar-profile">
												<img src="thumb.php?pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-male.jpg&amp;width=122;" alt="" />
											</div>
										<?php }?>
									<?php }?>
									
									<div id="avatarbig" style="display:none;">
										<a href="javascript:Control.Modal.close();">
											<img src="thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
&amp;width=480&amp;height=480;" alt="" />
										</a>
									</div>
								</td>
								
								<td>
									<div class="message">
										<div class="block">
											
											<table cellpadding="0" cellspacing="0" border="0">
												
												<colgroup>
													<col class="a" />
													<col class="b" />
												</colgroup>
												
												<thead><tr><th colspan="2"></th></tr></thead>
												<tfoot><tr><td colspan="2"></td></tr></tfoot>
												
												<tbody class="color-a">
													<tr>
														<td><label for = "name"><?php echo $_smarty_tpl->getConfigVariable('user');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" tabindex="1" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="avatar"><?php echo $_smarty_tpl->getConfigVariable('avatar');?>
:</label></td>
														<td class="right">
															<div class="fileinput">
																<input type="file" class="file" name="userfile" id="avatar" realname="<?php echo $_smarty_tpl->getConfigVariable('file');?>
" size="19" onchange="thefile.value = this.value;" tabindex="2" />
																
																<table class="faux" cellpadding="0" cellspacing="0" border="0">
																
																	<tr>
																		<td><input type="text" class="text-file" name="thefile" id="thefile"></td>
																		<td class="choose"><button class="inner" onclick="return false;"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</button></td>
																	</tr>
																	
																</table>
																
															</div>
														</td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td></td>
														<td class="right"></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="company"><?php echo $_smarty_tpl->getConfigVariable('company');?>
:</label></td>
														<td class="right"><input type="text" name="company" id="company" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="email"><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" name="email" id="email"  regexp="EMAIL"  required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('email');?>
" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="rate"><?php echo $_smarty_tpl->getConfigVariable('rate');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['rate'];?>
" name="rate" id="rate" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="web"><?php echo $_smarty_tpl->getConfigVariable('url');?>
:</label></td>
														<td class="right"><input type="text" class="text" name="web" id="web" realname="<?php echo $_smarty_tpl->getConfigVariable('url');?>
" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="tel1"><?php echo $_smarty_tpl->getConfigVariable('phone');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel1'];?>
" name="tel1" id="tel1" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="tel2"><?php echo $_smarty_tpl->getConfigVariable('cellphone');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel2'];?>
" name="tel2" id="tel2" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td></td>
														<td class="right"></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="address1"><?php echo $_smarty_tpl->getConfigVariable('address');?>
:</label></td>
														<td class="right"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['adress'];?>
" name="address1" id="address1" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="zip"><?php echo $_smarty_tpl->getConfigVariable('zip');?>
:</label></td>
														<td class="right"><input type="text" name="zip" id="zip" realname="<?php echo $_smarty_tpl->getConfigVariable('zip');?>
" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['zip'];?>
" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="address2"><?php echo $_smarty_tpl->getConfigVariable('city');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['adress2'];?>
" name="address2" id="address2" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="country"><?php echo $_smarty_tpl->getConfigVariable('country');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
" name="country" id="country" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="state"><?php echo $_smarty_tpl->getConfigVariable('state');?>
:</label></td>
														<td class="right"><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['state'];?>
" name="state" id="state" autocomplete="off" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td></td>
														<td class="right"></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label for="gender"><?php echo $_smarty_tpl->getConfigVariable('gender');?>
:</label></td>
														<td class="right">
															<select name="gender" id="gender" realname="<?php echo $_smarty_tpl->getConfigVariable('gender');?>
" />
																<?php if ($_smarty_tpl->tpl_vars['user']->value['gender']==''){?>
																	<option value="" selected><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
																<?php }?>
																<option <?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="m"){?> selected="selected" <?php }?> value = "m"><?php echo $_smarty_tpl->getConfigVariable('male');?>
</option>
																<option <?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=="f"){?> selected="selected" <?php }?> value = "f"><?php echo $_smarty_tpl->getConfigVariable('female');?>
</option>
															</select>
														</td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="locale"><?php echo $_smarty_tpl->getConfigVariable('locale');?>
:</label></td>
														<td class="right">
															<select name="locale" id="locale">
																<option value="" <?php if ($_smarty_tpl->tpl_vars['user']->value['locale']==''){?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->getConfigVariable('systemdefault');?>
</option>
																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lang'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['name'] = 'lang';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages_fin']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lang']['total']);
?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['val'];?>
" <?php if ($_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['val']==$_smarty_tpl->tpl_vars['user']->value['locale']){?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['languages_fin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['str'];?>
</option>
																<?php endfor; endif; ?>
															</select>
														</td>
													</tr>
												</tbody>
												
												<input type="hidden" name="admin" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['admin'];?>
" />
												
												<tbody class="color-a">
													<tr>
														<td><label for="newpass"><?php echo $_smarty_tpl->getConfigVariable('newpass');?>
:</label></td>
														<td class="right"><input type="password" name="newpass" id="newpass" autocomplete="off" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="repeatpass"><?php echo $_smarty_tpl->getConfigVariable('repeatpass');?>
:</label></td>
														<td class="right"><input type="password" name="repeatpass" id="repeatpass" autocomplete="off" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td></td>
														<td class="right"></td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td><label for="tags"><?php echo $_smarty_tpl->getConfigVariable('tags');?>
:</label></td>
														<td class="right"><input type="text" name="tags" id="tags" realname="<?php echo $_smarty_tpl->getConfigVariable('tags');?>
" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tags'];?>
" /></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td><label><?php echo $_smarty_tpl->getConfigVariable('permissions');?>
:</label></td>
														<td class="right">
															<select name="role">
																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['role'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['role']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['name'] = 'role';
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['role']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['role']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['role']['total']);
?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['ID']==$_smarty_tpl->tpl_vars['user']->value['role']['ID']){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role']['index']]['name'];?>
</option>
																<?php endfor; endif; ?>
															</select>
														</td>
													</tr>
												</tbody>
												
												<tbody class="color-b">
													<tr>
														<td></td>
														<td class="right"></td>
													</tr>
												</tbody>
												
												<tbody class="color-a">
													<tr>
														<td></td>
														<td class="right">
															<button type="submit" onfocus="this.blur()"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
														</td>
													</tr>
												</tbody>
											
											</table>
											
										</div> 
									</div> 
								</td>
							</tr>
							
						</table>
						
					</fieldset>
				</form>
				
				
					<script type="text/javascript">
						new Control.Modal('ausloeser',{
						opacity: 0.8,
						position: 'absolute',
						width: 480,
						height: 480,
						fade:true,
						containerClassName: 'pics',
						overlayClassName: 'useroverlay'
						});
					</script>
				
				
			</div> 
			
			<div class="content-spacer"></div>
			
		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>