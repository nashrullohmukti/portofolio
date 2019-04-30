<?php
/*include("../include/koneksi.php");*/
?>
    <div class="wrap-content" style="background-color:#ECF0F5">
      <div class="wrap-small" style="margin:0px">
        <!-- Content Header (Page header) -->
        <section>
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
        </section>
         <!-- Main content -->
        <section>
          <div class="row">
            <div class="w25 bg-tos2 d3">
              <div class="desdiv">
                 <h4>Gedung</h4>
                 <h2 class="mt-5">24</h2>
               </div>
               <div class="icodiv">
                 <img src="../img/edit.png" width="80%" class="img-responsive">
               </div>
               <div class="add">
                 <form>
                   <input type="text" name="" placeholder="Nama Gedung">
                   <input type="submit" value="+">
                 </form>
               </div>
            </div><!-- /.col -->
            <div class="w5 bg-dark d6">
              <div class="desdiv">
                 <h4>Alat Kelengkapan</h4>
                 <h2 class="mt-5">24</h2>
               </div>
               <div class="icodiv">
                 <img src="../img/edit.png" width="80%"  class="img-responsive">
               </div>
               <div class="add">
                 <form>
                   <input type="text" name="" placeholder="Nama Alat">
                   <input type="submit" value="+">
                 </form>
               </div>
            </div><!-- /.col -->
            <div class="w25 bg-tos3 d3">
              <div class="desdiv">
                 <h4>Spesialis</h4>
                 <h2 class="mt-5">24</h2>
               </div>
               <div class="icodiv">
                 <img src="../img/edit.png" width="80%" class="img-responsive">
               </div>
               <div class="add">
                 <form>
                   <input type="text" name="" placeholder="Nama Spesialis">
                   <input type="submit" value="+">
                 </form>
               </div>
            </div><!-- /.col -->
            <div class="w25 bg-gray4 d3">
              <div class="desdiv">
                 <h4>Petugas</h4>
                 <h2 class="mt-5">24</h2>
               </div>
               <div class="icodiv">
                 <img src="../img/edit.png" width="80%" class="img-responsive">
               </div>
               <div class="read">
                 <?php
                 for ($i=0; $i < 6; $i++) { 
                   ?>
                 <h5>Supriyatba<a href="" style="float:right"><img src="../img/delete.png" width="25px" height="20px"></a></h5>
                 <?php } ?>
               </div>
               <a  href="#popup"><div class="addp">TAMBAH PETUGAS</div></a>
            </div><!-- /.col -->
            <div class="w25" style="padding:0px !important">
              <div class="w85 bg-tos d3">
                <div class="desdiv">
                   <h4>Ruangan</h4>
                   <h2 class="mt-5">24</h2>
                 </div>
                 <div class="icodiv">
                   <img src="../img/edit.png" width="80%" class="img-responsive">
                 </div>
                 <a href="#popup2"><div class="addp">TAMBAH RUANGAN</div></a>
              </div><!-- /.col -->
              <a href=""><div class="w85 bg-gray3 d3" style="height:117px;">
                <h1>INFO RUMAH SAKIT</h1>
              </div><!-- /.col -->
              </a>
              </div>
              <div class="d6" style="width:48%;float:left;margin:0px !important;min-height:284px;background-image:url('../img/1.jpg')">
                
              </div><!-- /.col -->
              </div>
            </section><!-- /.content --> 
        </div>
        <div class="popup-wrapper" id="popup">
      <div class="popup-container">
        <form action="proses/proses_bahan.php?page=add" method="post" class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH PETUGAS</h2>
          <div class="input-group fsul" >
            <table style="width:100%">
              <tr>
                <td><h5 class="fsul cwhite">NIP</h5></td>
                <td><input type="text" name="nip" placeholder="NIP" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Nama Petugas</h5></td>
                <td><input type="text" name="Petugas" placeholder="Nama Petugas" required='required'></td>
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
    <div class="popup-wrapper" id="popup2">
      <div class="popup-container">
        <form action="proses/proses_bahan.php?page=add" method="post" class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH RUANGAN</h2>
          <div class="input-group fsul" >
            <table style="width:100%">
              <tr>
                <td><h5 class="fsul cwhite">Gedung</h5></td>
                <td><select name="gedung" class="form-control">
                <option value="">Gedung A</option>
                <option value="">Gedung B</option>
                <option value="">Gedung C</option>
              </select></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Nama Ruangan</h5></td>
                <td><input type="text" name="nama" placeholder="Nama Ruangan" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Jumlah Kasur</h5></td>
                <td><input type="text" name="jml" placeholder="Jumlah Kasur" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Kelas</h5></td>
                <td><select name="kelas"  class="form-control">
                <option value="">Kelas A</option>
                <option value="">Kelas B</option>
                <option value="">Kelas C</option>
              </select></td>
              </tr>
              <tr>
                <td><h5 class="fsul">Harga</h5></td>
                <td><input type="text" name="harga" placeholder="Harga" required='required'></td>
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