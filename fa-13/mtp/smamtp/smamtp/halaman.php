<!DOCTYPE html> 
<html lang="en">
<?php require 'head.php'; ?>
<body id="home" class="homepage">
    <?php require 'navbar.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-one">
                        <div class="testi-info">
<?php
    $id = $_GET['id'];
    $query = mysql_query("SELECT * FROM halaman WHERE id=$id");
    while ($data = mysql_fetch_array($query)) {
?>
                        <h1><?php echo $data['judul']; ?></h1>
                        <img src="login/images/content/<?php echo $data['gambar'];?>" style="max-width:500px;">
                        <?php echo $data['isi']; ?>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>

        </div>
    <?php require 'footer.php'; ?>
    <?php require 'script.php'; ?>
</body>
</html> 