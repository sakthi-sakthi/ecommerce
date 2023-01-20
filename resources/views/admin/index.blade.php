<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smile - Dashboard</title>
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"> </script>    

    <!-- Custom fonts for this template-->

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<style>
    .notfound {
      display: none;
    }
  </style>
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
  background: #4AD489;
  border: 1px solid #4AD489;
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
table, th, td, tr {
  border: 3px solid black;
  border-collapse: collapse;
  border-color: #96D4D4;
}
</style>
<!-- script tags start -->

<script type="text/javascript">
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example table,tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script type='text/javascript'>
    $(document).ready(function () {
      $("#myInput").keyup(function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query

        $("#example tr:not('.no-records')").filter(function () {
          for (i = 0; i < tr.length; i++) {
            td = $(tr[i]).find('td')[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              }
              else {
                tr[i].style.display = "none";
              }
            }
          }
          var trSel = $("#example tr:not('.no-records, .table-heading'):visible");
          // Check for number of rows & append no records found row
          if (trSel.length == 0) {

            $("#example").find('.no-records').show();
          }
          else {
            $("#example").find('.no-records').hide();
          }
        });


      });

    });
  </script>
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
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="users">
                <div class="card">
                <h4>{{ $allProjects }}</h4>
                <p><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Total Products</p>
                <button onclick="window.location.href ='{{ route('admin.products.index') }}';">Products</button>
                </div>
                <div class="card">
                <h4>{{ $tag }}</h4>
                <p><i class="fa fa-tag" aria-hidden="true"></i>&nbsp;&nbsp;Total tags</p>
                <button onclick="window.location.href ='{{ route('admin.tags.index') }}';">Tags</button>
                </div>
                <div class="card">
                <h4>{{ $categories }}</h4>
                <p><i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;Total Categories</p>
                <button onclick="window.location.href ='{{ route('admin.categories.index') }}';">Categories</button>
                </div>
                <div class="card">
                <h4>{{ $users }}</h4>
                <p><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Total Users</p>
                <button>Users</button>
                </div>
            <section class="attendance">
            <div class="attendance-list">
            <div class="table-responsive">
            <table class="table" id="example">
            <thead>
            <h2 style="text-align: center; margin-left: 1REM;font-weight: bold;letter-spacing: 2PX;">PRODUCT DETAILS</h2>
            <br>
             <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="width: 300px;margin-left:49.4rem;"> -->
             <input type="search" placeholder="Type Here to Search..."  id="myInput" onkeyup="myFunction()">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Details</th>
                <th>Weight</th>
              </tr>
              @foreach($data as $data)
              <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['slug']}}</td>
                <td>{{$data['price']}}</td>
                <td>{{$data['quantity']}}</td>
                <td>{{$data['description']}}</td>
                <td>{{$data['details']}}</td>
                <td>{{$data['weight']}}</td>
              </tr>
              @endforeach
              <tr class='no-records' style="display: none;text-align:center;">
                <td colspan='10' style="letter-spacing:2px;font-size:20px;"><b>No records found Here</b></td>
              </tr>
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