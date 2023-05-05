<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"> Add Data Employee</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table style="width: 100%;" id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Name</th>
											<th class="text-center">Email</th>
											<th class="text-center">Position</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$nomor = 1;
										foreach ($dataemployee as $d) {
											$id = $d['id']; ?>
											<tr class="odd gradeX">
												<td style="width: 2%; vertical-align:middle;" class="text-center"><?php echo $nomor++; ?></td>
												<td style="width: 13%; vertical-align:middle;" class="text-center"><?php echo $d['first_name']; ?> <?php echo $d['last_name']; ?></td>
												<td style="width: 15%;" class="text-center"><?php echo $d['email']; ?></td>
												<td style="width: 10%;" class="text-center"><?php echo $d['position']; ?></td>
												<td style="width: 10%;" class="text-center ">
													<a href="<?php echo base_url() . "detail/" . $d['id']; ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
													<button type="button" class="btn btn-warning btn-circle btn-sm" title="Edit Data"><i class="fas fa-edit"></i></button>
													<a href="<?php echo base_url('delete/' . $d['id']); ?>" onclick="return confirm('Are you sure to delete this data employee ( <?= $d['project_name']; ?> ) ?');" class="btn btn-danger btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-label" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modal-tambah-label">Add Data Employee</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Konten form untuk menambahkan data employee -->
											<form>
												<!-- Isi form di sini -->
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>