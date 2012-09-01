<?php /* Smarty version 2.6.26, created on 2012-09-01 07:10:14
         compiled from tw_940/theme_cubelogin_block.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_input', 'tw_940/theme_cubelogin_block.html', 6, false),)), $this); ?>
<div id="theme_login_block_div" style="display:none;">
<div id="theme_login_block">

<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post" style="margin-top: 0px;">
    <?php echo @_THEME_LANGUAGE_USER_NAME; ?>
<br />
    <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','size' => 12,'value' => $this->_tpl_vars['block']['unamevalue'],'maxlength' => 25,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_uname"), $this);?>
<br />
    <?php echo @_THEME_LANGUAGE_PWORD; ?>
<br />
    <?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','size' => 12,'maxlength' => 32,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_pass"), $this);?>
<br />
    <label><?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'rememberme','value' => 'On','class' => 'formButton'), $this);?>
<?php echo @_MB_USER_REMEMBERME; ?>
</label><br />
    <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
    <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'op','value' => 'login','id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_op"), $this);?>

    <?php echo smarty_function_xoops_input(array('type' => 'submit','name' => 'submit','value' => @_THEME_LANGUAGE_LOGIN,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_submit"), $this);?>
<br />
</form>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/lostpass.php"><?php echo @_THEME_LANGUAGE_LOST_PASS; ?>
</a>
<br /><br />
<?php if ($this->_tpl_vars['block']['allow_register'] == '1'): ?>
  <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @_THEME_LANGUAGE_RESISTER; ?>
</a>
<?php endif; ?>

</div>
</div>