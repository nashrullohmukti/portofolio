<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/menu_sideslide.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/new-css.css">

  </head>
  <body>
      <div class="wrap-full">
        <!-- <div class="row bg-white headerr">
          <div class="wrap">
            <div class="nav-kiri">
              <img src="../img/logo.png" class="img-responsive" style="height:50px">
            </div>
            <div class="nav-kanan">
              <button id="open-button">MENU</button>
              <a href="../controller/proses.php?page=logoutadm">LOGOUT</a>
            </div>
          </div>
          
        </div>  -->
           <div id="navigasi">
              <a href=""><div class="menu-nav2">TEMUKAN RUMAH SAKIT</div></a>
              <a href=""><div class="menu-nav2">LIST RUMAH SAKIT</div></a>
              <a href=""><div class="menu-nav2">ABOUT</div></a>
              <a href=""><div class="menu-nav2">LOGIN</div></a>
          </div>  
      <?php include("include/sidebar.php");?>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="icon-list">
            <?php include("../include/sidebar.php");?>
          </div>
        </nav>
      </div>
     
      <div class="content-wrap">
        <div class="content">
            <?php include("../include/list.php");?>
        </div>
      </div><!-- /content-wrap -->
      </div>
      

    <script src="../js/classie.js"></script>
    <script src="../js/main.js"></script>
    
  </body>
</html>