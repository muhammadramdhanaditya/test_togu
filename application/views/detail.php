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
							<h3 class="card-title">Detail Data Employee</h3>
						</div>
						<div class="card-body">
							<div class="row col-md-12">
								<div class="col-md-6">
									<table class="table ttable-condensed">
										<tr>
											<th>First Name :</th>
											<td></td>
										</tr>
										<tr>
											<th>Last Name :</th>
											<td class="text"><span></span></td>
										</tr>
										<tr>
											<th>Email :</th>
											<td></td>
										</tr>
										<tr>
											<th>Position :</th>
											<td></td>
										</tr>
										<tr>
											<th>Join Date :</th>
											<td></td>
										</tr>
										<tr>
											<th>Phone :</th>
											<td></td>
										</tr>
									</table>
								</div>
								<div class="col-md-4" style="margin-left: 10px;">
									<br><a href="" data-toggle="modal" data-target="#modal-update" class="btn btn-primary" data-popup="tooltip" data-placement="top" title="Progress Project"><i class="fa fa-edit"></i>Update Data Employee</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Add Address Employee </button><br><br>
							<div class="table-responsive">
								<table style="width: 100%;" id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Address</th>
											<th class="text-center">City</th>
											<th class="text-center">Province</th>
											<th class="text-center">ZIP Code</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$nomor = 1;
										foreach ($detailemployee as $d) {
											$id = $d['id']; ?>
											<tr class="odd gradeX">
												<td style="width: 2%; vertical-align:middle;" class="text-center"><?php echo $nomor++; ?></td>
												<td style="width: 13%; vertical-align:middle;" class="text-center"><?php echo $d['address']; ?></td>
												<td style="width: 15%;" class="text-center"><?php echo $d['city']; ?></td>
												<td style="width: 10%;" class="text-center"><?php echo $d['province']; ?></td>
												<td style="width: 10%;" class="text-center"><?php echo $d['zip_code']; ?></td>
												<td style="width: 10%;" class="text-center ">
													<button type="button" class="btn btn-warning btn-circle btn-sm" title="Edit Data"><i class="fas fa-edit"></i></button>
													<button type="button" class="btn btn-danger btn-circle btn-sm" title="Hapus Data"><i class="fas fa-trash"></i></button>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>