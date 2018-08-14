<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <?php
    $pathing_styles = __DIR__ . "/../../frontend/styles/";

  ?>
  <link type="text/css" rel="stylesheet" href="../../frontend/styles/navbar.css">
  <link type="text/css" rel="stylesheet" href="../../frontend/styles/style_login">
  <style>
    <?php
      if (isset($_GET['light_theme'])){
        include "../../frontend/styles/light_theme.css";
      }
      else if (isset($_GET['dark_theme'])){
        include '../../frontend/styles/dark_theme.css';
      }
      else if (isset($_GET['summer_theme'])){
        include '../../frontend/styles/summer_theme.css';
      }
      else {
        include '../../frontend/styles/light_theme.css';
      }
    ?>
  </style>
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
<?php include __DIR__ . "/../users/login_control.php";?>