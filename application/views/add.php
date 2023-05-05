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
		<div class="container-fluid" style="margin-top: 20px;">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"> Add Data Employee</h3>
						</div>
						<form class="form-horizontal" role="form" action="<?php echo base_url() . "addsave" ?>" method="post">
							<div class="card-body">
								<div class="col-12">
									<div class="row">
										<div class="form-group col-6">
											<label class='col-xs-3'>First Name</label>
											<div class='col-xs-8'><input type="text" name="first_name" autocomplete="off" required placeholder="First Name" class="form-control"></div>
										</div>
										<div class="form-group col-6">
											<label class='col-xs-3'>Last Name</label>
											<div class='col-xs-8'><input type="text" name="last_name" autocomplete="off" required placeholder="Last Name" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="form-group col-6">
											<label class='col-xs-3'>Email</label>
											<div class='col-xs-8'><input type="text" name="email" autocomplete="off" required placeholder="Email" class="form-control"></div>
										</div>
										<div class="form-group col-6">
											<label class='col-xs-3'>Position</label>
											<div class='col-xs-8'><input type="text" name="position" autocomplete="off" required placeholder="Position" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="form-group col-6">
											<label class='col-xs-3'>Join Date</label>
											<div class='col-xs-8'><input type="date" name="join_date" autocomplete="off" required placeholder="Join Date" class="form-control"></div>
										</div>
										<div class="form-group col-6">
											<label class='col-xs-3'>Phone</label>
											<div class='col-xs-8'><input type="text" name="phone" autocomplete="off" required placeholder="Phone" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="form-group col-6">
											<label class='col-xs-3'>Address</label>
											<div class='col-xs-8'><input type="text" name="address" autocomplete="off" required placeholder="Address" class="form-control"></div>
										</div>
										<div class="form-group col-6">
											<label class='col-xs-3'>City</label>
											<div class='col-xs-8'><input type="text" name="city" autocomplete="off" required placeholder="City" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="form-group col-6">
											<label class='col-xs-3'>Province</label>
											<div class='col-xs-8'><input type="text" name="province" autocomplete="off" required placeholder="Province" class="form-control"></div>
										</div>
										<div class="form-group col-6">
											<label class='col-xs-3'>ZIP Code</label>
											<div class='col-xs-8'><input type="text" name="zip_code" autocomplete="off" required placeholder="ZIP Code" class="form-control"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"> </i> Save</button>
								<a class="btn btn-danger float-right" href="<?php echo base_url() . "employee" ?>"><i class="fa fa-undo"> </i> Back</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>