<?php
  $username = $_SESSION['username'];
  $query = mysql_query("SELECT * FROM petugas where username='$username'");
  $a = mysql_fetch_array($query);
  $id_rumkit = $a['id_rumkit'];
  $q = mysql_query("SELECT * FROM rumkit where id='$id_rumkit'");
  $aA = mysql_fetch_array($q);                
?>
<div class="bg-dark" style="width:250px;height:100%" id="sidebar">
  <img src="../img/user.png"  class="img-prof">
  <h4 class="tac cwhite"><?php echo $a['username'];?><a href=""><img src="../img/edit.png" width="20px"></a></h4>
  <h5 class="tac cgray">NIP. <?php echo $a['NIP'];?></h5>
  <h6 class="tac cgray2"><?php echo $aA['nama'];?></h6>
  <h6 class="tac cgray2"><?php echo $aA['alamat'];?></h6>
  <ul class="sidebar-menu">
    <li class="bag1"><a href="index.php?page=dashboard">DASHBOARD</a></li>
    <li class="bag1">
      <a href="index.php?page=ruangan"><span>DATA RUANGAN</span></a>
    </li>
    <li class="bag1"><a href="index.php?page=profil">PROFIL</a></li>
    <li class="bag1"><a href="../controller/proses.php?page=logoutpetugas">LOGOUT</a></li>
  </ul>
</div>