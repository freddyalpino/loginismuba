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
                    <h3 class="text-primary">Tambah Data Alumni</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Menu Lain</a></li>
                        <li class="breadcrumb-item active">Alumni</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php
                $nis = $_GET['nis'];
                $result = mysql_query("SELECT * FROM alumni WHERE nis = '$nis'");
                $data = mysql_fetch_array($result);
            ?>
            <div class="container-fluid" style="padding: 0 10px 0;margin-top: -20px;">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="update.php" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Nomor Induk Siswa</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="nis" class="form-control" value="<?php echo $nis;?>">
                                        <input type="text" class="form-control" value="<?php echo $nis;?>" disabled>
                                        <input type="hidden" name="jenis" value="alumni" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Nama Siswa</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nama_s" class="form-control" value="<?php echo $data['nama'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Jenis Kelamin</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $data['jk'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data['tgl_lahir'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Jurusan</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Upload Foto</label>
                                    <div class="col-sm-7">
                                        <div class="custom-file">
                                          <input type="file" name="gambar" class="custom-file-input col-sm-4 text-right" id="customFile">
                                          <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success m-b-10 m-l-5 pull-right">SIMPAN</button>
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
</body>

</html>