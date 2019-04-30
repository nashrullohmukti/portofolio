<?php
session_name("loginpetugas");
session_start();
$user = $_SESSION['username'];
include("../controller/conn.php");
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>RUANGAN <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row ptb10">
            <form>
              <div class="w9">
                <input type="text" name="cari" placeholder="Tulis nama ruangan.." class="form-control">
              </div>
              <div class="w1">
                <input type="submit" value="CARI" class="btn-simpan">
              </div>
            </form>
            <?php

               $q = mysql_query("select * from petugas where username='$user'");
               $a= mysql_fetch_array($q);
               $qA = mysql_query("select * from gedung where id_rumkit='$a[id_rumkit]'");
               while ($aA= mysql_fetch_array($qA)) {
              echo '<a href="index.php?page=ruangan-list&id_gedung='.$aA['id'].'">';
               ?>
              <div class="w2 datged">
                <img src="../img/gedung.png" style="width:100%">
                <h4><?php echo $aA['nama_gedung']?></h4>
                <?php
                   $qB = mysql_query("select count(*) as jumlah from ruangan where id_gedung='$aA[id]'");
                   $aB= mysql_fetch_array($qB);
                ?>
                <p>Jumlah Ruangan : <?php echo $aB['jumlah']?></p>
              </div>
              </a>
              <?php } ?>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
  
  </div>
 