<?php
/*include("../include/koneksi.php");*/
?>
<head>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../js/jquery1.11.3.min.js"></script>
<script type="text/javascript">

var peta;
var pertama = 0;
var jenis = "jalan";
var judulx = new Array();
var desx = new Array();
var i;
var url;
var gambar_tanda ='../img/logo.png';
var markers = [];
function peta_awal(){
    var jakarta = new google.maps.LatLng(-7.2706094, 112.7611567);
    var petaoption = {
        zoom: 12,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
    });
    ambildatabase('awal');
}

$(document).ready(function(){
    $("#tutup").click(function(){
        $("#jendelainfo").fadeOut();
    });
});
function kasihtanda(lokasi){
  deleteMarkers();
    set_icon(jenis);
    tanda = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
    });
    markers.push(tanda);
    $("#x").val(lokasi.lat());
    $("#y").val(lokasi.lng());
}

function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }

    $("#x").val('');
    $("#y").val('');
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}

function set_icon(jenisnya){
    switch(jenisnya){
        case "jalan":
            gambar_tanda = '../img/icon.png';
            break;
        case "fasilitas":
            gambar_tanda = 'icon/fasilitas.png';
            break;
    }
}

function setjenis(jns){
    jenis = jns;
}

</script>
<style>
#jendelainfo{position:absolute;z-index:1000;top:100;
left:400;background-color:yellow;display:none;}
</style>
</head>
<body onLoad="peta_awal()">
<div class="wrap-content" style="background-color:#ECF0F5">
  <div class="wrap-small" style="margin:0px">
    <!-- Content Header (Page header) -->
      <section>
        <h1>RUMAH SAKIT <small>Control panel</small></h1>
      </section>
      <!-- Main content -->
       <section>
        <div class="w10 bg-white ruangan">
          <div class="row bg-dark">
            <h3>DATA RUMAH SAKIT</h3>
          </div>
          <div class="row ptb10">

            <a href="#popup" class="tambah-prod">Tambah Data Rumah Sakit</a>
            <table class="table-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                      $query = mysql_query("SELECT * FROM rumkit");
                      while ($a = mysql_fetch_array($query)) {
                        echo "
                          <tr>
                            <td>$no</td>
                            <td><img src='../img/rumkit/$a[foto]' style='width:120px'></td>
                            <td>$a[nama]</td>
                            <td>$a[lat]</td>
                            <td>$a[lng]</td>
                            <td>$a[alamat]</td>
                            <td>$a[status]</td>
                            <td>
                              <a href='../controller/proses.php?page=hapusrumkit&id=$a[id]'><div class='delete'></div></a>
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
        <form action="../controller/proses.php?page=inputrumkit" method="post" class="popup-form" enctype="multipart/form-data">
          <h2>TAMBAH DATA RUMAH SAKIT</h2>
          <div class="input-group fsul" >
            <table style="width:100%">              
              <tr>
                <div class='bungkuspeta'>
                  <div id='petaku' style='height:250px; width:100%;'></div>
                </div>
              </tr>
              <input type='hidden' id='x' name='x'>
              <input type='hidden' id='y' name='y'>
              <tr>
                <td><h5 class="fsul cwhite">Nama Rumah Sakit</h5></td>
                <td><input type="text" name="nama" placeholder="Nama Rumah Sakit" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite">Alamat</h5></td>
                <td><input type="text" name="alamat" placeholder="Alamat Rumah Sakit" required='required'></td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite">Status Rumah Sakit</h5></td>
                <td>
                <select name='status' style="color:black;">
                    <option name="pilih"></option>
                    <option value="negeri">Negeri</option>
                    <option value="swasta">Swasta</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><h5 class="fsul cwhite">Foto</h5></td>
                <td><input type="file" name="gmb" placeholder="Foto" required='required'></td>
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
 </body>