<?php
  $username = $_SESSION['username'];
  $queryatas = mysql_query("SELECT * FROM user where username='$username'");
  $aatas = mysql_fetch_array($queryatas);
  $id_rumkit = $aatas['id_rumkit'];
  $qatas = mysql_query("SELECT * FROM rumkit where id='$id_rumkit'");
  $aAatas = mysql_fetch_array($qatas);                
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>Fasilitas Rumah Sakit <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w5 bg-white gedung">
          <div class="row bg-tos2">
            <h3>DATA GEDUNG</h3>
          </div>
          <div class="row ptb10">
            <form method="post" action="../controller/proses.php?page=inputgedung">
              <table>
                <tr>
                  <td width="150px">Nama Gedung</td>
                  <input type='hidden' <?php echo "value='".$aAatas['id']."'";?> name='id_rumkit'>
                  <td><input type="text" name="nama" placeholder="Nama Gedung" class="form-control"></td>
                  <td class="tac"><button type="submit" value="simpan" class="btn-simpan"> SIMPAN</button></td>
                </tr>
              </table>
            </form>
            <table class="table-data">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Gedung</th>
                  <th>Pilihan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = mysql_query("SELECT * FROM gedung where id_rumkit='$id_rumkit'");
                  while ($a = mysql_fetch_array($query)) {
                  echo "
                  <form action='../controller/proses.php?page=updategedung&id=$a[id]' method='post'>
                    <tr>
                      <td class='tac'>$a[id]</td>
                      <td><input type='text' name='nama_gedung' value='$a[nama_gedung]' placeholder='Nama Gedung'></td>
                      <td class='tac'>
                        <input type='submit' class='update' value=''>
                        <a href='../controller/proses.php?page=deletegedung&id=$a[id]'><div class='delete'></div></a>
                      </td>
                    </tr>
                  </form>
                    ";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="w5 bg-white gedung" style="margin-left:10px">
          <div class="row bg-gray3">
            <h3>DATA KELAS</h3>
          </div>
          <div class="row ptb10">
            <form method="post" action="../controller/proses.php?page=inputkelas">
              <table>
                <tr>
                  <td width="150px">Nama Kelas</td>
                  <input type='hidden' <?php echo "value='".$aAatas['id']."'";?> name='id_rumkit'>
                  <td><input type="text" name="nama" placeholder="Nama Kelas" class="form-control"></td>
                  <td><button type="submit" value="simpan" class="btn-simpan"> SIMPAN</button></td>
                </tr>
              </table>
            </form>
            <table  class="table-data">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Jenis Kelas</th>
                  <th>Pilihan</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysql_query("SELECT * FROM kelas where id_rumkit='$id_rumkit'");
                  while ($a = mysql_fetch_array($query)) {
                  echo "
                  <form action='../controller/proses.php?page=updatekelas&id=$a[id]' method='post'>
                    <tr>
                      <td class='tac'>$no</td>
                      <td><input type='text' name='nama_kelas' value='$a[nama_kelas]' placeholder='Nama Kelas'></td>
                      <td>
                        <input type='submit' class='update' value=''>
                        <a href='../controller/proses.php?page=hapuskelas&id=$a[id]'><div class='delete'></div></a>
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
        <div class="w9 bg-white ruangan">
          <div class="row bg-dark">
            <h3>DATA RUANGAN</h3>
          </div>
          <div class="row ptb10">
            <a href="#popup" class="tambah-prod">Tambah Data Ruangan</a>
                   <table class="table-data">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Ruangan</th>
                        <th>Jumlah Kasur</th>
                        <th>Gedung</th>
                        <th>Kelas</th>
                        <th>Harga</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = mysql_query("SELECT *,r.id = idr FROM ruangan r,gedung g, rumkit rs where r.id_gedung = g.id and g.id_rumkit=rs.id and rs.id='$id_rumkit'");
                        while ($a = mysql_fetch_array($query)) {
                          echo "

                          <form action='../controller/proses.php?page=updateruangan&id=$a[idrum]' method='post'>
                            <tr>
                              <td class='tac'>$a[idr]</td>
                              <td><input type='text' name='nama' value='$a[nama]' placeholder='Nama Ruangan'></td>
                              <td><input type='number' name='jumlah_kasur' value='$a[jumlah_kasur]' placeholder='Jumlah Kasur'></td>
                              <td><select name='id_gedung' class='form-control'>
                               ";
                                $q1 = mysql_query("SELECT * FROM gedung");
                                while ($c = mysql_fetch_array($q1)) {
                                  if ($c["id"] == $a["id_gedung"]) {
                                   echo "<option value='$c[id]' .selected>$c[nama_gedung]</option>";
                                  }
                                  else {
                                  echo "<option value='$c[id]'>$c[nama_gedung]</option>";
                                }
                                }
                               echo "
                             </select></td>
                              <td><select name='id_kelas' class='form-control'>
                               ";
                                $q1 = mysql_query("SELECT * FROM kelas");
                                while ($c = mysql_fetch_array($q1)) {
                                  if ($c["id"] == $a["id_kelas"]) {
                                   echo "<option value='$c[id]' .selected>$c[nama_kelas]</option>";
                                  }
                                  else {
                                  echo "<option value='$c[id]'>$c[nama_kelas]</option>";
                                }
                                }
                               echo "
                             </select></td>
                              <td><input type='text' name='harga' value='$a[harga]' placeholder='Harga'></td>
                              <td>
                               <input type='submit' class='update' value=''>
                                <a href='../controller/proses.php?page=hapusruangan&id=$a[id]'><div class='delete'></div></a>
                              </td>
                            </tr>
                          </form>
                          ";
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
        <form action='../controller/proses.php?page=inputruangan' method='post' class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH RUANGAN</h2>
          <div class="input-group fsul" >
            <table style="width:100%">
              <tr>
                <td><h5 class="fsul cwhite">Gedung</h5></td>
                <td><select name="id_gedung" class="form-control">
                <?php
                  $q1 = mysql_query("SELECT * FROM gedung where id_rumkit='$id_rumkit'");
                  while ($c = mysql_fetch_array($q1)) {
                    echo "<option value='$c[id]'>$c[nama_gedung]</option> ";
                  }
                ?>
              </select></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite cwhite">Nama Ruangan</h5></td>
                <td><input type="text" name="nama" class="form-control" placeholder="Nama Ruangan" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite cwhite">Jumlah Kasur</h5></td>
                <td><input type="text" name="jumlah_kasur" class="form-control" placeholder="Jumlah Kasur" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite cwhite">Kelas</h5></td>
                <td><select name="id_kelas"  class="form-control">
                <?php
                  $q1 = mysql_query("SELECT * FROM kelas where id_rumkit='$id_rumkit'");
                  while ($c = mysql_fetch_array($q1)) {
                    echo "<option value='$c[id]'>$c[nama_kelas]</option>";
                  }
                ?>
              </select></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite">Harga</h5></td>
                <td><input type="text" name="harga"  class="form-control" placeholder="Harga" required='required'></td>
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