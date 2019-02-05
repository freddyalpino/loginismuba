<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<div id="wrapper">
		<div id="content-wrapper">

			<div class="container-fluid">
				<!-- DataTables -->
				<div class="row">
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <!-- Card pertama-->
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="container">
                                    <table>
                                        <tr>
                                            <td>Total buku terjual</td>
                                            <?php foreach($totalbukuterjual as $data):?>
                                            <td><?php echo $data->totalbukuterjual?></td>
                                            <?php endforeach;?>
                                        </tr>
                                        <tr>
                                            <td>Total pendapatan </td>
                                            <?php foreach($totalpendapatanpenjualan as $data):?>
                                            <td width=25%><?php echo $data->totalharga?></td>
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
                                </div>
                            </div>
		                </div>
                        <!-- tutup card pertama-->
        			</div>                    
			<!-- Sticky Footer -->
	    </div>
        <div class="container-fluid">
        <strong><i><h5>Daftar Pembeli</h5></i></strong>
            <div class="card text-black">
                <div class="card-body">
                    <div>
                                    <table width="100%" >
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
                    </div>
                </div>
            </div>
        </div>
		<!-- /.content-wrapper -->

        <!-- Kabupaten -->
        <div class="container-fluid">
                <strong><i><h5>Daftar Kabupaten</h5></i></strong>
				<!-- DataTables -->

                    <!-- Card pertama-->
                    <table border="2">
                    <?php foreach($kabupaten as $data):?>
                        <tr>
                            <td>
                            <strong>Kabupaten <?php echo $data->nama_kabupaten?></strong> 
                            <table>
                            <?php foreach($sekolahkabupaten as $key):?>
                                <tr>
                                    <td>
                                    <?php 
                                            if($data->id_kabupaten == $key->id_kabupaten)
                                            echo $key->nama_sekolah;
                                    ?>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </table>
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
                
                    <!-- Kabupaten -->
	    </div>
	</div>
	<!-- /#wrapper -->
</body>

</html>
