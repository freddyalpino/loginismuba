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
                    <h3 class="text-primary">Edit Data Guru</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Sekolah</a></li>
                        <li class="breadcrumb-item active">Data Guru</li>
                    </ol>
                </div>
            </div>
            <?php
                $nip = $_GET['nip'];
                $result = mysql_query("SELECT * FROM data_guru WHERE nip = '$nip'");
                $data = mysql_fetch_array($result);
            ?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" style="padding: 0 10px 0;margin-top: -20px;">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="update.php" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">NIP</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="nip" class="form-control" value="<?php echo $nip;?>">
                                        <input type="text" class="form-control" value="<?php echo $nip;?>" disabled>
                                        <input type="hidden" name="jenis" value="guru" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Nama Guru</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nama_guru" class="form-control" value="<?php echo $data['nama_guru'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Jenis Kelamin</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $data['jenis_kelamin'];?>" disabled>
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
                                    <label class="col-sm-3 control-label text-right">Sertifikasi</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="sertifikasi" class="form-control" value="<?php echo $data['sertifikasi'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Tamat Kerja</label>
                                    <div class="col-sm-7">
                                        <input type="date" name="tamat_kerja" class="form-control" value="<?php echo $data['tamat_kerja'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Mengajar</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="mengajar"  class="form-control" value="<?php echo $data['mengajar'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Jumlah Jam Mengajar</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="jjm" class="form-control" value="<?php echo $data['jjm'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Total Jumlah Jam Mengajar</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="total_jjm" class="form-control" value="<?php echo $data['total_jjm'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Kompetensi</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="kompetensi" class="form-control" value="<?php echo $data['kompetensi'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Status</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="status_pegawai">
                                            <option value="GTY/PTY">GTY/PTY</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Guru Honor Mapel">Guru Honor Mapel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row" style="padding-left: 5px;">
                                    <label class="col-sm-3 control-label text-right">Jenis PTK</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="jenis_ptk">
                                            <option value="Guru Mapel">Guru Mapel</option>
                                            <option value="Petugas Keamanan">Petugas Keamanan</option>
                                            <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                                            <option value="Guru BK">Guru BK</option>
                                            <option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        </select>
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
    <script type="text/javascript">
        CKEDITOR.replace('text-ckeditor');
    </script>
</body>

</html>