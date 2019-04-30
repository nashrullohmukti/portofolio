<?php
/*include("../include/koneksi.php");*/
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
            <div class="detail-ru">
                  <div class="w4 bg-gray">
                    <img src="../img/ruangan.png" style="width:100%">
                  </div>
                  <?php
                    $id_ruangan = $_GET['id_ruangan'];
                    $q = mysql_query("select * from ruangan where id='$id_ruangan'");
                    $a= mysql_fetch_array($q); 
                    $qA = mysql_query("select * from gedung where id='$a[id_gedung]'");
                    $aA= mysql_fetch_array($qA); 
                    $qB = mysql_query("select * from kelas where id='$a[id_kelas]'");
                    $aB= mysql_fetch_array($qB); 
                  ?>
                  <div class="w5" style="margin-left:20px;">
                    <h2>Ruangan <?php echo $a['nama']?></h2>
                    <h4>Lokasi : <?php echo $aA['nama_gedung']?></h4>
                    <h5>Kelas : <?php echo $aB['nama_kelas']?>&emsp;Jumlah Kasur : <?php echo $a['jumlah_kasur']?></h5>
                    <h5><?php echo $a['jumlah_kosong']?> Kosong</h5>
                    <h4>Update Jumlah Kasur Kosong</h4>
                    <form action="../controller/proses.php?page=updatekasur" method="post" class="upd-kasur">
                      <input type="hidden" <?php echo "value=".$a['id'].";";?> name="id" >
                      <input type="number" name="jumlah_kosong">
                      <input type="submit" value="SIMPAN" class="btn-simpan">
                    </form>
                  </div>
                </div>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
  
  </div>
 