<?php /* Smarty version 2.6.26, created on 2012-09-01 07:08:25
         compiled from file:admin_theme_install_confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:admin_theme_install_confirm.html', 14, false),array('function', 'xoops_token', 'file:admin_theme_install_confirm.html', 23, false),array('function', 'xoops_input', 'file:admin_theme_install_confirm.html', 24, false),array('function', 'cycle', 'file:admin_theme_install_confirm.html', 36, false),array('function', 'counter', 'file:admin_theme_install_confirm.html', 70, false),)), $this); ?>
<div id="contentBody">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_navi.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3 class="admintitle"><?php echo @_MI_XUPDATE_ADMENU_ADDONSTORE; ?>
</h3>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_menunavi.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_tips.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="confirm"><?php echo @_AD_LEGACY_LANG_THEME; ?>
 - <?php echo @_MI_XUPDATE_DEPLOY; ?>
</div>
<?php if ($this->_tpl_vars['actionForm']->hasError() && $this->_tpl_vars['actionForm']->getErrorMessages()): ?>
<div class="error">
  <ul>
    <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
</div>
<?php endif; ?>

<h3><?php if ($this->_tpl_vars['screen_shot']): ?><img src="<?php echo $this->_tpl_vars['screen_shot']; ?>
" alt="" /> <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['dirname'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>
</h3>

<form action="index.php?action=ThemeInstall" method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'confirm','value' => 1), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'id','value' => $this->_tpl_vars['id']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'sid','value' => $this->_tpl_vars['sid']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'dirname','value' => $this->_tpl_vars['dirname']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'addon_url','value' => $this->_tpl_vars['addon_url']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'unzipdirlevel','value' => $this->_tpl_vars['unzipdirlevel']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'target_key','value' => $this->_tpl_vars['target_key']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'target_type','value' => $this->_tpl_vars['target_type']), $this);?>

<table class="outer">
  <tr>
    <th colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['target_key'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>
</th>
  </tr>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <td class="legacy_list_select"><?php echo @_MI_XUPDATE_ADMENU_ADDONSTORE; ?>
</td>
      <td class="legacy_list_select">
          <a href="index.php?action=ThemeStore&amp;sid=<?php echo $this->_tpl_vars['sid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['store_name'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>
</a>
          <?php if ($this->_tpl_vars['detail_url']): ?>
          ( <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['detail_url'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['target_key'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>
</a> )
          <?php endif; ?>
      </td>
  </tr>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <td class="legacy_list_select"><?php echo @_MI_XUPDATE_FTP_ADDON_URL; ?>
</td>
    <td class="legacy_list_select">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['addon_url'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'show') : smarty_modifier_xoops_escape($_tmp, 'show')); ?>

    </td>
  </tr>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <td class="legacy_list_select">Version</td>
    <td class="legacy_list_select">
        <?php echo $this->_tpl_vars['version']; ?>
<?php if ($this->_tpl_vars['detailed_version']): ?> ( <?php echo $this->_tpl_vars['detailed_version']; ?>
 )<?php endif; ?>
    </td>
  </tr>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <td class="legacy_list_select">Description</td>
    <td class="legacy_list_select">
        <?php echo $this->_tpl_vars['description']; ?>

    </td>
  </tr>
  <?php if ($this->_tpl_vars['options']['writable_dir'] || $this->_tpl_vars['options']['writable_file'] || $this->_tpl_vars['options']['install_only'] || $this->_tpl_vars['options']['delete_dir'] || $this->_tpl_vars['options']['delete_file']): ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <td class="legacy_list_select">options</td>
    <td class="legacy_list_select">
    <table>
       <?php if ($this->_tpl_vars['options']['writable_dir']): ?>
        <tr><th class="ehad" colspan="2"><?php echo @_AD_XUPDATE_LANG_WRITABLE_DIR; ?>
</th></tr>
       <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'count'), $this);?>

       <?php $_from = $this->_tpl_vars['options']['writable_dir']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_item']):
?>
        <?php echo smarty_function_counter(array('assign' => 'count'), $this);?>

        <tr>
        <td class='even'><label for='writable_dir_<?php echo $this->_tpl_vars['count']; ?>
'><?php echo $this->_tpl_vars['_item']; ?>
</label></td>
        <td class='even'><input type='checkbox' name='writable_dir[]' id='writable_dir_<?php echo $this->_tpl_vars['count']; ?>
' value='<?php echo $this->_tpl_vars['_item']; ?>
' <?php if ($this->_tpl_vars['_item']): ?>checked="checked"<?php endif; ?> /></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['options']['writable_file']): ?>
        <tr><th class="ehad" colspan="2"><?php echo @_AD_XUPDATE_LANG_WRITABLE_FILE; ?>
</th></tr>
        <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'count'), $this);?>

        <?php $_from = $this->_tpl_vars['options']['writable_file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_item']):
?>
        <?php echo smarty_function_counter(array('assign' => 'count'), $this);?>

        <tr>
            <td class='even'><label for='writable_file_<?php echo $this->_tpl_vars['count']; ?>
'><?php echo $this->_tpl_vars['_item']; ?>
</label></td>
            <td class='even'><input type='checkbox' name='writable_file[]' id='writable_file_<?php echo $this->_tpl_vars['count']; ?>
' value='<?php echo $this->_tpl_vars['_item']; ?>
' <?php if ($this->_tpl_vars['_item']): ?>checked="checked"<?php endif; ?> /></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['options']['install_only']): ?>
        <tr><th class="ehad" colspan="2"><?php echo @_AD_XUPDATE_LANG_INSTALL_ONLY; ?>
</th></tr>
        <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'count'), $this);?>

        <?php $_from = $this->_tpl_vars['options']['install_only']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_item']):
?>
        <?php echo smarty_function_counter(array('assign' => 'count'), $this);?>

        <tr>
            <td class='even'><label for='install_only_<?php echo $this->_tpl_vars['count']; ?>
'><?php echo $this->_tpl_vars['_item']; ?>
</label></td>
            <td class='even'><input type='checkbox' name='install_only[]' id='install_only_<?php echo $this->_tpl_vars['count']; ?>
' value='<?php echo $this->_tpl_vars['_item']; ?>
' /></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
       <?php if ($this->_tpl_vars['options']['delete_dir']): ?>
        <tr><th class="ehad" colspan="2"><?php echo @_AD_XUPDATE_LANG_DELETE_DIR; ?>
</th></tr>
       <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'count'), $this);?>

       <?php $_from = $this->_tpl_vars['options']['delete_dir']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_item']):
?>
       <?php echo smarty_function_counter(array('assign' => 'count'), $this);?>

        <tr>
        <td class='even'><label for='delete_dir_{$count}>'><?php echo $this->_tpl_vars['_item']; ?>
</label></td>
        <td class='even'><input type='checkbox' name='delete_dir[]' id='delete_dir_<?php echo $this->_tpl_vars['count']; ?>
' value='<?php echo $this->_tpl_vars['_item']; ?>
' /></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
       <?php if ($this->_tpl_vars['options']['delete_file']): ?>
        <tr><th class="ehad" colspan="2"><?php echo @_AD_XUPDATE_LANG_DELETE_FILE; ?>
</th></tr>
       <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'count'), $this);?>

       <?php $_from = $this->_tpl_vars['options']['delete_file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_item']):
?>
       <?php echo smarty_function_counter(array('assign' => 'count'), $this);?>

        <tr>
        <td class='even'><label for='delete_file_<?php echo $this->_tpl_vars['count']; ?>
'><?php echo $this->_tpl_vars['_item']; ?>
</label></td>
        <td class='even'><input type='checkbox' name='delete_file[]' id='delete_file_<?php echo $this->_tpl_vars['count']; ?>
' value='<?php echo $this->_tpl_vars['_item']; ?>
' /></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
  </table>
    </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td class="foot" colspan="2">
       <?php if (! $this->_tpl_vars['actionForm']->getErrorMessages()): ?>
      <input class="formButton" type="submit" value="<?php echo @_MI_XUPDATE_DEPLOY; ?>
" />
      <?php endif; ?>
      <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
    </td>
  </tr>
</table>
</form>

<div id="xupdate_boxes">
    <!-- #customize your modal window here -->
    <div id="xupdate_dialog" class="window">
    <?php echo @_MI_XUPDATE_PROG_PROCESSING; ?>

    <div class="progress_bar"><img src="../images/progress-bar.gif" alt=""></div>
    </div>
    <!-- Do not remove div#mask, because you'll need it to fill the whole screen --> 
    <div id="xupdate_mask"></div>
</div>

</div>