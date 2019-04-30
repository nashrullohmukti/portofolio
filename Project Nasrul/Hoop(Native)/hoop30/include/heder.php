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

ul.topnav li a:hover {background-color: rgba(0,0,0,0.1);}

ul.topnav li.icon {display: none;}

@media screen and (max-width:992px) {

  ul.topnav li a{
    font-size: 12px;
    padding-left: 9px;
    padding-right: 9px;
  }
}
@media screen and (max-width:780px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:780px) {
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
<link rel="stylesheet" type="text/css" href="../css/style_header.css">
    
    <script src="../js/wow.js"></script>
    <script type="text/javascript" src="../js/jquery1.11.3.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
       
          $("#to-top").hide();
           
          $(function () {
              $(window).scroll(function () {
                  if ($(this).scrollTop() > 300) {
                      $('#to-top').fadeIn();
                  } else {
                      $('#to-top').fadeOut();
                  }
              }); 
               
              $('#to-top a').click(function () {
                  $('body,html').animate({
                      scrollTop: 0
                  }, 1000);
                  return false;
              });
              $('#what').click(function () {
                  $('body,html').animate({
                      scrollTop: 120
                  }, 700);
                  return false;
              });
              $('#why').click(function () {
                  $('body,html').animate({
                      scrollTop: 750
                  }, 700);
                  return false;
              });
              $('#fit').click(function () {
                  $('body,html').animate({
                      scrollTop: 1250
                  }, 700);
                  return false;
              });
              $('#how').click(function () {
                  $('body,html').animate({
                      scrollTop: 1970
                  }, 700);
                  return false;
              });
          });
       
      });

    </script>
    <script>
    
    wow = new WOW(
    {
    animateClass: 'animated',
    offset:100
    }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
    };
 </script>   
<script src="../js/classie.js"></script>
<script>
  function init() {
    window.addEventListener('scroll', function(e){
      var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 290,
        header = document.querySelector("header");
      if (distanceY > shrinkOn) {
        classie.add(header,"smaller");
      } else {
        if (classie.has(header,"smaller")) {
          classie.remove(header,"smaller");
        }
      }
    });
  }
  window.onload = init();
</script>
</head>
<body>
<header>
 <div class="wrap">
<ul class="topnav">
  <li><img src="../img/logo2.png" width="40px" style="margin-top:8px;"></li>
  <li><a id="what" href="#whatt">APA ITU HOOP</a></li>
  <li><a id="why" href="#whyy">MENGAPA HARUS HOOP</a></li>
  <li><a id="fit" href="#fitur">FITUR</a></li>
  <li><a id="how" href="#howw">CARA PEMAKAIAN</a></li>
  <li><a href="phpsqlsearch_map.html">MAPPING</a></li>
  <li><a href="list_rumkit.php">FILTER</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><img src="../img/menu.png" width="30px"></a>
  </li>
</ul>
</div>
</header>
<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>

</body>
</html>
