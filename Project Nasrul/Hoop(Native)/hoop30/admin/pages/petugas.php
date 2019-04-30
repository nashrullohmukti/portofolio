<?php
/*include("../include/koneksi.php");*/
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>PETUGAS <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row bg-dark">
            <h3>DATA PETUGAS</h3>
          </div>
          <div class="row ptb10">

            <a href="#popup" class="tambah-prod">Tambah Data Petugas</a>
            <table class="table-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                      $query = mysql_query("SELECT * FROM petugas where id_rumkit=$id_rumkit");
                      while ($a = mysql_fetch_array($query)) {
                        echo "
                          <form method='post' action='../controller/proses.php?page=updatepetugas'>
                          <tr>
                            <td>$no</td>
                            <td>$a[NIP]</td>
                            <td>$a[username]</td>
                            <td>
                            <input type='hidden' name='nip' value='$a[NIP]'>
                            <input type='text' name='pass' value='$a[password]' placeholder='Username'></td>
                            <td>
                              <input type='submit' class='update' value=''>
                              <a href='../controller/proses.php?page=hapuspetugas&nip=$a[NIP]'><div class='delete'></div></a>
                            </td>
                          </tr>
                          </form>
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
        <form action="../controller/proses.php?page=inputpetugas" method="post" class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH PETUGAS</h2>
          <div class="input-group fsul" >
            <table style="width:100%">
            <input type="hidden" name="id_rumkit" <?php echo "value='".$id_rumkit."'";?>>
              <tr>
                <td><h5 class="fsul cwhite">NIP</h5></td>
                <td><input type="text" name="NIP" placeholder="NIP" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Username</h5></td>
                <td><input type="text" name="user" placeholder="Nama Petugas" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Password</h5></td>
                <td><input type="text" name="pass" placeholder="Password" required='required'></td>
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
 