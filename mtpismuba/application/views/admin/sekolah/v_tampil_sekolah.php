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
				<div class="card mb-3">
					<div class="card-header">
						<a class="btn btn-primary" href="<?php echo site_url('admin/sekolah/add') ?>"><i class="fas fa-plus"></i> Tambah Sekolah    </a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomer*</th>
										<th>Nama Sekolah*</th>
										<th>Alamat Sekolah*</th>
										<th>Kabupaten*</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php $no=0; foreach ($sekolah as $data): $no++;?>
									<tr>
										<td>
											<?php echo $no?>
										</td>
										<td>
											<?php echo $data->nama_sekolah ?>
										</td>
										<td>
											<?php echo $data->alamat_sekolah ?>
										</td>
										<td>
											<?php echo $data->nama_kabupaten?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/sekolah/edit/'.$data->id_sekolah) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a data-toggle="modal" data-target="#ModalHapus<?php echo $data->id_sekolah?>"
											class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
                                    <?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

		<?php foreach ($sekolah as $data):


                ?>

                <!--Modal hapus buku-->
				<div class="modal fade" id="ModalHapus<?php echo $data->id_sekolah;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Hapus Buku</h4>
							</div>
							<form class="form-horizontal" action="<?php echo base_url().'admin/sekolah/delete_sekolah'?>" method="post" enctype="multipart/form-data">
							<div class="modal-body">

									<div class="form-group">
										<p for="inputUserask" class="col-sm-12 control-label">Apakah anda ingin menghapus Sekolah</p>
										<strong><label for="inputUserName" class="col-sm-12 control-label"> <?php echo $data->nama_sekolah?></label></strong>
										<div class="col-sm-7">
										<input type="hidden" name="xid" value="<?php echo $data->id_sekolah;?>">
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger btn-flat" id="simpan">Delete</button>
							</div>
							</form>
						</div>
					</div>
				</div>
   		 <?php endforeach; ?>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
