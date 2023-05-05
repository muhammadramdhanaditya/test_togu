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
							<h3 class="card-title"> Add Address Employee</h3>
						</div>
						<div class="card-body">
							<div class="col-12">
								<div class="row">
									<div class="form-group col-6">
										<label class='col-xs-3'>Address</label>
										<div class='col-xs-8'><input type="text" name="project_name" autocomplete="off" required placeholder="First Name" class="form-control"></div>
									</div>
									<div class="form-group col-6">
										<label class='col-xs-3'>City</label>
										<div class='col-xs-8'><input type="text" name="project_name" autocomplete="off" required placeholder="Last Name" class="form-control"></div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="row">
									<div class="form-group col-6">
										<label class='col-xs-3'>Province</label>
										<div class='col-xs-8'><input type="text" name="project_name" autocomplete="off" required placeholder="First Name" class="form-control"></div>
									</div>
									<div class="form-group col-6">
										<label class='col-xs-3'>ZIP Code</label>
										<div class='col-xs-8'><input type="text" name="project_name" autocomplete="off" required placeholder="Last Name" class="form-control"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"> </i> Save</button>
							<a class="btn btn-danger float-right" href="<?php echo base_url() . "employee" ?>"><i class="fa fa-undo"> </i> Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>