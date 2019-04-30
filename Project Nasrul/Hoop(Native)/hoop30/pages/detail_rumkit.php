<?php
  include("../controller/conn.php");
  /*$id_rumkit = $_GET['id'];*/
  $id_rumkit = 2;

?><html>
  <head>
    <title>HOOP | Detail Rumah Sakit</title>
    <link rel="icon" type="text/css" href="../img/logo2.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <?php include("../include/header-det.php");?>
    <div class="wrap">
      <div class="row ptb100">
        <div class="w55">
           <img src="../img/building.jpg" style="width:100%">

          <h3 class="jdlbg">KETERSEDIAAN RUANGAN</h3>
          <table class="table w10 ruang">
            <tr>
              <th align="left">Kelas</th>
              <th align="left">Ruangan</th>
              <th align="left">Harga</th>
            </tr>
            <?php
              $query = mysql_query("SELECT * FROM kelas where id_rumkit='$id_rumkit'");
              while ($a = mysql_fetch_array($query)) {       
              $id_kelas = $a['id'];  
              $q = mysql_query("SELECT count(*) as jumlah, jumlah_kosong, harga FROM ruangan where id_kelas='$id_kelas'");
              $aA = mysql_fetch_array($q);
            ?>
            <tr>
              <td><?php echo $a['nama_kelas'];?></td>
              <td><?php echo $aA['jumlah'];?> Kasur - <?php echo $aA['jumlah_kosong'];?> Kosong</td>
              <td><?php echo $aA['harga'];?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php
            $query = mysql_query("SELECT * FROM rumkit where id='$id_rumkit'");
            $a = mysql_fetch_array($query);             
        ?>
        <div class="w4">
          <h1 class="rumkit">RUMAH SAKIT</h1>
          <h1 class="nmrumkit"><?php echo $a['nama'];?></h1>
          <p class="almrs">
            <img src="../img/pin.png"><?php echo $a['alamat'];?>          </p>
          <h3 class="jdlbg2">SPESIALIS</h3>
          <table class="table w10" >
            <?php
              $query = mysql_query("SELECT * FROM spesialis where id_rumkit='$id_rumkit'");
              while ($aB = mysql_fetch_array($query)) {       
            ?>
            <tr>
              <td><?php echo $aB['spesialis']?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
    </div>
    </div>
    <?php 
    
    include("../include/footer.php");
    ?>
  </body>
</html>