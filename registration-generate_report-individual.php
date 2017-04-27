<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="icon" href="#">

		<!-- Page Title -->
		<title>Byeah - Dahboard</title>

		<!-- Global CSS [ Bootstrap, Font-Awesome, Bootsreap Datepicker, Bootstrap Select, Bootstrap Data Table ] -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.min.css">

		<link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
		<link href="assets/byeah-dashboard/byeah-dashboard.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

		<!-- APP CSS -->
		<link rel="stylesheet" href="assets/css/app.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		
		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Navbar -->
			<?php include_once 'components/navbar.php'; ?>
			<!-- End Navbar -->
		
			<!-- Page Wrapper -->
			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="row">
						
						<br>
						
						<!-- Individuals Data Table -->
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Report - Individual <br> <small>Click to an individual list to get more details.</small></h4>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>ID No.</th>
												<th>Photograph</th>
												<th>Email</th>
												<th>Mobile number</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach (range(0, 500) as $i): ?>
												<tr>
													<td>#1</td>
													<td><img src="http://placehold.it/40x40" alt="X's Profile Image" class="img-sm-circle"></td>
													<td>example@email.com</td>
													<td>+88 XXX XX XX XX</td>
													<td>
														<div class="btn-group">
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_view" data-plugin="tooltip" title="View">
																<i class="fa fa-lg fa-eye"></i>
															</a>
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_edit" data-plugin="tooltip" title="Edit">
																<i class="fa fa-lg fa-edit"></i>
															</a>
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_delete" data-plugin="tooltip" title="Delete">
																<i class="fa fa-lg fa-trash"></i>
															</a>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- End Individuals Data Table -->
	
					</div>
				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>
		<!-- End Page Wrapper -->
		
		<!-- Global Modal -->
		<div class="modal fade" id="_global_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body text-center">
						<i class="fa fa-3x fa-spin fa-spinner"></i>
						<h5>Please wait...</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- End Global Modal -->

		<!-- Global JS [  jQuery, Bootstrap, Bootstrap Datepicker, Bootstrap Select, Bootstrap Data Table ] -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/dataTables.bootstrap.min.js"></script>

		<script type="text/javascript" src="assets/vendor/metisMenu/metisMenu.min.js"></script>
		<script type="text/javascript" src="assets/byeah-dashboard/byeah-dashboard.js"></script>

		<!-- APP JS -->
		<script type="text/javascript" src="assets/js/app.min.js"></script>

		<script>
	    $(document).ready(function() {
	        $('#dataTables-example').DataTable({
	            responsive: true
	        });
	    });
	    </script>

	</body>
</html>