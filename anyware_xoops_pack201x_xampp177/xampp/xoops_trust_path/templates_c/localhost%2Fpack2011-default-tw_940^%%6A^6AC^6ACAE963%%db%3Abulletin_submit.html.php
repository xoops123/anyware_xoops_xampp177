<?php /* Smarty version 2.6.26, created on 2012-09-01 07:19:57
         compiled from db:bulletin_submit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoopsdhtmltarea', 'db:bulletin_submit.html', 28, false),array('modifier', 'str_replace', 'db:bulletin_submit.html', 142, false),)), $this); ?>
<?php if ($this->_tpl_vars['preview']['title']): ?>
<table class="outer">
  <tbody>
  <tr><td class="head"><?php echo $this->_tpl_vars['preview']['title']; ?>
</td></tr>
  <tr><td><?php echo $this->_tpl_vars['preview']['hometext']; ?>
</td></tr>
  </tbody>
</table>
<br />
<?php endif; ?>

<h2><?php echo @_MD_SUBMITNEWS; ?>
</h2>

<form name="storyform" id="storyform" action="?page=submit" method="post" onsubmit="return xoopsFormValidate_storyform();">
<?php echo $this->_tpl_vars['gticket']; ?>

<?php if ($this->_tpl_vars['storyid']): ?><input type="hidden" name="storyid" value="<?php echo $this->_tpl_vars['storyid']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['return']): ?><input type="hidden" name="return" value="<?php echo $this->_tpl_vars['return']; ?>
"/><?php endif; ?>
<div align="left">
	     <h3><?php echo @_MD_TITLE; ?>
</h3>
     <p><input type="text" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" size="50" maxlength="80" /></p>
     <h3><?php echo @_MD_THESCOOP; ?>
</h3>
     <div id="area_dhtmltarea">
          <label>
		  <input type="checkbox" onclick="var pre=xoopsGetElementById('text_bbcode_buttons_pre');var post=xoopsGetElementById('text_bbcode_buttons_post');if(this.checked){pre.style.display='block';post.style.display='block'}else{pre.style.display='none';post.style.display='none'};" />
          <?php echo @_MD_INPUTHELPER; ?>

          </label>
          <br />
          <?php echo smarty_function_xoopsdhtmltarea(array('name' => 'text','cols' => $this->_tpl_vars['bulletin_post_tray_col'],'rows' => $this->_tpl_vars['bulletin_post_tray_row'],'value' => $this->_tpl_vars['text'],'pre_style' => "display:none;width: 95%; height: auto;",'post_style' => "display:none;width: 95%; height: auto;"), $this);?>

     </div>
     <?php if ($this->_tpl_vars['use_fckeditor'] && $this->_tpl_vars['common_fck_installed'] && $this->_tpl_vars['xcode'] != '1' && $this->_tpl_vars['br'] != '1' && $this->_tpl_vars['smiley'] != '1'): ?>
          <div id="area_fckxoops">
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/fckeditor.js"></script>
            <script type="text/javascript">
              function fckeditor_exec() {
                var oFCKeditor = new FCKeditor( "text_fck" , "100%" , "500" , "Default" );
                oFCKeditor.BasePath = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/";
                oFCKeditor.ReplaceTextarea();
              }
            </script>
            <textarea id="text_fck" name="text_fck"><?php echo $this->_tpl_vars['text']; ?>
</textarea>
            <script>
              fckeditor_exec();
              xoopsGetElementById('area_dhtmltarea').style.display='none';
            </script>
          </div>
          <label>
          <input type="checkbox" name="using_fck" checked="checked" onclick="var td=xoopsGetElementById('area_dhtmltarea');var tf=xoopsGetElementById('area_fckxoops');if(this.checked){tf.style.display='block';td.style.display='none';}else{td.style.display='block';tf.style.display='none';};" />
          <?php echo @_MD_FCKXOOPS_ONOFF; ?>

          </label>
	<?php endif; ?>
    <div><?php echo @_MULTIPAGE; ?>
</div>
</div>
<div id="jquery-ui-accordion">
  <div align="center">

	<div class="jquery-ui-accordion-title"><?php echo @_MD_TOPIC; ?>
</div>
    <div class="jquery-ui-accordion-contents">
      <?php if ($this->_tpl_vars['storyid']): ?>
      	<input type="hidden" name="topicid" value="<?php echo $this->_tpl_vars['topicid']; ?>
"/>
      	<?php echo $this->_tpl_vars['topic_title']; ?>

	  <?php else: ?>
	    <?php echo $this->_tpl_vars['topic_selbox']; ?>

	  <?php endif; ?>&nbsp;
	  <?php echo @_MD_TOPIC_IMAGE; ?>
</td>
      <select name="topicimg">
          <option value="1"<?php if ($this->_tpl_vars['topicimg'] == 1): ?> selected="selected"<?php endif; ?>><?php echo @_MD_TOPIC_RIGHT; ?>
</option>
          <option value="2"<?php if ($this->_tpl_vars['topicimg'] == 2): ?> selected="selected"<?php endif; ?>><?php echo @_MD_TOPIC_LEFT; ?>
</option>
          <option value="0"<?php if ($this->_tpl_vars['topicimg'] == 0): ?> selected="selected"<?php endif; ?>><?php echo @_MD_TOPIC_DISABLE; ?>
</option>
      </select>
	</div>
      <?php if ($this->_tpl_vars['can_use_date']): ?>
      <div class="jquery-ui-accordion-title"><?php echo @_MD_PUBLISHED; ?>
</div>
      <div class="jquery-ui-accordion-contents">
          <label><input type="checkbox" value="1" name="autodate" <?php if ($this->_tpl_vars['autodate']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_SETDATETIME; ?>
</label>&nbsp;
          <span style="font-size:0.8em;"><?php echo @_MD_SETDATETIME_DESC; ?>
</span><br />
          <?php echo $this->_tpl_vars['post_date_selector']; ?>

 	  </div>
      <div class="jquery-ui-accordion-title"><?php echo @_MD_EXPIRED; ?>
</div>
      <div class="jquery-ui-accordion-contents">
          <label><input type="checkbox" value="1" name="autoexpdate" <?php if ($this->_tpl_vars['autoexpdate']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_SETEXPDATETIME; ?>
</label>&nbsp;
          <span style="font-size:0.8em;"><?php echo @_MD_SETEXPDATETIME_DESC; ?>
</span><br />
          <?php echo $this->_tpl_vars['expire_date_selector']; ?>

	  </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['use_relation']): ?>
      <div class="jquery-ui-accordion-title">
        <?php echo @_MD_RELATION; ?>

      </div>
      <div class="jquery-ui-accordion-contents">
        <div id="relation">
          <?php $_from = $this->_tpl_vars['relations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
            <input type="checkbox" name="storyidR[]" value="<?php echo $this->_tpl_vars['i']['linkedid']; ?>
" />
            <input type="hidden" name="titleR[]" value="<?php echo $this->_tpl_vars['i']['title']; ?>
" />
            <input type="hidden" name="dirnameR[]" value="<?php echo $this->_tpl_vars['i']['dirname']; ?>
" />
            <input type="hidden" name="storyidRH[]" value="<?php echo $this->_tpl_vars['i']['linkedid']; ?>
" />
            <?php echo $this->_tpl_vars['i']['title']; ?>
<br />
          <?php endforeach; endif; unset($_from); ?>
        </div>
        <input type="button" value="<?php echo @_MD_ADD_RELATION; ?>
" name="opensub" onclick="window.open('index.php?page=search','sub','width=400,height=500');">
        <input type="button" value="<?php echo @_DELETE; ?>
" name="updatevar" onclick="updateRelations('storyform', false)">
      </div>
    <?php endif; ?>
      <div class="jquery-ui-accordion-title">
        <?php echo @_OPTIONS; ?>

      </div>
      <div class="jquery-ui-accordion-contents">
        <div align="left">
        <?php if ($this->_tpl_vars['use_notify']): ?>
          <label><input type="checkbox" value="1" name="notifypub" <?php if ($this->_tpl_vars['notifypub']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_NOTIFYPUBLISH; ?>
</label><br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['use_html']): ?>
          <label><input type="checkbox" value="1" name="html" <?php if ($this->_tpl_vars['html']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_USE_HTML; ?>
</label><br />
        <?php endif; ?>
        <label><input type="checkbox" value="1" name="br" <?php if ($this->_tpl_vars['br']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_USE_BR; ?>
</label><br />
        <label><input type="checkbox" value="1" name="smiley" <?php if ($this->_tpl_vars['smiley']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_USE_SMILEY; ?>
</label><br />
        <label><input type="checkbox" value="1" name="xcode" <?php if ($this->_tpl_vars['xcode']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_USE_XCODE; ?>
</label><br />
        <label><input type="checkbox" value="1" name="block" <?php if ($this->_tpl_vars['block']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_DISP_BLOCK; ?>
</label><br />
        <label><input type="checkbox" value="1" name="ihome" <?php if ($this->_tpl_vars['ihome']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_PUBINHOME; ?>
</label><br />
        <?php if ($this->_tpl_vars['use_approve']): ?>
          <label><input type="checkbox" value="1" name="approve" <?php if ($this->_tpl_vars['approve']): ?>checked="checked"<?php endif; ?> /><?php echo @_MD_APPROVE; ?>
</label><br />
        <?php endif; ?>
        </div>
      </div>
  </div>
</div>
<input class="formButton" name="preview" id="preview" value="<?php echo @_PREVIEW; ?>
" type="submit" />&nbsp;
<input class="formButton" name="post" id="post" value="<?php echo @_MD_POST; ?>
" type="submit" />
</form>




<!-- Start Form Vaidation JavaScript //-->
<script type="text/javascript">
  function xoopsFormValidate_storyform() {
    myform = window.document.storyform;
    if ( myform.title.value == "" ) { window.alert("<?php echo ((is_array($_tmp='{0}')) ? $this->_run_mod_handler('str_replace', true, $_tmp, @_MD_TITLE, @_MD_ERROR_REQUIRED) : str_replace($_tmp, @_MD_TITLE, @_MD_ERROR_REQUIRED)); ?>
"); myform.title.focus(); return false; }
    return true;
  }
</script>
<!-- End Form Vaidation JavaScript //-->