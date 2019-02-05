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
                                        <?php foreach($totalbukuterjual_kab as $data): ?>
                                        <h3>Kabaputen : <?php echo $data->nama_kabupaten?></h3>
                                        <?php endforeach?>
                                            <td>Total buku terjual</td>
                                            <?php foreach($totalbukuterjual_kab as $data):?>
                                            <td><?php echo $data->totalbukuterjual?></td>
                                            <?php endforeach;?>
                                        </tr>
                                        <tr>
                                            <td>Total pendapatan </td>
                                            <?php foreach($totalpendapatanpenjualan_kab as $data):?>
                                            <td width=25%><?php echo $data->totalharga?></td>
                                            <?php endforeach;?>
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
                                                <th>Jumlah Pembelian</th>
                                                <th>Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=0; 
                                                    foreach($tampilsemua_kab as $data):
                                                        $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no?></td>
                                                    <td><?php echo $data->nama_sekolah?></td>
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
	</div>
	<!-- /#wrapper -->
</body>

</html>
