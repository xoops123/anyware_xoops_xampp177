<?php /* Smarty version 2.6.26, created on 2012-09-01 07:13:37
         compiled from tw_940/theme_modules.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strstr', 'tw_940/theme_modules.html', 9, false),array('modifier', 'xoops_blocktitleclass', 'tw_940/theme_modules.html', 10, false),array('modifier', 'xoops_blocktitleclassdel', 'tw_940/theme_modules.html', 12, false),)), $this); ?>
<header id="overview">
<div class="container">
	<h1><?php echo $this->_tpl_vars['xoops_sitename']; ?>
&nbsp;<small><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_title.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></small></h1>

<?php unset($this->_sections['ccloop']);
$this->_sections['ccloop']['loop'] = is_array($_loop=$this->_tpl_vars['xoops_ccblocks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ccloop']['name'] = 'ccloop';
$this->_sections['ccloop']['show'] = true;
$this->_sections['ccloop']['max'] = $this->_sections['ccloop']['loop'];
$this->_sections['ccloop']['step'] = 1;
$this->_sections['ccloop']['start'] = $this->_sections['ccloop']['step'] > 0 ? 0 : $this->_sections['ccloop']['loop']-1;
if ($this->_sections['ccloop']['show']) {
    $this->_sections['ccloop']['total'] = $this->_sections['ccloop']['loop'];
    if ($this->_sections['ccloop']['total'] == 0)
        $this->_sections['ccloop']['show'] = false;
} else
    $this->_sections['ccloop']['total'] = 0;
if ($this->_sections['ccloop']['show']):

            for ($this->_sections['ccloop']['index'] = $this->_sections['ccloop']['start'], $this->_sections['ccloop']['iteration'] = 1;
                 $this->_sections['ccloop']['iteration'] <= $this->_sections['ccloop']['total'];
                 $this->_sections['ccloop']['index'] += $this->_sections['ccloop']['step'], $this->_sections['ccloop']['iteration']++):
$this->_sections['ccloop']['rownum'] = $this->_sections['ccloop']['iteration'];
$this->_sections['ccloop']['index_prev'] = $this->_sections['ccloop']['index'] - $this->_sections['ccloop']['step'];
$this->_sections['ccloop']['index_next'] = $this->_sections['ccloop']['index'] + $this->_sections['ccloop']['step'];
$this->_sections['ccloop']['first']      = ($this->_sections['ccloop']['iteration'] == 1);
$this->_sections['ccloop']['last']       = ($this->_sections['ccloop']['iteration'] == $this->_sections['ccloop']['total']);
?><?php if ($this->_sections['ccloop']['first']): ?> 
	<div class="row">
		<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ccloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ccloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['ccloop']['iteration']++;
?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
				<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">
					<?php if (! ($this->_foreach['ccloop']['iteration'] <= 1)): ?>
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h3><?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php else: ?>
				<div class="span4">
					<?php if (! ($this->_foreach['ccloop']['iteration'] <= 1)): ?>
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo $this->_tpl_vars['block']['title']; ?>
</h3><?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>
<?php endfor; endif; ?>

</div><!-- /container -->
</header>

<div id="wrap">
<div class="container">
<div class="row">

<?php if ($this->_tpl_vars['xoops_showlblock'] == 1): ?>
<?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['lbloop']['iteration']++;
?>
	<?php if (($this->_foreach['lbloop']['iteration'] <= 1)): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
<div id="side_bar" class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">		<?php else: ?>
<div id="side_bar" class="span3">		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<div class="row">
		<?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['lbloop']['iteration']++;
?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
				<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h3><?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php else: ?>
				<div class="span3">
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo $this->_tpl_vars['block']['title']; ?>
</h3><?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div><!-- /side_bar -->
<?php endif; ?>

<?php if ($this->_tpl_vars['xoops_showlblock'] == 1): ?>
<?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['lbloop']['iteration']++;
?>
	<?php if (($this->_foreach['lbloop']['iteration'] <= 1)): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span1'): ?>
<div class="span11">
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span2'): ?>
<div class="span10">
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span3'): ?>
<div class="span9">
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span4'): ?>
<div class="span8">
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span5'): ?>
<div class="span7">
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)) == 'span6'): ?>
<div class="span6">
			<?php else: ?>
<div class="span9">
			<?php endif; ?>
		<?php else: ?>
<div class="span9">
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<div class="span12">
<?php endif; ?>
	<article id="main-content">
			<?php echo $this->_tpl_vars['xoops_contents']; ?>

	</article>
</div>

</div><!-- /row -->
</div><!-- /container -->
</div><!-- /wrap -->


<?php unset($this->_sections['clloop']);
$this->_sections['clloop']['loop'] = is_array($_loop=$this->_tpl_vars['xoops_clblocks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['clloop']['name'] = 'clloop';
$this->_sections['clloop']['show'] = true;
$this->_sections['clloop']['max'] = $this->_sections['clloop']['loop'];
$this->_sections['clloop']['step'] = 1;
$this->_sections['clloop']['start'] = $this->_sections['clloop']['step'] > 0 ? 0 : $this->_sections['clloop']['loop']-1;
if ($this->_sections['clloop']['show']) {
    $this->_sections['clloop']['total'] = $this->_sections['clloop']['loop'];
    if ($this->_sections['clloop']['total'] == 0)
        $this->_sections['clloop']['show'] = false;
} else
    $this->_sections['clloop']['total'] = 0;
if ($this->_sections['clloop']['show']):

            for ($this->_sections['clloop']['index'] = $this->_sections['clloop']['start'], $this->_sections['clloop']['iteration'] = 1;
                 $this->_sections['clloop']['iteration'] <= $this->_sections['clloop']['total'];
                 $this->_sections['clloop']['index'] += $this->_sections['clloop']['step'], $this->_sections['clloop']['iteration']++):
$this->_sections['clloop']['rownum'] = $this->_sections['clloop']['iteration'];
$this->_sections['clloop']['index_prev'] = $this->_sections['clloop']['index'] - $this->_sections['clloop']['step'];
$this->_sections['clloop']['index_next'] = $this->_sections['clloop']['index'] + $this->_sections['clloop']['step'];
$this->_sections['clloop']['first']      = ($this->_sections['clloop']['iteration'] == 1);
$this->_sections['clloop']['last']       = ($this->_sections['clloop']['iteration'] == $this->_sections['clloop']['total']);
?>
<?php if ($this->_sections['clloop']['first']): ?> 

<section id="level_2"><div class="container">
	<!-- h2 Heading from clloop.first -->
	<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['clloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['clloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['clloop']['iteration']++;
?>
		<?php if (($this->_foreach['clloop']['iteration'] <= 1)): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h2><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h2><?php endif; ?>
			<?php else: ?>
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h2><?php echo $this->_tpl_vars['block']['title']; ?>
</h2><?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<div class="row">
		<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['clloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['clloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['clloop']['iteration']++;
?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
				<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">
					<?php if (! ($this->_foreach['clloop']['iteration'] <= 1)): ?>
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h3><?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php else: ?>
				<div class="span2">
					<?php if (! ($this->_foreach['clloop']['iteration'] <= 1)): ?>
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo $this->_tpl_vars['block']['title']; ?>
</h3><?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['block']['content']; ?>

				</div>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div><!-- /container -->
</section>

<?php endif; ?>
<?php endfor; endif; ?>

<?php unset($this->_sections['crloop']);
$this->_sections['crloop']['loop'] = is_array($_loop=$this->_tpl_vars['xoops_crblocks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['crloop']['name'] = 'crloop';
$this->_sections['crloop']['show'] = true;
$this->_sections['crloop']['max'] = $this->_sections['crloop']['loop'];
$this->_sections['crloop']['step'] = 1;
$this->_sections['crloop']['start'] = $this->_sections['crloop']['step'] > 0 ? 0 : $this->_sections['crloop']['loop']-1;
if ($this->_sections['crloop']['show']) {
    $this->_sections['crloop']['total'] = $this->_sections['crloop']['loop'];
    if ($this->_sections['crloop']['total'] == 0)
        $this->_sections['crloop']['show'] = false;
} else
    $this->_sections['crloop']['total'] = 0;
if ($this->_sections['crloop']['show']):

            for ($this->_sections['crloop']['index'] = $this->_sections['crloop']['start'], $this->_sections['crloop']['iteration'] = 1;
                 $this->_sections['crloop']['iteration'] <= $this->_sections['crloop']['total'];
                 $this->_sections['crloop']['index'] += $this->_sections['crloop']['step'], $this->_sections['crloop']['iteration']++):
$this->_sections['crloop']['rownum'] = $this->_sections['crloop']['iteration'];
$this->_sections['crloop']['index_prev'] = $this->_sections['crloop']['index'] - $this->_sections['crloop']['step'];
$this->_sections['crloop']['index_next'] = $this->_sections['crloop']['index'] + $this->_sections['crloop']['step'];
$this->_sections['crloop']['first']      = ($this->_sections['crloop']['iteration'] == 1);
$this->_sections['crloop']['last']       = ($this->_sections['crloop']['iteration'] == $this->_sections['crloop']['total']);
?>
<?php if ($this->_sections['crloop']['first']): ?> 

<section id="level_3"><div class="container">
	<!-- h2 Heading from crloop.first -->
	<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['crloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['crloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['crloop']['iteration']++;
?>
		<?php if (($this->_foreach['crloop']['iteration'] <= 1)): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h2><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h2><?php endif; ?>
			<?php else: ?>
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h2><?php echo $this->_tpl_vars['block']['title']; ?>
</h2><?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<div class="row">
		<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['crloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['crloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['crloop']['iteration']++;
?>
			<?php if (! ($this->_foreach['crloop']['iteration'] <= 1)): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
					<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h3><?php endif; ?>
						<?php echo $this->_tpl_vars['block']['content']; ?>

					</div>
				<?php else: ?>
					<div class="span2">
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo $this->_tpl_vars['block']['title']; ?>
</h3><?php endif; ?>
						<?php echo $this->_tpl_vars['block']['content']; ?>

					</div>
				<?php endif; ?>
			<?php else: ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
					<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
">
						<?php echo $this->_tpl_vars['block']['content']; ?>

					</div>
				<?php else: ?>
					<div class="span2">
						<?php echo $this->_tpl_vars['block']['content']; ?>

					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div><!-- /container -->
</section>

<?php endif; ?>
<?php endfor; endif; ?>