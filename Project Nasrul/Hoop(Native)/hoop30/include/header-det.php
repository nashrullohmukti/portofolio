<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #111;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<ul class="topnav">
  <div class="wrap">
  <li><img src="../img/logo2.png" width="40px" style="margin-top:8px;"></li>
  <li><a  href="../index.php">HOME</a></li>
  <li><a href="phpsqlsearch_map.html">MAPPING</a></li>
  <li><a href="list_rumkit.php">FILTER</a></li>
  <li><a href="login_ptg.php">LOGIN</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><img src="../img/menu.png" width="30px"></a>
  </li>
  </div>
</ul>


<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>

</body>
</html>
