<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--Dont search engine index the Admin page-->
<meta name="robots" content="noindex">
<title>Admin</title>
<link rel="shortcut icon" href="<?php echo resource_url('/assets/images/fav-icon.png');?>">
<link rel="stylesheet" href="<?php echo resource_url('/assets/css/material.min.css');?>">
<style><?php $this->view('layouts/css');?></style>
<?php
/**
* CSS library for Admin embedding
*/
if (isset($css_lib)) {
    foreach($css_lib as $cs) {
        echo '<link rel="stylesheet" href="'.resource_url($cs).'">';
    }
}

/*
* class mdl-js-layout on header make tinymce doesnt work
* need to remove it to make it work
*/
if (isset($mdl_js_layout)) {
    if ($mdl_js_layout===false) {
        $mdl_js_layout = '';
    } else {
        $mdl_js_layout = 'mdl-js-layout';
    }
} else {
    $mdl_js_layout = 'mdl-js-layout';
}
?>
</head>
<body>
<div class="mdl-layout <?php echo $mdl_js_layout; ?> mdl-layout--fixed-header layout-container">
    <header class="mdl-layout__header mdl-color--white mdl-color-text--grey">
    <div class="mdl-layout__header-row top-border">
      <div class="logo">
          <i class="mdl-color-text--white">
              <svg style="width:60px;height:60px;" viewBox="0 0 24 24">
                   <path fill="#fff" d="M5,4H18V9H17L16,6H10.06L13.65,11.13L9.54,17H16L17,15H18V20H5L10.6,12L5,4Z" />
               </svg>
          </i>
      </div>
      &nbsp;
      <div class="mdl-layout-title">
          <span style="margin-left: 15px;" class="mdl-color-text--grey-800">Admin</span>
          <nav class="mdl-navigation" style="height: 36px;">
            <a class="mdl-navigation__link menu-link mdl-color-text--grey-700" href="<?php echo site_url('backend/post');?>">Post</a>
            <a class="mdl-navigation__link menu-link mdl-color-text--grey-700" href="<?php echo site_url('backend/signout');?>">Logout</a>
          </nav>
      </div>
      <div class="mdl-layout-spacer"></div>
    </div>
  </header>
   <main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone inner-cell-container mobile-cell-container">
            <div class="mdl-grid">
