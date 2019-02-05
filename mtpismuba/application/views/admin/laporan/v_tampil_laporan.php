<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="row">
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <!-- Card pertama-->
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="container">
                                    <table class="table table-striped">

                                        <h3 style="font-weight: bold;">Laporan</h3>
                                        <br>

                                        <tr>
                                            <td>Total buku terjual</td>
                                            <?php foreach($totalbukuterjual as $data):?>
                                            <td><?php echo $data->totalbukuterjual?></td>
                                            <?php endforeach;?>
                                        </tr>
                                        <tr>
                                            <td>Total pendapatan </td>
                                            <?php foreach($totalpendapatanpenjualan as $data):?>
                                            <td><?php echo $data->totalharga?></td>
                                            <?php endforeach;?>
                                        </tr>
                                        <tr>
                                        <?php $count=0;
                                            foreach($total as $data): 
                                            $count++;
                                        ?>
					                    <?php endforeach;?>
                                            <td>Total Transaksi </td><td><?php echo $count?></td>
                                        </tr>
                                    </table>


            <a class="btn btn-outline-primary"  href="#" data-toggle="modal" data-target="#ModalCetak" role="button">Cetak Laporan </a>

            <a class="btn btn-outline-primary"  href="<?php echo site_url('admin/laporan/filter') ?>" role="button">Cetak Laporan (v.2) </a>

            <a class="btn btn-outline-primary"  href="#" data-toggle="modal" data-target="#ModalCetak2" role="button">Cetak Laporan (v.3)</a>

                                </div>
                            </div>
		                </div>
                        <!-- tutup card pertama-->
        			</div>
                    <!-- <div class="col-xl-6 col-sm-6 mb-3">
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">Laporan</div>
                            </div>
		                </div>
        			</div> -->
                    
                    
			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

	    </div>
        <div class="container-fluid">
            <center>
            <div class="alert alert-success col-xl-6 text-center">
                <strong>Daftar Pembelian</strong>
            </div>
            </center>
            <div class="card text-black">
                <div class="card-body">
                    <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nomer*</th>
                                                <th>Nama Sekolah</th>
                                                <th>Kabupaten</th>
                                                <th>Jumlah Pembelian</th>
                                                <th>Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=0; 
                                                    foreach($tampilsemua as $data):
                                                        $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no?></td>
                                                    <td><?php echo $data->nama_sekolah?></td>
                                                    <td><?php echo $data->nama_kabupaten?></td>
                                                    <td><?php echo $data->banyak?></td>
                                                    <td>Rp. <?php echo $data->totalharga?></td>
                                                </tr>
                                                <?php endforeach; ?>

                                        </tbody>


                                    </table>

                                <a  href="<?php echo site_url('admin/laporan/cetak_laporan') ?>">
                                        <button class="btn btn-primary"> Cetak</button>

                                        </a>
                    </div>
                </div>
            </div>
        </div>
		<!-- /.content-wrapper -->

        <!-- Kabupaten -->
        <div class="container-fluid">
            <center>
            <br>
            <div class="alert alert-info col-xl-6 text-center">
                <strong>Daftar Kabupaten</strong>
            </div>
            </center>
				<!-- DataTables -->
				<div class="row">
                    <!-- Card pertama-->
                    <?php $hitung=0;
                        $totalharga=0;
                    ?>
                    <?php foreach($kabupaten as $data):?>
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="container">
                                <center>
                                <div class="alert alert-secondary col-sm-6 text-center ">
                                        <strong><?php echo $data->nama_kabupaten?></strong>
                                </div>
                                </center>
                                <i><p>Nama Sekolah</p></i>
                                
                                <?php foreach($sekolahkabupaten as $key):?>
                                
                                    <?php 
                                        if($data->id_kabupaten == $key->id_kabupaten)
                                        echo "- - - - - - - - - ".$key->nama_sekolah."<br>";
                                    ?>
                                    <?php 
                                        if($data->id_kabupaten == $key->id_kabupaten)
                                        $totalharga = $totalharga+$key->totalharganya; // buat hitung total harga tiap kabupaten
                                    ?>
                                    <?php 
                                        if($data->id_kabupaten == $key->id_kabupaten)
                                        $hitung = $hitung+$key->jumlahbarang; // buat hitung total barang terjual tiap kabupaten                   
                                    ?>
                                    
                                <?php endforeach;?>
                                <?php echo "Total Pembelian Barang : ".$hitung?>
                                <?php echo "<br>Total Harga        : ".$totalharga?>
                                </div>
                            </div>
		                </div>
        			</div>
                    <?php $hitung=0;
                    $totalharga =0;
                    ?>
                    <?php endforeach;?>
                    <!-- tutup card pertama-->

                    <!-- Card kedua
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">Laporan</div>
                            </div>
		                </div>
        			</div>
                     Tutup Card kedua-->
                </div>
                    <!-- Kabupaten -->
	    </div>
        
        <center>
            <br>
            <!-- <a class="btn btn-outline-primary" href="<?php echo site_url('admin/laporan/cetak_laporan')?>" role="button">Cetak Laporan</a> -->
        </center>
            <br>
			
	</div>
	<!-- /#wrapper -->

    
	<!--Modal Pilih Kabupaten-->
        <div class="modal fade" id="ModalCetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Pilih Kabupaten</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/laporan/cetak_laporan_kabupaten'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Kabupaten/Kota</label>                                
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="sel1" name="xidkabupaten">
                                                    <?php foreach($pilihkabupaten as $key):?>
                                                        <option value="<?php echo $key->id_kabupaten;?>"><?php echo $key->nama_kabupaten;?></option>                                        
                                                    <?php endforeach;?> 
                                                </select>
                                            </div>
                                        </div>
                        </div>

                        <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Dari</label>                                
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <select class="form-control" id="sel1" name="xbulan1"> 
                                                        <option value="1">Janooary</option>
                                                        <option value="2">Febooary</option>
                                                        <option value="3">Married</option>
                                                        <option value="4">Avril </option>
                                                        <option value="5">Mae</option>
                                                        <option value="6">hey June</option>
                                                        <option value="7">Joolee</option>
                                                        <option value="8">Agus</option>
                                                        <option value="9">Septembre </option>
                                                        <option value="10">Oktaber</option>
                                                        <option value="11">Novamber</option>
                                                        <option value="12">Dadang</option>
                                                </select>
                                                 <select class="form-control" id="sel1" name="xtahun1"> 
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                </select> 
                                            </div>
                                        </div>
                        </div>

                         <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Sampai</label>                                
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <select class="form-control" id="sel1" name="xbulan2"> 
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                </select>
                                                <select class="form-control" id="sel1" name="xtahun2"> 
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                </select>
                                            </div>
                                        </div>
                        </div> 





                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


