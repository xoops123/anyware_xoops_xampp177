<?php /* Smarty version 2.6.26, created on 2012-09-01 07:11:02
         compiled from db:system_redirect.html */ ?>
<?php 
  if( ! headers_sent() ) {
    $_SESSION["redirect_message"] = $this->get_template_vars("message");
    header("Location: ".html_entity_decode($this->get_template_vars("url"),ENT_QUOTES));
    exit;
  }
 ?>