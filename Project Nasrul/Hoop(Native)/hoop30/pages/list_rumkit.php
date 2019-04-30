<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
  <link rel="icon" type="text/css" href="../img/logo2.png">
    <link rel="stylesheet" type="text/css" href="../css/menu_sideslide.css" />
      <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/new-css.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>
  <body>
      <div class="wrap-full">
        <div class="row headerr" style="background-color:#242E32">
          <div class="wrap">
            <div class="nav-kiri">
              <img src="../img/logo.png" class="img-responsive" style="height:50px">
            </div>
            <div class="nav-kanan">
            <button id="open-button">FILTER</button>
              <a href="phpsqlsearch_map.html"><div class="menu-nav">MAPPING</div></a>
              <a href=""><div class="menu-nav">FILTER</div></a>
            </div>
            <div class="nav-baru">
              <a href=""><div class="menunya">HOME</div></a>
              <a href=""><div class="menunya">MAPPING</div></a>
            </div> 
          </div>
          
        </div> 
           <div id="navigasi">
              <a href=""><div class="menu-nav2">TEMUKAN RUMAH SAKIT</div></a>
              <a href=""><div class="menu-nav2">LIST RUMAH SAKIT</div></a>
              <a href=""><div class="menu-nav2">ABOUT</div></a>
              <a href=""><div class="menu-nav2">LOGIN</div></a>
          </div>  
      <?php include("../include/sidebar2.php");?>
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