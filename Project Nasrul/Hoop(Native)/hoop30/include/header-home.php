<?php
  session_start();
  if(isset($_SESSION['user'])){
    $name=$_SESSION['user'];
  }
  else{
    empty($name);
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/style_header.css">
    
    <script src="../js/wow.js"></script>
    <script type="text/javascript" src="../js/jquery1.11.3.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
       
          $("#to-top").hide();
           
          $(function () {
              $(window).scroll(function () {
                  if ($(this).scrollTop() > 500) {
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
                      scrollTop: 1350
                  }, 700);
                  return false;
              });
              $('#how').click(function () {
                  $('body,html').animate({
                      scrollTop: 2050
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
<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>
</head>



<div id="wrapper">
<header>
  <div class="container clearfix">
  <img src="../img/logo.png" class="w1" id="logo">
    <nav class="w12 hed">
      <a id="what" href="#whatt">APA</a>
      <a id="why" href="#whyy">MENGAPA</a>
      <a id="fit" href="#fitur">FITUR</a>
      <a id="how" href="#howw">BAGAIMANA</a>
    </nav>
    <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
  </div>
</header><!-- /header -->
</div><!-- /#wrapper -->
