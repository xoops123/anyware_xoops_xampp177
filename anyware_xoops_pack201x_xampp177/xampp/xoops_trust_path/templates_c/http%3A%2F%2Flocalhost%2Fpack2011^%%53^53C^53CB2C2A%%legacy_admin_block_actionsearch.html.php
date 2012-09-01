<?php /* Smarty version 2.6.26, created on 2012-09-01 07:01:10
         compiled from blocks/legacy_admin_block_actionsearch.html */ ?>
<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacy/admin/index.php?action=actSearch" method="post">
  <input type="text" name="keywords"/>
  <input type="submit" value="<?php echo @_SEARCH; ?>
" class="formButton" />
</form>