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
						<a href="<?php echo site_url('admin/buku1/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <?php foreach ($buku as $data): ?>
					<div class="card-body">

						<form action="<?php echo base_url().'admin/buku1/update_buku'?>" method="post" enctype="multipart/form-data" >
							<div class="form-group" hidden>
								<label for="name">idbuku*</label>
								<input class="form-control" type="text" name="xid" value="<?php echo $data->id_buku?>" />
                            </div>
                            
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control" type="text" name="xnama" value="<?php echo $data->nama_buku?>" />
                            </div>

							<div class="form-group">
								<label for="name">Kelas*</label>
								<div class="form-group">
                                        <select class="form-control" id="sel1" name="xkelas">
                                            <option value="<?php echo $data->kelas_buku?>"><?php echo $data->kelas_buku?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option> 
                                        </select>
                                    </div> 
                            </div>

                            <div class="form-group">
								<label for="name">Harga*</label>
								<input class="form-control" type="number" name="xharga" value="<?php echo $data->harga_buku?>" />
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
                    <?php endforeach; ?>
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
