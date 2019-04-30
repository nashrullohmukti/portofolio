<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sparepart Catalog</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
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
                      <a href="../admin">
                        <i class="glyphicon glyphicon-home"></i>
                        Dashboard
                      </a>
                  </li>
                  <li>
                      <a href="#sparepartsSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="glyphicon glyphicon-briefcase"></i>
                          Spareparts
                      </a>
                      <ul class="collapse list-unstyled" id="sparepartsSubmenu">
                          <li><a href="../../spareparts">Spareparts List</a></li>
                          <li><a href="../../spareparts/create">Add Sparepart</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#machinesSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="glyphicon glyphicon-cog"></i>
                          Machines
                      </a>
                      <ul class="collapse list-unstyled" id="machinesSubmenu">
                          <li><a href="../../machines">Machines List</a></li>
                          <li><a href="../../machines/create">Add Machine</a></li>
                      </ul>
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
         <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
         @yield('scripts')
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
