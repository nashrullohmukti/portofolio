<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div class="bg-dark2" style="width:250px;" id="sidebar">
    
        <!-- <button class="close-button" id="close-button">Close Menu</button> -->
      <h2 class="fsul jdl-fil">FILTER</h2>
          <ul class="sidebar-menu">
            <li class="treeview bag1">
              <a href="#"><span>SPESIALIS</span><span style="float:right;padding-right:10px;font-size:14pt">+</span></i></a>
              <ul class="treeview-menu bag2">
               <li>Jantung <input type="checkbox" name="jantung"> </li>
                <li>Mata <input type="checkbox" name="mata"> </li>
                <li>THT <input type="checkbox" name="tht"> </li>
              </ul>
            </li>
            <li class="bag"><span>KOTA</span>
              <form action="" method="post" id="search-kota">
                <div style="float:left;width:90%">
                  <input type="text" name="cari" placeholder="Nama Kota" class="form-control">
                </div>
                <div style="float:left;">
                  <input type="submit" value="">
                </div>      
              </form>
            </li>
            <li class="bag"><span>HARGA</span>
              <form action="" method="post" id="search-harga">
                <div style="float:left;width:100%">
                  <input type="text" name="cari" placeholder="Maksimal harga" class="form-control">
                </div>
                <div style="float:left;width:87%">
                  <input type="submit" value="SUBMIT">
                </div>      
              </form>
            </li>
            
           
          </ul>
    </div>
  </body>
</html>