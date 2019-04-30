<?php
include("../controller/conn.php");
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>INFORMASI RUMAH SAKIT <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="row">
          <?php
          $sql = mysql_query("SELECT * FROM rumkit WHERE id='2'");
          $a = mysql_fetch_array($sql);
        ?>
          <div class="row rumkit">
          <form action="../controller/proses.php?page=updaterumkit" method="post" enctype="multipart/form-data">
            <div class="w4">
              <img <?php echo "src='../img/rumkit/".$a['foto']."'";?> style="width:350px; heigth:auto;">
              <h5 class='fsul'>Foto</h5>
              <p><input type='file' name='gmb' placeholder='Foto' class='form-control' ></p>
              <input type="submit" value="SIMPAN">
             </div>
            <div class="w6">           
                <?php
                
                echo "
                  <input type='hidden' value='$a[id]' name='id'>
                  <h5 class='fsul'>Nama Rumah Sakit</h5>
                  <p><input type='text' name='nama' placeholder='Nama Rumah Sakit' class='form-control' value='$a[nama]'></p>
                  <h5 class='fsul'>Latitude</h5>
                  <p><input type='text' name='x' placeholder='Latitude' class='form-control' value='$a[lat]' disabled></p>
                  <h5 class='fsul'>Longitude</h5>
                  <p><input type='text' name='y' placeholder='Longitude' class='form-control' value='$a[lng]' disabled></p>
                  
                  <h5 class='fsul'>Alamat Rumah Sakit</h5>
                  <textarea name='alamat' class='form-control' >$a[alamat]</textarea>
                  <h5 class='fsul'>Status</h5>
                  <p><select name='status' class='form-control'>
                      <option value='$a[status]'>$a[status]</option>
                      <option value='Negeri'>Negeri</option>
                      <option value='Swasta'>Swasta</option>
                  </select></p>
                  </p>
                ";
                ?>
              
              </div>
            </form>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
</div>