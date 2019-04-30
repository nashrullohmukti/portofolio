<?php 
  include("conn.php");
  function anti_injection($data){
    $filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter;
  }
  switch ($_GET['page']) {
    case 'loginpetugas':
          session_name("loginpetugas");
          session_start();

          $user = $_POST['user'];
          $pass = $_POST['pass'];

          $query = mysql_query("select * from petugas where username='$user' and password='$pass'");
            if(!$query){
              die('invalid query :' . mysql_error());
            }
            $cek = mysql_num_rows($query);
            if ($cek==0) {
              $url = $_SERVER['HTTP_REFERER'];
              header("location:$url");
          }
            else{
              $a= mysql_fetch_array($query);
              $_SESSION['username'] = $a['username'];
              $_SESSION['password'] = $a['password'];
              header("location:../petugas/index.php");
            }
    break;
    case 'loginuser':
          session_name("loginuser");
          session_start();

          $user = $_POST['user'];
          $pass = $_POST['pass'];

          $query = mysql_query("select * from user where username='$user' and password='$pass'");
            if(!$query){
              die('invalid query :' . mysql_error());
            }
            $cek = mysql_num_rows($query);
            if ($cek==0) {
              $url = $_SERVER['HTTP_REFERER'];
              header("location:$url");
          }
            else{
              $a= mysql_fetch_array($query);
              $_SESSION['username'] = $a['username'];
              $_SESSION['password'] = $a['password'];
              $_SESSION['level'] = $a['level'];
              if ($_SESSION['level'] == 'admin') {
                header("location:../admin/index.php");
              }else{
                header("location:../superadmin/index.php");
              }
              
            }
      break;
    case 'logoutpetugas':
      session_name("loginpetugas");
      session_start();

      if(isset($_SESSION['username'])){
          unset($_SESSION['username']);
          unset($_SESSION['password']);
        }
      $url = $_SERVER['HTTP_REFERER'];
        session_destroy();
        header("location:$url");
        break;
      case 'logoutadm':
      session_name("loginuser");
      session_start();

      if(isset($_SESSION['username'])){
          unset($_SESSION['username']);
          unset($_SESSION['password']);
          unset($_SESSION['level']);
        }
      $url = $_SERVER['HTTP_REFERER'];
        session_destroy();
        header("location:$url");
        break;

    //USER NIH
    case 'inputuser':
        $nama = $_POST['nama'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $level = "admin";
        $id_rumkit = $_POST['id_rumkit'];
        $query = mysql_query("insert into user values('','$nama','$user', '$pass', '$level', '$id_rumkit')");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      break;
    case 'hapususer':
        $id=$_GET["id"];
        mysql_query("delete from user where id=$id");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      break;
    case 'updateuser':
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $level = $_POST['level'];
      $query = mysql_query("update user set nama='$nama', username='$user', password='$pass', level='$level' where id='$id'");
      header("location:../inputuser.php");
      break;

    //PETUGAS
    case 'inputpetugas':
      $NIP = $_POST['NIP'];
      $id_rumkit = $_POST['id_rumkit'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $query = mysql_query("insert into petugas values('$NIP','$id_rumkit', '$user', '$pass')");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;

    case 'updatepetugas':
      $pass = $_POST['pass'];
      $nip = $_POST['nip'];
      $user = $_POST['user'];
      $query = mysql_query("update petugas set password='$pass' where NIP='$nip'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;

    case 'hapuspetugas':
        $nip=$_GET["nip"];
        mysql_query("delete from petugas where NIP='$nip'");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      break;


    //GEDUNG
    case 'inputgedung':
      $id_rumkit = $_POST['id_rumkit'];
      $nama = $_POST['nama'];
      $query = mysql_query("insert into gedung values('','$id_rumkit', '$nama')");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");  
      break;
    case 'updategedung':
      $id = $_GET['id'];
      $nama = $_POST['nama_gedung'];
      $query = mysql_query("update gedung set nama_gedung='$nama' where id='$id'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'deletegedung':
        $id=$_GET["id"];
        mysql_query("delete from gedung where id='$id'");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      break;


    //KELAS
    case 'inputkelas':
      $id_rumkit = $_POST['id_rumkit'];
      $nama = $_POST['nama'];
      $query = mysql_query("insert into kelas values('','$nama', '$id_rumkit')");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");  
      break;
    case 'updatekelas':
      $id = $_GET['id'];
      $nama = $_POST['nama_kelas'];
      $query = mysql_query("update kelas set nama_kelas='$nama' where id='$id'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'hapuskelas':
      $id=$_GET["id"];
      mysql_query("delete from kelas where id='$id'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;


    //RUANGAN
    case 'inputruangan':
      $id_gedung = $_POST['id_gedung'];
      $nama = $_POST['nama'];
      $jumlah_kasur = $_POST['jumlah_kasur'];
      $id_kelas = $_POST['id_kelas'];
      $harga = $_POST['harga'];
      $query = mysql_query("insert into ruangan values('','$id_gedung', '$nama', '$jumlah_kasur', '$id_kelas', '$harga','$jumlah_kasur')");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'updateruangan':
      $id = $_GET['id'];
      $id_gedung = $_POST['id'];
      $nama = $_POST['nama'];
      $jumlah_kasur = $_POST['jumlah_kasur'];
      $id_gedung = $_POST['id_gedung'];
      $id_kelas = $_POST['id_kelas'];
      $harga = $_POST['harga'];
      $query = mysql_query("update ruangan set id_gedung='$id_gedung', nama='$nama', jumlah_kasur='$jumlah_kasur', id_kelas='$id_kelas', harga='$harga'  where id='$id'");
      if (!$query) {
        mysql_error();
      }
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'updatekasur':
      $id = $_POST['id'];
      $jumlah_kosong = $_POST['jumlah_kosong'];
      $query = mysql_query("update ruangan set jumlah_kosong='$jumlah_kosong' where id='$id'");
      if (!$query) {
        mysql_error();
      }
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;

    case 'hapusruangan':
      $id=$_GET["id"];
      mysql_query("delete from ruangan where id='$id'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;


    //RUMKIT
    case 'inputrumkit':
      include("conn.php");  
      $nama = anti_injection($_POST['nama']);
      $lat = anti_injection($_POST['x']);
      $lng = anti_injection($_POST['y']);
      $alamat = anti_injection($_POST['alamat']);
      $status = anti_injection($_POST['status']);
      
      $folder = "../img/rumkit/";
      $folder = $folder.basename($_FILES['gmb']['name']);
      $gambar = ($_FILES['gmb']['name']);
      $tipe =$_FILES['gmb']['type'];
      if( $tipe != "image/jpg" AND $tipe != "image/jpeg" AND $tipe != "image/pjpeg" AND $tipe != "image/png" AND $tipe != "image/gif")
      {
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      }
      else{   
          if (move_uploaded_file($_FILES['gmb']['tmp_name'], $folder)) 
          {       
            mysql_query("insert into rumkit values('','$nama','$lat','$lng','$alamat','$status','$gambar')");
            $url = $_SERVER['HTTP_REFERER'];
            header("location:$url");
          }
      }
      break;
    case 'updaterumkit':
      $id = anti_injection($_POST['id']);
      $nama = anti_injection($_POST['nama']);
      $lat = anti_injection($_POST['x']);
      $long = anti_injection($_POST['y']);
      $alamat = anti_injection($_POST['alamat']);
      $status = anti_injection($_POST['status']);

      if(!empty($_FILES['gmb']['name']))
      {
      $query = mysql_query("select * from rumkit where id='$id'") or die(mysql_error());
      $data = mysql_fetch_array($query);
      $namagambar = "../img/rumkit/$data[foto]";
      unlink($namagambar);
      $folder = "../img/rumkit/";
      $folder = $folder.basename($_FILES['gmb']['name']);
      $gambar = ($_FILES['gmb']['name']);
      $tipe =$_FILES['gmb']['type'];

      if( $tipe != "image/jpg" AND $tipe != "image/jpeg" AND $tipe != "image/pjpeg" AND $tipe != "image/png" AND $tipe != "image/gif")
      {       
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      }
      else{
        $query = mysql_query("update rumkit set nama='$nama', alamat='$alamat', status='$status', foto='$gambar' where id=$id");
      
          if (move_uploaded_file($_FILES['gmb']['tmp_name'], $folder)) 
          {
            $url = $_SERVER['HTTP_REFERER'];
            header("location:$url");
          }
        }
      }
      else {
        $query = mysql_query("update rumkit set nama='$nama', alamat='$alamat', status='$status' where id=$id");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      }
      break;
    case 'hapusrumkit':
        $id=$_GET["id"];
        $query = mysql_query("select * from rumkit where id='$id'") or die(mysql_error());
        $data = mysql_fetch_array($query);
        $namagambar = "../img/rumkit/$data[foto]";
        unlink($namagambar);
        mysql_query("delete from rumkit where id='$id'");
        $url = $_SERVER['HTTP_REFERER'];
        header("location:$url");
      break;


    //SPESIALIS
    case 'inputspesialis':
      $id_rumkit = $_POST['id_rumkit'];
      $spesialis = $_POST['spesialis'];
      $query = mysql_query("insert into spesialis values('', '$id_rumkit' ,'$spesialis')");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'updatespesialis':
      $id = $_GET['id'];
      $spesialis = $_POST['spesialis'];
      $query = mysql_query("update spesialis set spesialis='$spesialis' where id='$id'");
      if (!$query) {
        mysql_error();
      }
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
    case 'hapusspesialis':
      $id=$_GET["id"];
      mysql_query("delete from spesialis where id='$id'");
      $url = $_SERVER['HTTP_REFERER'];
      header("location:$url");
      break;
  }

?>