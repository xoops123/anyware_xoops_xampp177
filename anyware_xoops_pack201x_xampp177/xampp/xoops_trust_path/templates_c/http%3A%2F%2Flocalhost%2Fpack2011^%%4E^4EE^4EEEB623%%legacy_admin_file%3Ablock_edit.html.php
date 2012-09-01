<?php /* Smarty version 2.6.26, created on 2012-09-01 07:11:43
         compiled from file:block_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:block_edit.html', 13, false),array('function', 'xoops_token', 'file:block_edit.html', 20, false),array('function', 'xoops_input', 'file:block_edit.html', 21, false),array('function', 'cycle', 'file:block_edit.html', 31, false),array('function', 'xoops_optionsArray', 'file:block_edit.html', 45, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=BlockList"><?php echo @_MI_LEGACY_MENU_BLOCKLIST; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_BLOCK_EDIT; ?>
</span>
</div>

<h3 class="admintitle"><?php echo @_AD_LEGACY_LANG_BLOCK_EDIT; ?>
</h3>

<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
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

<form action="index.php?action=BlockEdit" method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'bid','value' => $this->_tpl_vars['actionForm']->get('bid')), $this);?>

  <?php if (! $this->_tpl_vars['hasVisibleOptionForm'] && $this->_tpl_vars['optionForm'] != null): ?>
    <?php echo $this->_tpl_vars['optionForm']; ?>

  <?php endif; ?>
  <table class="outer">
    <tr>
      <th colspan="2"><?php echo @_AD_LEGACY_LANG_BLOCK_EDIT; ?>
</th>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_NAME; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['object']->get('name'))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TITLE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'title','value' => $this->_tpl_vars['actionForm']->get('title'),'size' => 50,'maxlength' => 255), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_SIDE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name="side">
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'side','from' => $this->_tpl_vars['columnSideArr'],'label' => 'name','value' => 'id','default' => $this->_tpl_vars['actionForm']->get('side')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_WEIGHT; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'weight','value' => $this->_tpl_vars['actionForm']->get('weight'),'size' => 5,'class' => 'legacy_list_number'), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_BCACHETIME; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name='bcachetime'>
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'bcachetime','from' => $this->_tpl_vars['cachetimeArr'],'value' => 'cachetime','label' => 'label','default' => $this->_tpl_vars['actionForm']->get('bcachetime')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TARGET_MODULES; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select  size='5' name='bmodule[]' multiple='multiple'>
          <?php echo smarty_function_xoops_optionsArray(array('id' => "bmodule[]",'from' => $this->_tpl_vars['moduleArr'],'value' => 'mid','label' => 'name','default' => $this->_tpl_vars['actionForm']->get('bmodule')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TARGET_GROUPS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select  size='5' name='groupid[]' multiple='multiple'>
          <?php echo smarty_function_xoops_optionsArray(array('id' => "groupid[]",'from' => $this->_tpl_vars['groupArr'],'value' => 'groupid','label' => 'name','default' => $this->_tpl_vars['actionForm']->get('groupid')), $this);?>

        </select>
      </td>
    </tr>
    <?php if ($this->_tpl_vars['hasVisibleOptionForm'] && $this->_tpl_vars['optionForm'] != null): ?>
      <tr>
        <td class="head"><?php echo @_AD_LEGACY_LANG_OPTIONS; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
          <?php echo $this->_tpl_vars['optionForm']; ?>

        </td>
      </tr>
    <?php endif; ?>
    <tr>
      <td class="foot" colspan="2">
        <input class="formButton" type="submit" value="<?php echo @_SUBMIT; ?>
" />
        <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
      </td>
    </tr>
  </table>
</form>