<!-- BUTTON VERSI 3 -->
<div class="modal fade" id="ModalCetak2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Pilih Kabupaten</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/laporan/cetak_laporan_kabupaten'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Kabupaten/Kota</label>                                
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="sel1" name="xidkabupaten">
                                                    <?php foreach($pilihkabupaten as $key):?>
                                                        <option value="<?php echo $key->id_kabupaten;?>"><?php echo $key->nama_kabupaten;?></option>                                        
                                                    <?php endforeach;?> 
                                                </select>
                                            </div>
                                        </div>
                        </div>

                        <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Bulan</label>                                
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <select class="form-control" id="sel1" name="xbulan1"> 
                                                        <option value="1">Janooary</option>
                                                        <option value="2">Febooary</option>
                                                        <option value="3">Married</option>
                                                        <option value="4">Avril </option>
                                                        <option value="5">Mae</option>
                                                        <option value="6">hey June</option>
                                                        <option value="7">Joolee</option>
                                                        <option value="8">Agus</option>
                                                        <option value="9">Septembre </option>
                                                        <option value="10">Oktaber</option>
                                                        <option value="11">Novamber</option>
                                                        <option value="12">Dadang</option>
                                                </select>
                                                 <select class="form-control" id="sel1" name="xtahun1"> 
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                </select> 
                                            </div>
                                        </div>
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
