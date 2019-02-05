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
                    <h3 class="text-primary">Lihat Daftar Alumni</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Menu Lain</a></li>
                        <li class="breadcrumb-item active">Alumni</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" style="padding: 0 10px 0;margin-top: -20px;">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jurusan</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = mysql_query("SELECT `nis`, `nama`, jk, jurusan, DATE_FORMAT(tgl_lahir, '%d %M %Y') FROM `alumni` ORDER BY nama ASC");
                                                $i = 1;
                                                while ($data = mysql_fetch_array($query)) {
                                                    $tgl_lahir = $data["DATE_FORMAT(tgl_lahir, '%d %M %Y')"];
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?>.</td>
                                                <td><a href=""><?php echo $data['nis'];?></a></td>
                                                <td><?php echo $data['nama'];?></td>
                                                <td><?php echo $data['jk'];?></td>
                                                <td><?php echo $data['jurusan'];?></td>
                                                <td><?php echo $tgl_lahir; ?></td>
                                                <td><a class="btn btn-warning" href="edit_alumni.php?nis=<?php echo $data['nis']; ?>" aria-expanded="false"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" href="#myModal<?php echo $i;?>" data-toggle="modal" aria-expanded="false"><i class="fa fa-trash"></i></a></td>
<div class="modal" id="myModal<?php echo $i;?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Anda yakin menghapus?</h4>
      </div>
      <div class="modal-body">
        <p>NIS : <?php echo $data['nis'];?></p>
        <p>Nama : <?php echo $data['nama'];?></p>
        <p>Jenis Kelamin : <?php echo $data['jk'];?></p>
        <p>Jurusan : <?php echo $data['jurusan'];?></p>
        <p>Tanggal Lahir : <?php echo $tgl_lahir; ?></p>
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0)" class="btn btn-danger" data-dismiss="modal">Batal</a>
        <a href="delete_post.php?id=<?php echo $data['nis'];?>&type=alumni" class="btn btn-info">Hapus</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                            </tr>
                                            <?php 
                                                $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'sukses') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.info('Data telah dihapus','Sukses',{
                "positionClass": "toast-top-right",
                timeOut: 3000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            })
        });
    </script>
    <?php } }?>
    <?php
        if (isset($_GET['post'])) {
            if ($_GET['post'] == 'sukses') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.info('Data telah ditambahkan','Sukses',{
                "positionClass": "toast-top-right",
                timeOut: 3000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            })
        });
    </script>
    <?php } }?>
    <?php
        if (isset($_GET['update'])) {
            if ($_GET['update'] == 'sukses') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.info('Data telah diubah','Sukses',{
                "positionClass": "toast-top-right",
                timeOut: 3000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            })
        });
    </script>
    <?php } }?>
</body>

</html>