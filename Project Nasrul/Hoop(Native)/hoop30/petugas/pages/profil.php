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
        <h1>PROFIL <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row ptb10">
            <div class="updprof">
                  <div class="w3 bg-gray3">
                    <img src="../img/user.png" style="width:100%">
                  </div>
                  <div class="w5" style="margin-left:20px">
                    <h2>UPDATE DATA PROFIL</h2>
                    <?php
                      $query = mysql_query("select * from petugas where username='$user'");
                      $a= mysql_fetch_array($query);
              
                    ?>
                    <form method="post" action="../controller/proses.php?page=updatepetugas">
                      <h4>NIP</h4>
                      <input type="text" name="nip" disabled placeholder="NIP" required="required"<?php echo 'value="'.$a['NIP'].'"';?> class="form-control">
                      <h4>Username</h4>
                      <input type="text" name="username" disabled placeholder="Username" required="required" <?php echo 'value="'.$a['username'].'"';?>class="form-control">
                      <h4>Password</h4>
                      <input type="password" name="pass"  placeholder="Password" required="required" <?php echo 'value="'.$a['password'].'"';?>class="form-control">
                      <input type="submit" value="SIMPAN">
                    </form>
                  </div>
                </div>
          </div>
        </div>
      </section><!-- /.content --> 
  </div>
  
  </div>
 