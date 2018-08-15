<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <?php
    $pathing_styles = "/../styles/";

  ?>
  <link type="text/css" rel="stylesheet" href="../styles/navbar.css">
  <link type="text/css" rel="stylesheet" href="../styles/style_login">
  <style>
    <?php
    if($_SESSION['theme'] == "light"){
      include "../styles/light_theme.css";
    }
    else if($_SESSION['theme'] == "dark"){
      include '../styles/dark_theme.css';
    }
    else if($_SESSION['theme'] == "summer"){
      include '../styles/summer_theme.css';
    }
    
    if (isset($_POST['light_theme'])){
      include "../styles/light_theme.css";
      $_SESSION['theme'] = "light";
    }
    else if (isset($_POST['dark_theme'])){
      include '/../styles/dark_theme.css';
      $_SESSION['theme'] = "dark";
    }
    else if (isset($_POST['summer_theme'])){
      include '../styles/summer_theme.css';
      $_SESSION['theme'] = "summer";
    }
    else {
      include '../styles/light_theme.css';
      $_SESSION['theme'] = "light";
    }    
    ?>
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>