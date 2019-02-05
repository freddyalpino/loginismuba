<section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">GALLERY</h2>
            </div>
            <div class="portfolio-items">
<?php
    $query = mysql_query("SELECT * FROM gallery ORDER BY id DESC LIMIT 8");
    while ($data = mysql_fetch_array($query)) {
?>
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="login/images/gallery/<?php echo $data['gambar']; ?>" alt="" style="max-width: 250px;max-height: 200px;">
                    </div>
                </div><!--/.portfolio-item-->
<?php } ?>
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->