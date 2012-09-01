<?php /* Smarty version 2.6.26, created on 2012-09-01 07:07:48
         compiled from admin_tips.html */ ?>
<div class="tips">
<ul>
	<li><?php echo @_MI_XUPDATE_TEMP_PATH; ?>
 <?php echo $this->_tpl_vars['xupdate_writable']['path']; ?>

	<?php if ($this->_tpl_vars['xupdate_writable']['result'] == true): ?>
		(<span style="color:green;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_WRITABLE_RESULT; ?>
 OK</span>)
	<?php else: ?>
		(<span style="color:red;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_WRITABLE_RESULT; ?>
 NG</span>)
	<?php endif; ?>
	</li>
	<li>cURL Extension
	<?php if ($this->_tpl_vars['mod_config']['_CurlCheck']): ?>
		(<span style="color:green;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_EXTENSION_CHECK_RESULT; ?>
 OK</span>)
	<?php else: ?>
		(<span style="color:red;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_EXTENSION_CHECK_RESULT; ?>
 NG</span>)
	<?php endif; ?>
	</li>
	<li><?php echo $this->_tpl_vars['mod_config']['FTP_UserName']; ?>

	<?php if ($this->_tpl_vars['mod_config']['_FtpLoginCheck']): ?>
		(<span style="color:green;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_FTP_PASS_RESULT; ?>
 OK</span>)
	<?php else: ?>
		(<span style="color:red;font-weight:bold;"><?php echo @_AD_XUPDATE_LANG_FTP_PASS_RESULT; ?>
 NG</span>)
	<?php endif; ?>
	</li>
	<li><?php echo @_AD_XUPDATE_LANG_EXECUTION_TIME; ?>

	<?php if ($this->_tpl_vars['mod_config']['_ExecutionTime'] >= 300): ?>
		(<span style="color:green;font-weight:bold;"><?php echo $this->_tpl_vars['mod_config']['_ExecutionTime']; ?>
s OK</span>)
	<?php elseif ($this->_tpl_vars['mod_config']['_ExecutionTime'] == 0): ?>
		(<span style="color:green;font-weight:bold;"> OK</span>)
	<?php else: ?>
		(<span style="color:orange;"><span style="color:red;font-weight:bold;"><?php echo $this->_tpl_vars['mod_config']['_ExecutionTime']; ?>
s</span> <?php echo @_AD_XUPDATE_LANG_EXECUTION_TIME_NOTICE; ?>
</span>)
	<?php endif; ?>
	</li>
</ul>
</div>