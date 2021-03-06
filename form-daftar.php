
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this ../template-->
    <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this ../template-->
    <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">
    <?php
    include('myDb.php');

    ?>
<?php 
    $Db = new MyDb();
   if(isset($_POST['daftar'])){
    //echo "Tombol Daftar Telah Di klik";
    $noktp=$_POST['no_ktp'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat_lengkap'];
    $nohp = $_POST['no_hp'];
    $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
    //print_r($_POST);
if($querysimpan == TRUE){
                echo "<script>
                        alert('Berhasil tersimpan');
                        document.location.href = 'index.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Gagal tersimpan');
                        document.location.href = 'index.php';
                    </script>";
            }
}
       ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Data Warga <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Table Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Table :</h6>
                        <a class="collapse-item" href="index.php">Data Warga</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
    
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


               

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kukuh pradypta</span>
                                <img class="img-profile rounded-circle"
                                    src="../template/img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
        <div id="content">
        <div class="container">
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Form Daftar</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <form action="" method="post">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <tbody>
                                         <tr>
                <th colspan="2">Biodata Pribadi</th>
                
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td> <input class="form-group col-12" type="text" name="no_ktp" id="no_ktp"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-group col-12" type="text" name="nama_lengkap" id="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td> <input class="form-group col-12" type="text" name="alamat_lengkap" id="alamat_lengkap"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input class="form-group col-12" type="text" name="no_hp" id="no_hp"></td>
            </tr>
                </tbody>
                    </table>
                    <button class="btn btn-primary" name="daftar" type="submit">Daftar </button>
                </form>
                    </div>
                </div>
            </div>
        </div>

  
    <!-- Bootstrap core JavaScript-->
    <script src="../template/vendor/jquery/jquery.min.js"></script>
    <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../template/js/sb-admin-2.min.js"></script>

</body>

</html>