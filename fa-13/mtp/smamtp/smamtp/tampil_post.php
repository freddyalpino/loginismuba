<section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Informasi Terkini</h2>
            </div>
			 
             <div class="row">
             <div id="owl-example" class="owl-carousel"> 
                <?php
                    $query = mysql_query("SELECT `id`, `judul`, `kategori`, `content`, `gambar`, DATE_FORMAT(tanggal, '%d %M %Y') FROM konten ORDER BY id DESC LIMIT 10");
                    while ($data = mysql_fetch_array($query)) {
                        $gbr = $data['gambar'];
                        $img_src = "login/images/content/$gbr";
                        $ext = pathinfo($gbr, PATHINFO_EXTENSION);
                        if($ext != 'jpg' and $ext != 'jpeg'){
                            $im = imagecreatefrompng($img_src);
                            $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => 800, 'height' => 504]);
                            if ($im2 !== FALSE) {
                                imagepng($im2, "login/images/content/crop-$gbr");
                                imagedestroy($im2);
                            }

                        }else{
                            $im = imagecreatefromjpeg($img_src);
                            $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => 800, 'height' => 504]);
                            if ($im2 !== FALSE) {
                                imagepng($im2, "login/images/content/crop-$gbr");
                                imagedestroy($im2);
                            }
                        }
                        imagedestroy($im);
                ?>
                <div class="text-center item">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img src="login/images/content/crop-<?php echo $gbr;?>" alt="">
                                </div>
                                <div class="entry-date"><?php echo $data["DATE_FORMAT(tanggal, '%d %M %Y')"]; ?></div>
                                <h2 class="entry-title"><a href="#"><?php echo $data['judul']; ?></a></h2>
                            </header>

                            <div class="entry-content">
                                <a class="btn btn-primary" href="berita.php?id=<?php echo $data['id']; ?>">READ MORE</a>
                            </div>

                            
                        </article>
                    </div>
                </div>
                <?php }?>
            </div>
            </div>			

        </div>
    </section> 