<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 00:11:17
         compiled from "/var/www/html/MPOS/templates/bootstrap/password/change/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8550695905aa9ba25767978-62291921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f090a8f42d5c8cb738592de813240244a02558' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/password/change/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8550695905aa9ba25767978-62291921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'GLOBAL' => 0,
    'CHANGEPASSSENT' => 0,
    'CHANGEPASSUNLOCKED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9ba25826aa6_63648431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9ba25826aa6_63648431')) {function content_5aa9ba25826aa6_63648431($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" method="POST">
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />

    <input type="hidden" name="do" value="resetPassword">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Password reset</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <fieldset>
            <label>New Password</label>
            <input class="form-control" type="password" name="newPassword" required>
          </fieldset>
        </div>
        <div class="form-group">
          <fieldset>
            <label>Repeat New Password</label>
            <input class="form-control" type="password" name="newPassword2" required>
          </fieldset>
        </div>
      </div>
      <div class="panel-footer">
        
          <input type="hidden" name="cp_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['cp_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="utype" value="change_pw">
          <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['changepw']) {?>
            <?php if ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1) {?>
              <input type="submit" value="Change Password" class="btn btn-warning btn-sm">
            <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==1&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
              <input type="submit" value="Change Password" class="btn btn-warning btn-sm" disabled="disabled">
            <?php } elseif ($_smarty_tpl->tpl_vars['CHANGEPASSSENT']->value==0&&$_smarty_tpl->tpl_vars['CHANGEPASSUNLOCKED']->value==0) {?>
              <input type="submit" value="Unlock" class="btn btn-warning btn-sm" name="unlock">
            <?php }?>
          <?php } else { ?>
            <input type="submit" value="Change Password" class="btn btn-warning btn-sm">
          <?php }?>
        
      </div>
    </div>
  </form>
</div>
<?php }} ?>
