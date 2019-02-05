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
                    <h3 class="text-primary">Lihat Daftar Berita</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Konten</a></li>
                        <li class="breadcrumb-item active">Berita</li>
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
                                <h4 class="card-title">Daftar Posting</h4>
                                <h6 class="card-subtitle">Daftar Berita dan Informasi yang sudah dipublikasikan.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Publish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = mysql_query("SELECT `id`, `judul`, `kategori`, `content`, `gambar`, DATE_FORMAT(tanggal, '%d %M %Y') FROM `konten` ORDER BY id DESC");
                                                $i = 1;
                                                while ($data = mysql_fetch_array($query)) {
                                                    $tgl = $data["DATE_FORMAT(tanggal, '%d %M %Y')"];
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?>.</td>
                                                <td><?php echo $data['judul']; ?><br>
                                                    <a href="../berita.php?id=<?php echo $data['id']; ?>" target="_tab"><small>Lihat</small></a> |
                                                    <a href="edit_post.php?id=<?php echo $data['id'];?>"><small>Edit</small></a> |
                                                    <a href="#myModal<?php echo $i;?>" data-toggle="modal" ><small>Hapus</small></a>
<div class="modal" id="myModal<?php echo $i;?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Anda yakin menghapus?</h4>
      </div>
      <div class="modal-body">
        <p>Judul post : <?php echo $data['judul']?></p>
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0)" class="btn btn-danger" data-dismiss="modal">Batal</a>
        <a href="delete_post.php?id=<?php echo $data['id'];?>&type=konten" class="btn btn-info">Hapus</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                                </td>
                                                <td><?php echo $data['kategori']; ?></td>
                                                <td><?php echo $tgl; ?></td>
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
    <!-- Modal -->
  <div id="#myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
              aria-hidden="true">&times;</button>
            <h4 class="modal-title">Confirmation</h4>
          </div>
          <div class="modal-body">
            <p>Do you want to close this dialog?</p>
            <p class="text-warning">
              <small>If you don't save, your changes will be lost.</small>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Wrapper -->
    <?php require 'script.php'; ?>
    <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'sukses') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.info('Berita telah dihapus','Sukses',{
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
            toastr.info('Berita telah ditambahkan','Sukses',{
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
            toastr.info('Berita telah diubah','Sukses',{
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