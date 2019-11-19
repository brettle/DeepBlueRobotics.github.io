<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 07:41:05
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/addcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12461634005661b411e1e9a8-78449523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ecc34e41a1ecb9cf03fbb0dcdc4064a6108a78' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/addcustomer.tpl',
      1 => 1415353862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12461634005661b411e1e9a8-78449523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661b411e74e16_96492035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661b411e74e16_96492035')) {function content_5661b411e74e16_96492035($_smarty_tpl) {?><div class="block_in_wrapper">

    <h2><?php echo $_smarty_tpl->getConfigVariable('addcustomer');?>
</h2>

    <form novalidate class="main" method="post" action="admin.php?action=addcust" onsubmit="return validateCompleteForm(this);" >
        <fieldset>
            <div class="row">
                <label for="company"><?php echo $_smarty_tpl->getConfigVariable('company');?>
:</label>
                <input type="text" class="text" name="company" id="company" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('company');?>
" />
            </div>

            <div class="row">
                <label for="contact"><?php echo $_smarty_tpl->getConfigVariable('contactperson');?>
:</label>
                <input type="text" class="text" name="contact" id="contact" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('contactperson');?>
" />
            </div>

            <div class="row">
                <label for="email"><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</label>
                <input type="text" class="text" name="email" id="email" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('email');?>
" />
            </div>

            <div class="row">
                <label for="tel1"><?php echo $_smarty_tpl->getConfigVariable('phone');?>
:</label>
                <input type="text" class="text" name="tel1" id="tel1" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('phone');?>
" />
            </div>

            <div class="row">
                <label for="tel2"><?php echo $_smarty_tpl->getConfigVariable('cellphone');?>
:</label>
                <input type="text" class="text" name="tel2" id="tel2" realname="<?php echo $_smarty_tpl->getConfigVariable('cellphone');?>
" />
            </div>

            <div class="row">
                <label for="web"><?php echo $_smarty_tpl->getConfigVariable('url');?>
:</label>
                <input type="text" class="text" name="web" id="web" realname="<?php echo $_smarty_tpl->getConfigVariable('url');?>
" />
            </div>

            <div class="clear_both_b"></div>

            <div class="row">
                <label for="address"><?php echo $_smarty_tpl->getConfigVariable('address');?>
:</label>
                <input type="text" class="text" name="address" id="address" realname="<?php echo $_smarty_tpl->getConfigVariable('address');?>
" />
            </div>

            <div class="row">
                <label for="zip"><?php echo $_smarty_tpl->getConfigVariable('zip');?>
:</label>
                <input type="text" class="text" name="zip" id="zip" realname="<?php echo $_smarty_tpl->getConfigVariable('zip');?>
" />
            </div>

            <div class="row">
                <label for="city"><?php echo $_smarty_tpl->getConfigVariable('city');?>
:</label>
                <input type="text" class="text" name="city" id="city" realname="<?php echo $_smarty_tpl->getConfigVariable('city');?>
" />
            </div>

            <div class="row">
                <label for="country"><?php echo $_smarty_tpl->getConfigVariable('country');?>
:</label>
                <input type="text" class="text" name="country" id="country" realname="<?php echo $_smarty_tpl->getConfigVariable('country');?>
" />
            </div>

            <div class="row">
                <label for="state"><?php echo $_smarty_tpl->getConfigVariable('state');?>
:</label>
                <input type="text" class="text" name="state" id="state" realname="<?php echo $_smarty_tpl->getConfigVariable('state');?>
" />
            </div>

            <div class="clear_both_b"></div>

            <div class="row">
                <label for="desc"><?php echo $_smarty_tpl->getConfigVariable('description');?>
:</label>
                <div class="editor">
                    <textarea name="desc" id="desc" rows="3" cols="1"></textarea>
                </div>
            </div>

            <input type="hidden" name="assignme" value="1" />

            <div class="clear_both_b"></div>

            <div class="row-butn-bottom">
                <label>&nbsp;</label>
                <button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
                <button type="reset" onclick="blindtoggle('form_addcustomer');toggleClass('add_customers','add-active','add');toggleClass('add_butn_customers','butn_link_active','butn_link');toggleClass('sm_customers','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
            </div>


        </fieldset>
    </form>

</div>
<?php }} ?>