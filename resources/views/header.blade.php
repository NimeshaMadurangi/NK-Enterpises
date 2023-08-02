<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    

    <title>Sales Management</title>
  </head>
  <body>
   

  <!-- header bar -->
  
    <div class="container-fluid">
      <div class="row" style="background-color: #152336;">
        <div class="col-4">
         <img src="http://localhost/sales/public/photos/logotxt3.png"  class="img-fluid float-start py-3 px-2 ">
        </div>
        <div class="col-8">
          <img src="http://localhost/sales/public/photos/user2.png" class="img-fluid float-end py-3 px-2" >
        </div>
        <!-- end of header -->
        <!-- navbar -->
      </div>
      <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0c73eb;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fw-bold">
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" aria-current="page" href="index.html">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Add product</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Manage Product</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="add_grn.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GRN
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="add_grn.html">Add GRN</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item " href="manage_grn.html">Manage GRN</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Customer
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Add Customer</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Manage Customer</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reff
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Add Reff</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Manage Reff</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sales
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="create">Add Sales</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="display">Manage Sales</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Payment</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="#">Return</a> 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Transport
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Add Transport</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Manage Transpoat</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  User
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Add User</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Manage User</a></li>
                </ul>
              </li>
               <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="#">Company</a> 
              </li>

            </ul>
          
          </div>
        </div>
      </nav>
    </div>
    <!-- end of nav bar -->