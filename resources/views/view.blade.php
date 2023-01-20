<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smile - Dashboard</title>

    <!-- Custom fonts for this template-->
    <style>
        /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: rgb(226, 226, 226);
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
  padding-bottom: 3rem;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 20px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
.users .card button{
  width: 100%;
  margin-top: 8px;
  padding: 7px;
  cursor: pointer;
  border-radius: 10px;
  background: transparent;
  border: 1px solid #4AD489;
}
.users .card button:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5s;
}
.users .card{
  width: 22%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 10px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  display:inline-block;
}
.users .card img{
  width: 70px;
  height: 70px;
  border-radius: 50%;
}
.users .card h4{
  text-transform: uppercase;
}
.users .card p{
  font-size: 12px;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.attendance{
  margin-top: 20px;
  text-transform: capitalize;
}
.attendance-list{
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 15px;
  min-width: 100%;
  overflow: hidden;
  border-radius: 5px 5px 0 0;
}
table thead tr{
  color: #fff;
  background: #34AF6D;
  text-align: left;
  font-weight: bold;
}
.table th,
.table td{
  padding: 12px 15px;
}
.table tbody tr{
  border-bottom: 1px solid #ddd;
}
.table tbody tr:nth-of-type(odd){
  background: #f3f3f3;
}
.table tbody tr.active{
  font-weight: bold;
  color: #4AD489;
}
.table tbody tr:last-of-type{
  border-bottom: 2px solid #4AD489;
}
.table button{
  padding: 6px 20px;
  border-radius: 10px;
  cursor: pointer;
  background: transparent;
  border: 1px solid #4AD489;
}
.table button:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5rem;
}


    </style>
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link type="text/css" rel="stylesheet" href="path_to/simplePagination.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="path_to/jquery.js"></script>
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    @stack('style-alt')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <h2 style="text-align: center; margin-left: 23REM;font-weight: bold;letter-spacing: 2PX;">ADMIN DASHBOARD</h2>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('backend/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" onclick="document.getElementById('logout-form').submit()" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="users">
                <div class="card">
                <h4>Sakti Ganapathi</h4>
                <p>CEO of Smile Production</p>
                <button>Profile</button>
                </div>
                <div class="card">
                <h4>Jerome Jermanus</h4>
                <p>CEO of Smile Production</p>
                <button>Profile</button>
                </div>
                <div class="card">
                <h4>Arun Balaji</h4>
                <p>CEO of Smile Production</p>
                <button>Profile</button>
                </div>
                <div class="card">
                <h4>Savari Irudayan</h4>
                <p>CEO of Smile Production</p>
                <button>Profile</button>
                </div>
            <section class="attendance">
            <div class="attendance-list">

          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Tag</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Sam David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
                </div>
                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Smile 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    @stack('script-alt')
</body>

</html>