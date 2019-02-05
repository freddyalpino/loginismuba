<!DOCTYPE html>
<html lang="en">
<?php
    require '../koneksi.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:index.php');
    }
?>
<head>
    <?php require 'head.php'; ?>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <?php require 'navbar.php'; ?>
        <!-- Left Sidebar  -->
        <?php require 'sidebar.php'; ?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Halaman</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Konten</a></li>
                        <li class="breadcrumb-item active">Halaman</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" style="padding: 0 10px 0;margin-top: -20px;">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="halaman.php" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-2 control-label">Judul Halaman</label>
                                    <div class="col-sm-10">
                                        <input name="judul" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-file">
                              <input name="gambar" type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                            <br><br>
                            <div>
                                <textarea name="isi_konten" id="text-ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-top: 15px;">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success m-b-10 m-l-5">Post</button>
                                        <button type="reset" class="btn btn-danger m-b-10 m-l-5">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php require 'footer.php'; ?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <?php require 'script.php'; ?>
    <script type="text/javascript">
        CKEDITOR.replace('text-ckeditor');
    </script>
</body>

</html>