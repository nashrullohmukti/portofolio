<html>
  <head>
    <link rel="icon" type="text/css" href="../img/logo2.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/new-css.css">
  </head>
  <body>
    <div class="wrap-full">
      <div class="row bg-black headerr">
        <div class="wrap">
          <div class="nav-kiri">
            <img src="../img/logo.png" class="img-responsive" style="height:50px">
          </div>
          <div class="nav-kanan">
          <button class="hide-mnu" id="hdmenu" onclick="javascript:openFilter();">FILTER</button>
            <a href=""><div class="menu-nav">LOGIN</div></a>
            <a href=""><div class="menu-nav">ABOUT</div></a>
            <a href=""><div class="menu-nav">LIST RUMAH SAKIT</div></a>
            <a href=""><div class="menu-nav">TEMUKAN RUMAH SAKIT</div></a>
          </div>
            <button id="menunya">fdfg</button> 
             
        </div>
      </div>
      <?php include("sidebar2.php");?>
    </div>
    <script type="text/javascript">
      /*$("#hdmenu").click(function(){
          //document.getElementById('sdmenu').style.margin-left= '250';
          //$("#sdmenu").style('margin-left','250');
       }); */ 
      function openFilter() {
        //document.getElementById('sdmenu').style.margin-left= 250px;
          /*document.getElementById("sdmenu").style.left=250;
          document.getElementById("sdmenu").style.transition=0.7;*/
          //document.getElementById("sdmenu").css("margin-left":"250px","transition":"0.7s");
          if (document.getElementById("sdmenu").style.left=-250) {
            document.getElementById("sdmenu").style.left=250;
          }else{
            document.getElementById("sdmenu").style.left=0;
          }
      }
    </script>
  </body>
</html>