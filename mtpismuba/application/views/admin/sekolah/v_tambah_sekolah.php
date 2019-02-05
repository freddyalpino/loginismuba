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

						<form action="<?php echo base_url().'admin/sekolah/simpan_sekolah'?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama Sekolah*</label>
								<input class="form-control" type="text" name="xnamasekolah" placeholder="Nama Sekolah" />
                            </div>
                            
                            <div class="form-group">
								<label for="name">Alamat Sekolah*</label>
								<input class="form-control" type="text" name="xalamatsekolah" placeholder="Alamat Sekolah" />
                            </div>
                            
                            <div class="form-group">
								<label for="name">Kabupaten*</label>
								<div class="form-group">
                                        <select class="form-control" id="sel1" name="xidkabupaten">
                                        <?php 
                                            foreach ($kabupaten as $data):
                                        ?>
                                            <option value="<?php echo $data->id_kabupaten;?>"><?php echo $data->nama_kabupaten?></option>
                                        <?php endforeach;?>
                                        </select>
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
