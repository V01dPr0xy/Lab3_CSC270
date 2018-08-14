<div class="navbar">
  <?php include __DIR__ . "/../dbconfig.php"; ?>
  <?php
    $query = "select * from header";
    $result = $mysqli->query($query);
    $num_results = $result->num_rows;
    if ($num_results > 0){
      while ($row = $result->fetch_assoc()) {
        extract($row);
        echo "<div class='dropdown'>";
        echo "<button class='dropbtn'>".$Header_name."</button>";
            
        $query2 = "select * from pages where Header_ID = '$ID'";
        $result2 = $mysqli->query($query2);
        $num_results2 = $result2->num_rows;
        echo "<div class='dropdown-content'>";
        if ($num_results > 0){
          while ($row2 = $result2->fetch_assoc()) {
            extract($row2);
            echo "<a href='../../backend/crud-operation/load_page.php?id={$ID}'>".$Name."</a>";
            }
          echo "</div>";
        }
          echo "</div>";
        }
      }
      ?>
  <div class="dropdown">
    <button class="dropbtn">Themes
      <i class="theme_members"></i>
    </button>
    <div class="dropdown-content">
      <form>
        <input name="light_theme" type="submit" value="Light">
      </form>
      <form>
        <input name="dark_theme" type="submit" value="Dark">
      </form>
      <form>
        <input name="summer_theme" type="submit" value="Summer">
      </form>
    </div>
  </div>
  <!--Check if the user is logged in-->
  <?php 
    
  ?>

  <a id="login" href="users/login.php">Log in</a>
</div>