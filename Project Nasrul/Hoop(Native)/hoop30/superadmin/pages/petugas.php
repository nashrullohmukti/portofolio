<?php
/*include("../include/koneksi.php");*/
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>ADMIN RUMAH SAKIT <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row bg-dark">
            <h3>DATA ADMIN RUMAH SAKIT</h3>
          </div>
          <div class="row ptb10">

            <a href="#popup" class="tambah-prod">Tambah Data Admin</a>
            <table class="table-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Rumah Sakit</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                      $query = mysql_query("SELECT * FROM user WHERE level='admin'");
                      while ($a = mysql_fetch_array($query)) {
                      $q = mysql_query("SELECT * FROM rumkit where id=$a[id_rumkit]");
                      $aa = mysql_fetch_array($q);
                        echo "
                          <tr>
                            <td>$no</td>
                            <td>$aa[nama]</td>
                            <td>$a[nama]</td>
                            <td>$a[username]</td>
                            <td>
                              <a href='../controller/proses.php?page=hapususer&id=$a[id]'><div class='delete'></div></a>
                            </td>
                          </tr>
                        ";
                         $no++; 
                      }
                    ?>   
                </tbody>
              </table>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
  <div class="popup-wrapper" id="popup">
      <div class="popup-container">
        <form action="../controller/proses.php?page=inputuser" method="post" class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH ADMIN RUMAH SAKIT</h2>
          <div class="input-group fsul" >
            <table style="width:100%">
              <tr>
                <td><h5 class="fsul cwhite">Rumah Sakit</h5></td>
                <td><select name="id_rumkit" style="width:95%;height:40px">
                  <?php
                    $a= mysql_query("SELECT * FROM rumkit");
                    while ($b = mysql_fetch_array($a)) {
                     echo "
                      <option value='$b[id]'>$b[nama]</option>
                     ";
                    }
                  ?>
                </select></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite">Nama Lengkap</h5></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Username</h5></td>
                <td><input type="text" name="username" placeholder="Username" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Password</h5></td>
                <td><input type="text" name="password" placeholder="Password" required='required'></td>
              </tr>
              <tr>
                <td colspan="2">
                <input type="submit" value="SIMPAN" name="save">
                </td>
              </tr>
            </table>
          </div>
        </form>
        <a class="popup-close" href="#closed">X</a>
      </div>
    </div>
  </div>
 