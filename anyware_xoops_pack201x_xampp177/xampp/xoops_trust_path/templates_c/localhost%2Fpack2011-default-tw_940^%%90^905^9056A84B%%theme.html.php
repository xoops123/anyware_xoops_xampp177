<?php /* Smarty version 2.6.26, created on 2012-09-01 07:10:13
         compiled from tw_940/theme.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'regex_replace', 'tw_940/theme.html', 14, false),array('modifier', 'basename', 'tw_940/theme.html', 30, false),array('modifier', 'dirname', 'tw_940/theme.html', 30, false),)), $this); ?>
<?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => (@XOOPS_THEME_PATH)."/".($this->_tpl_vars['xoops_theme'])."/xugj_assign_theme_language_inc.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => (@XOOPS_THEME_PATH)."/".($this->_tpl_vars['xoops_theme'])."/xugj_assign_theme.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => (@XOOPS_THEME_PATH)."/".($this->_tpl_vars['xoops_theme'])."/xugj_already_js.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?><?php echo '<!DOCTYPE html>'; ?>

<html lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" prefix="og: http://ogp.me/ns#">
<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@XOOPS_ROOT_PATH)."/common/ogp/meta_add.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/bootstrap-responsive.css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript"><?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_js'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\/\/\-\->|<!\-\-)/", "") : smarty_modifier_regex_replace($_tmp, "/(\/\/\-\->|<!\-\-)/", "")); ?>
</script>
<?php if (! $this->_tpl_vars['xcl22_jquery_is_already'] && ! $this->_tpl_vars['xugj_jquery_is_already']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-1.7.1.min.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['xoops_module_header']): ?><?php echo $this->_tpl_vars['xoops_module_header']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['xoops_block_header']): ?><?php echo $this->_tpl_vars['xoops_block_header']; ?>
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
modules.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
colors.css" charset="utf-8" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_redirect_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_ext_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="L<?php echo $this->_tpl_vars['xoops_showlblock']; ?>
R<?php echo $this->_tpl_vars['xoops_showrblock']; ?>
 <?php echo ''; ?><?php if (((is_array($_tmp=$_SERVER['SCRIPT_FILENAME'])) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp)) == "index.php" && ((is_array($_tmp=((is_array($_tmp=$_SERVER['SCRIPT_FILENAME'])) ? $this->_run_mod_handler('dirname', true, $_tmp) : dirname($_tmp)))) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp)) == ((is_array($_tmp=@XOOPS_ROOT_PATH)) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp))): ?><?php echo 'home'; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['xugj_trustdirname']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xugj_trustdirname']; ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['xoops_dirname'] == ""): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_dirname']; ?><?php echo ''; ?><?php else: ?><?php echo 'other'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?>

<div class="navbar navbar-fixed-top<?php if ($this->_tpl_vars['xoops_isadmin']): ?><?php if ($this->_tpl_vars['xoops_dirname'] == 'wordpress'): ?> fixed2<?php elseif ($this->_tpl_vars['xoops_dirname'] == 'xpress'): ?> fixed2<?php endif; ?><?php endif; ?>">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse collapse">
        <ul class="nav">
			<?php if ($this->_tpl_vars['menu0']['dirname'] == $this->_tpl_vars['xoops_dirname']): ?>
				<li class="active"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @_THEME_LANGUAGE_HOME_NAME; ?>
</a></li>
			<?php else: ?>
				<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @_THEME_LANGUAGE_HOME_NAME; ?>
</a></li>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['xugj_menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu0']):
?>
						<?php if ($this->_tpl_vars['menu0']['dirname'] == $this->_tpl_vars['xoops_dirname']): ?>
								<?php $this->assign('xugj_menus1', $this->_tpl_vars['menu0']['sub']); ?>
								<?php $this->assign('menu0_class', 's'); ?>
						<?php else: ?>
								<?php $this->assign('menu0_class', ""); ?>
						<?php endif; ?>
				<li<?php if ($this->_tpl_vars['menu0']['dirname'] == $this->_tpl_vars['xoops_dirname']): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['menu0']['dirname']; ?>
/<?php echo $this->_tpl_vars['menu0']['url']; ?>
"><?php echo $this->_tpl_vars['menu0']['name']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
	</div>
  </div>
</div>

<?php if ($this->_tpl_vars['xoops_dirname'] == ""): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_home.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_modules.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_cubelogin_block.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<footer id="footer">	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_theme'])."/theme_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</footer>

<div id="xugj_pm_new_message" class="top-right"></div>

</body>
</html>