<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 07:41:05
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/editcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19654245005661b411e78915-94946442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90bbdebcca18cedb19a3c4358b5e02de5eb5aca4' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/editcustomer.tpl',
      1 => 1422992762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19654245005661b411e78915-94946442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locale' => 0,
    'customer' => 0,
    'langfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661b412001b10_36470446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661b412001b10_36470446')) {function content_5661b412001b10_36470446($_smarty_tpl) {?>

	
		<script type="text/javascript">
			//	theme_advanced_statusbar_location : "bottom",
			tinyMCE.init({
				mode : "textareas",
				theme : "advanced",
				language: "<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
",
				width: "400px",
				height: "250px",
				plugins : "inlinepopups,style,advimage,advlink,xhtmlxtras,safari,template",
				theme_advanced_buttons1 : "bold,italic,underline,|,fontsizeselect,forecolor,|,bullist,numlist,|,link,unlink,image",
				theme_advanced_buttons2 : "",
				theme_advanced_buttons3 : "",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_path : false,
				extended_valid_elements : "a[name|href|target|title],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|name],font[face|size|color|style],span[class|align|style]",
			    theme_advanced_statusbar_location: "bottom",
			    theme_advanced_resizing : true,
				theme_advanced_resizing_use_cookie : false,
				theme_advanced_resizing_min_width : "400px",
				theme_advanced_resizing_max_width : "600px",
				theme_advanced_resize_horizontal : false,
				force_br_newlines : true,
				cleanup: true,
				cleanup_on_startup: true,
				force_p_newlines : false,
				convert_newlines_to_brs : false,
				forced_root_block : false,
				external_image_list_url: 'manageajax.php?action=jsonfiles&id=<?php echo $_smarty_tpl->tpl_vars['customer']->value['ID'];?>
'
			});
		</script>
	


<div class="block_in_wrapper">

	<h2><?php echo $_smarty_tpl->tpl_vars['langfile']->value['editcustomer'];?>
</h2>

	<form novalidate class="main" method="post" action="managecompany.php?action=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['customer']->value['ID'];?>
" onsubmit="return validateCompleteForm(this,'input_error');">
		<fieldset>

			<div class="row"><label for="company"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['company'];?>
:</label><input type="text" class="text" name="company" id="company" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['company'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['company'];?>
" /></div>
			<div class="row"><label for="contact"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['contactperson'];?>
:</label><input type="text" class="text" name="contact" id="contact" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['contactperson'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['contact'];?>
" /></div>
			<div class="row"><label for="email"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['email'];?>
:</label><input type="text" class="text" name="email" id="email" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
" /></div>
			<div class="row"><label for="tel1"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['phone'];?>
:</label><input type="text" class="text" name="tel1" id="tel1" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['phone'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
" /></div>
			<div class="row"><label for="tel2"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['cellphone'];?>
:</label><input type="text" class="text" name="tel2" id="tel2" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['cellphone'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['mobile'];?>
" /></div>
			<div class="row"><label for="web"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['url'];?>
:</label><input type="text" class="text" name="web" id="web" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['url'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['url'];?>
" /></div>

			<div class="clear_both_b"></div>

			<div class="row"><label for="address"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['address'];?>
:</label><input type="text" class="text" name="address" id="address" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['address'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['address'];?>
" /></div>
			<div class="row"><label for="zip"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['zip'];?>
:</label><input type="text" class="text" name="zip" id="zip" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['zip'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['zip'];?>
" /></div>
			<div class="row"><label for="city"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['city'];?>
:</label><input type="text" class="text" name="city" id="city" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['city'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['city'];?>
" /></div>
			<div class="row"><label for="country"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['country'];?>
:</label><input type="text" class="text" name="country" id="country" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['country'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['country'];?>
" /></div>
			<div class="row"><label for="state"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['state'];?>
:</label><input type="text" class="text" name="state" id="state" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['state'];?>
" /></div>

			<div class="clear_both_b"></div>

			<div class="row"><label for="desc"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['description'];?>
:</label><div class="editor"><textarea name="desc" id="desc" rows="3" cols="1"><?php echo $_smarty_tpl->tpl_vars['customer']->value['desc'];?>
</textarea></div></div>

			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['send'];?>
</button>
				<button type="button" onclick="blindtoggle('form_editcustomer');toggleClass('edit_butn<?php echo $_smarty_tpl->tpl_vars['customer']->value['ID'];?>
','tool_edit_active','tool_edit');" onfocus="this.blur();"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['cancel'];?>
</button>
			</div>

		</fieldset>
	</form>

</div> 
<?php }} ?>