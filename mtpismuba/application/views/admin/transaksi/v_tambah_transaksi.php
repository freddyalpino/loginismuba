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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/buku/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url().'admin/transaksi/simpan_transaksi'?>" method="post" enctype="multipart/form-data" >
							
                            <div class="form-group">
								<label for="name">Sekolah*</label>
								<div class="form-group">
                                        <select class="form-control" id="sel1" name="xsekolah">
                                        <?php 
                                            foreach ($sekolah as $data):
                                        ?>
                                            <option value="<?php echo $data->id_sekolah;?>"><?php echo $data->nama_sekolah?></option>
                                        <?php endforeach;?>
                                        </select>
                                    </div> 
							</div>

                            <div class="form-group">
								<label for="name">Pilih Buku*</label>
								<div class="form-check">
										<table >
										<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
											<tr>
												<th width="200">Judul Buku*</th>
												<th width="100">Kelas*</th>
												<th width="100">Harga*</th>
												<th>Qty</th>
											</tr>
                                    <?php 
                                          foreach ($buku as $data) :
                                    ?>


                                            <tr>
                                                <td width="200"><input type="checkbox" class="form-check-input" id="check1" name="xbarang[]" alt="Checkbox" value="<?php echo $data->id_buku?>" ><?php echo $data->nama_buku?></td>
												<td width="100">Kelas <?php echo $data->kelas_buku?></td>
												<td width="100"><?php echo $data->harga_buku?></td>
												<td>
												<input class="form-control col-sm-4" type="number" name="xbanyak[]"/>
												</td>
                                            </tr>
                                <?php endforeach;?>

                                        </table>
                                </div>
                            </div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />                        
                        </form>

					</div>

					<div class="card-footer small text-muted">
						* Isi Semua Data
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
