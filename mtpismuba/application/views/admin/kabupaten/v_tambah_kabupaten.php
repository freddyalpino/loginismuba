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
						<a href="<?php echo site_url('admin/kabupaten/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url().'admin/kabupaten/simpan_kabupaten'?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama Kabupaten*</label>
								<input class="form-control" type="text" name="xnama" placeholder="Nama Kabupaten" />
                            </div>
                            
                            <div class="form-group">
								<label for="name">Provinsi*</label>
								<input class="form-control" type="text" name="xprovinsi" placeholder="Provinsi" />
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
