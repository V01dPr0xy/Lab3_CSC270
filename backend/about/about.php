<!Doctype html>
<html>
  <head>
    <style><?php include '../../frontend/styles/navbar.css'; ?></style>
    <style>
      <?php
        if (isset($_GET['light_theme'])){
          include '../../frontend/styles/light_theme.css';
        }
        elseif (isset($_GET['dark_theme'])){
          include '../../frontend/styles/dark_theme.css';
        }
        elseif (isset($_GET['summer_theme'])){
          include '../../frontend/styles/summer_theme.css';
        }
        else {
          include '../../frontend/styles/light_theme.css';
        }
      ?>
    </style>
  </head>
  <body>
    <?php include '../reusable_code/reusable_navbar.php'; ?>
  </body>
</html>