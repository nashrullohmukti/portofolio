<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Katalog Sparepart</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/thumbnail-gallery.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <div class="wrapper">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h3>Sparepart Catalog</h3>
              <strong>SC</strong>
          </div>
            <ul class="list-unstyled components">
              <li>
                  <a href="../spareparts_gal">
                      <i class="glyphicon glyphicon-briefcase"></i>
                      Spareparts
                  </a>
              </li>
          </ul>
            <ul class="list-unstyled CTAs">
              <li>
                <a href="{{ route('logout') }}"
                   class="logout-button"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="article">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
          </ul>
      </nav>
        <!-- Page Content Holder -->
          <div id="content" class="col-md-12 col-sm-12 col-xs-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>

                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
</body>
</html>
