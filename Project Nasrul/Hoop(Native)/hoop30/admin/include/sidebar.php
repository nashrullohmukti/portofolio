<?php
  $username = $_SESSION['username'];
  $query = mysql_query("SELECT * FROM user where username='$username'");
  $a = mysql_fetch_array($query);
  $id_rumkit = $a['id_rumkit'];
  $q = mysql_query("SELECT * FROM rumkit where id='$id_rumkit'");
  $aA = mysql_fetch_array($q);                
?>
<div class="bg-dark" style="width:250px;height:100%" id="sidebar">
  <img <?php echo "src='../img/rumkit/".$aA['foto']."'";?>  class="img-prof">
  <h5 class="tac cwhite"><?php echo $aA['nama'];?><a href=""><img src="../img/edit.png" width="20px"></a></h5>
  <h6 class="tac cgray2"><?php echo $aA['alamat'];?></h6>
  <ul class="sidebar-menu">
    <li class="bag1"><a href="index.php?page=dashboard">DASHBOARD</a></li>
    <li class="bag1">
      <a href="#"><span>DATA RUMAH SAKIT</span><span style="float:right;padding-right:10px;font-size:14pt">+</span></i></a>
        <ul class="treeview-menu bag2">
          <li><a href="index.php?page=rumkit">Info Rumah Sakit</a></li>
          <li><a href="index.php?page=gedung">Fasilitas</a></li>
          <li><a href="index.php?page=spesialis">Spesialis</a></li>
        </ul>
    </li>
    <li class="bag1"><a href="index.php?page=petugas">DATA PETUGAS</a></li>
    <li class="bag1"><a href="../controller/proses.php?page=logoutadm">LOGOUT</a></li>
  </ul>
</div>