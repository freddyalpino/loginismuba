<?php
                    $result = mysql_query("SELECT * FROM halaman where judul LIKE '%Visi dan Misi%'");
                    $data = mysql_fetch_array($result);
                ?>
                <section id="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Visi dan Misi</h2>
                <?php echo $data['isi'];?>
            </div>

        </div>
    </section> <!--/#testimonial-->