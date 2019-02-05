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
                    <h3 class="text-primary">Lihat Gallery</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Galery</a></li>
                        <li class="breadcrumb-item active">Lihat Gallery</li>
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
                                <h4 class="card-title">Gallery</h4>
                                <div class="row">
                                <?php
                                    $query = mysql_query("SELECT * FROM gallery ORDER BY id DESC LIMIT 12");
                                    while ($data = mysql_fetch_array($query)) {
                                ?>
                                    <div class="col-md-2">
                                        <img src="images/gallery/<?php echo $data['gambar'];?>" class="img-thumbnail">
                                    </div>
                                <?php  }?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Gallery</h4>
                                <h6 class="card-subtitle">Drag and drop gambar yang akan di tambahkan ke dalam gallery.</h6>
                                <form action="insert_gallery.php" class="dropzone" id="add-gallery">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
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
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var md = new Dropzone(".dropzone", {
        url: "insert_gallery.php", # your post url
        maxFilesize: "5", #max file size for upload, 5MB
        addRemoveLinks: true # Add file remove button.
    });
        md.on("complete", function (file) {
        if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
            location.reload();
        }

        md.removeFile(file); # remove file from the zone.
    });
    </script>
</body>

</html>