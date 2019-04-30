<?php
  $username = $_SESSION['username'];
  $queryatas = mysql_query("SELECT * FROM user where username='$username'");
  $aatas = mysql_fetch_array($queryatas);
  $id_rumkit = $aatas['id_rumkit'];
?>
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>SPESIALIS <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row bg-tos2">
            <h3>DATA SPESIALIS</h3>
          </div>
          <div class="row ptb10">
            <form method="POST" action="../controller/proses.php?page=inputspesialis">
              <table style="width:100%">
                <tr>
                  <td width="20%">Nama Spesialis</td>
                  <td width="70%"><input type="text" name="spesialis" placeholder="Nama Spesialis" class="form-control"></td>
                  <td width="10%"><button type="submit" value="simpan" class="btn-simpan"> SIMPAN</button></td>
                </tr>
              </table>
            </form>
            <table class="table-data" style="width:60%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Spesialis</th>
                  <th>Pilihan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = mysql_query("SELECT * FROM spesialis WHERE id_rumkit=$id_rumkit");
                  while ($a = mysql_fetch_array($query)) {
                    echo "
                    <form action='../controller/proses.php?page=updatespesialis&id=$a[id]' method='post'>
                      <tr>
                        <td>$a[id]</td>
                        <td><input type='text' name='spesialis' value='$a[spesialis]' placeholder='Nama Spesialis'></td>
                        <td>
                          <input type='submit' class='update' value=''>
                          <a href='../controller/proses.php?page=hapusspesialis&id=$a[id]'><div class='delete'></div></a>
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
 