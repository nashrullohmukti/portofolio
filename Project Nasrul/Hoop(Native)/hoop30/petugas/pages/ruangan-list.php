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
               $id_gedung = $_GET['id_gedung'];
               $q = mysql_query("select * from ruangan where id_gedung='$id_gedung'");
               while ($a= mysql_fetch_array($q)) {
              echo '<a href="index.php?page=ruangan-det&id_ruangan='.$a['id'].'">';
               ?>
              <div class="w2 datged">
                <img src="../img/ruangan.png" style="width:100%">
                <h4><?php echo $a['nama']?></h4>
                <p>Jumlah Kasur : <?php echo $a['jumlah_kasur']?></p>
              </div>
              </a>
              <?php } ?>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
  
  </div>
 