<html>
  <head>
    <title>LOGIN!</title>
    <link rel="icon" type="text/css" href="../img/logo2.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
    <link rel="stylesheet" href="css/demo.css" type="text/css">
  <style type="text/css">
  /* style untuk link popup */
  a.popup-link {
    padding:17px 0;
    text-align: center;
    margin:10% auto;
    position: relative;
    width: 300px;
    color: #fff;
    text-decoration: none;
    background-color: #FFBA00;
    border-radius: 3px;
    box-shadow: 0 5px 0px 0px #eea900;
    display: block;
  }
  a.popup-link:hover {
    background-color: #ff9900;
    box-shadow: 0 3px 0px 0px #eea900;
    -webkit-transition:all 1s;
    transition:all 1s;
  }
  /* end link popup*/
  /* animasi popup */

  @-webkit-keyframes autopopup {
    from {opacity: 0;margin-top:-200px;}
    to {opacity: 1;}
  }
  @-moz-keyframes autopopup {
    from {opacity: 0;margin-top:-200px;}
    to {opacity: 1;}
  }
  @keyframes autopopup {
    from {opacity: 0;margin-top:-200px;}
    to {opacity: 1;}
  }
  /* end animasi popup */
  /*style untuk popup */  
  #popup {
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:0;
    -webkit-animation:autopopup 2s;
    -moz-animation:autopopup 2s;
    animation:autopopup 2s;
  }
  #popup:target {
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
    opacity: 0;
    visibility: hidden;
  }

  @media (min-width: 768px){
    .popup-container {
      width:300px;
      text-align: center;
    }
  }
  @media (max-width: 768px){
    .popup-container {
      width:50%;
      padding:5px 10px !important;
    }
  }
  @media (max-width: 547px){
    .popup-container {
      width:70%;
      padding:5px 10px !important;
    }
  }
  .popup-container {
    position: relative;
    margin:10% auto;
    padding:30px 50px;
    background-color: rgba(255,255,255, 0.1);
    color:#333;
    font-family: sul;
    border-radius: 3px;
  }
  /* end style popup */

  /* style untuk isi popup */
  .popup-form {
    margin:10px;
  }
    .popup-form h2 {
      margin-bottom: 5px;
      font-size: 37px;
      text-transform: uppercase;
    }
    .popup-form .input-group {
      margin:10px auto;
    }
      .popup-form .input-group input {
        padding:17px;
        text-align: center;
        margin-bottom: 10px;
        border-radius:3px;
        font-size: 16px; 
        display: block;
        width: 100%;
      }
      .popup-form .input-group input:focus {
        outline-color:#FB8833; 
      }
      .popup-form .input-group input[type="submit"] {
        background-color: #1A2226;
        height: 50px;
        color: #fff;
        border: 0;
        width: 95%;
        border-radius: 0px;
        text-transform: uppercase;
        cursor: pointer;
      }
      .popup-form .input-group input[type="submit"]:focus {
        box-shadow: inset 0 3px 7px 3px #ea7722;
      }
       .popup-form .input-group input[type="submit"]:hover {
        background-color:#1BBC9B;
        transition: 0.7s;
      }
      #bg-img4{
        height: 100%;
        background-image: url("../img/bg-log.png");
        background-size: cover;
        background-repeat: no-repeat;
        float: left;
      }

      .input{
        width: 80%;
        float: left;
      }
      #bg-cover-log{
        width: 100%;
        height: 100%;
          /*background: -webkit-linear-gradient(top, rgba(3,43,50,0.4), rgba(2,48,46,0.3));  For Safari 5.1 to 6.0 */
          /*background: -o-linear-gradient(top, rgba(3,43,50,0.4), rgba(2,48,46,0.3));  For Opera 11.1 to 12.0 */
          background: -moz-linear-gradient(top, rgba(3,43,50,0.2), rgba(2,48,46,0.4)); /* For Firefox 3.6 to 15 */
          background: linear-gradient(to bottom, rgba(3,43,50,0.2), rgba(2,48,46,0.4)); /* Standard syntax (must be last) */
          margin: 0 auto;
      }
      .pinggir-login{
          width: 15%;
          height: 45px !important;
          background-color: #16A086;
          background-image: url("../img/pin2.png");
          background-size: 38px 38px;
          background-position: center;
          background-repeat: no-repeat;
          float: left;
        }
        .row-in2{
          width: 100%;
          margin-top: 20px;
          float: left;
        }
        .row-in3{
          width: 100%;
          height: 55px;
          float: left;
        }
      .form-login{
          margin-top: 100px;
          height: auto;
        }
        .input input[type='text'], .input input[type='password']{
          border:none;
          height: 45px;
          width: 100%;
          padding: 10px;
          text-align: left;
          float: left;
        }
        .log{
          width: 70%;
          height: 30%;
          background-color: rgba(27,188,155,0.4);
          border-radius: 100%;
          margin: 0 auto;
        }
  /* end style isi popup */

  </style>
  </head>
  <body>
      <div class="wrap-full p0" style="padding-left:0px !important;padding-right:0px !important;height:100%">
        <div class="row">
          <div class="w10" id="bg-img4">
            <div id="bg-cover-log">
              <div class="popup-wrapper" id="popup">
              <div class="popup-container">

              <!-- Konten popup, silahkan ganti sesuai kebutughan -->
              <form action="../controller/proses.php?page=loginpetugas" method="post" class="popup-form ">
                <h2 class="tac cwhite">LOGIN</h2>
                <div class="input-group form-login">
                  <div class="row-in2">
                    <div class="pinggir-login" style="background-image:url('../img/username.png')"></div>
                    <div class="input"><input type="text" name="user" placeholder="Username"></div>
                 </div>
                 <div class="row-in3">
                    <div class="pinggir-login" style="background-image:url('../img/password.png')"></div>
                    <div class="input"><input type="password" name="pass" placeholder="Password"></div>
                 </div>
                  <input type="submit" value="Submit">
                  
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>