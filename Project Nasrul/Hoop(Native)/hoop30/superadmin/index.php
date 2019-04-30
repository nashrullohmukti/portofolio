<?php 
    session_name("loginuser");
    session_start();
    if(empty($_SESSION['username'])){
          header('location:../pages/login_sup.php');
    }
    include("../controller/conn.php");
?>
  <html>
  <head>
    <title>HOOP | Halo Superadmin!</title>
    <link rel="stylesheet" type="text/css" href="../css/menu_sideslide.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style_backend.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
  </head>
  <body>
    <div class="wrap-full">
      <div class="wrap-content bg-tos3" style="position:fixed;z-index:10">
        <div id="navigasi">
          <button id="open-button" class="menu-nav2">MENU</button>
          <a href="../controller/proses.php?page=logoutadm"><div class="menu-nav2">LOGOUT</div></a>
        </div>
      </div>
      <?php include("include/sidebar.php");?>
    
    <div class="menu-wrap">
        <nav class="menu">
          <div class="icon-list">
            <?php include("include/sidebar.php");?>
          </div>
        </nav>
      </div>
     
      <div class="content-wrap" style="height:auto">
        <div class="content" style="margin-top:50px;">

          <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          switch ($_GET['page']) {
            case 'dashboard':
              include("pages/main.php");
            break;
            case 'rumkit':
              include("pages/rumkit.php");
            break;
            case 'petugas':
              include("pages/petugas.php");
            break;
            default:
              include("pages/main.php");
            break;
          }
        ?>
            
        </div>
      </div><!-- /content-wrap -->
    </div>
    <script src="../js/classie.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>