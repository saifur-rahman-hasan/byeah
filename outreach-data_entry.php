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

		<!-- Global CSS [ Bootstrap, Font-Awesome, Bootsreap Datepicker, Bootstrap Select ] -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

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
						<br>
						<br>

						<div class="col-sm-8 col-sm-offset-2">
							
							<!-- Form - Outreach Data Entry -->
							<form action="#" method="POST" autocomplete="off">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4>
											Data Entry
											<br>
											<small>
												Please fill up the form to enter your data.
											</small>
										</h4>
									</div>

									<div class="panel-body">
										
										<!-- Program Information -->
										<label>Program Information</label>
										
										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="text" name="outreach_batch_number" placeholder="Outreach Batch Number" class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<input type="text" name="outreach_participant_number" placeholder="Participant Number" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<div class="input-group date">
												<div class="input-group-addon">
													<span class="fa fa-calendar"></span>
												</div>
												<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
											</div>
										</div>

										<!-- Demographic Information -->
										<label>Demographic Information</label>
										
										<div class="form-group">
											<input type="text" name="name" placeholder="Full name" class="form-control">
										</div>
										
										<div class="row">

											<div class="col-sm-6 form-group">
												<input type="text" name="father_name" placeholder="Father's name" class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<input type="text" name="mother_name" placeholder="Mother's name" class="form-control">
											</div>

										</div>

										<div class="form-group">
											<input type="text" name="" placeholder="Educational Qualifications" class="form-control">
										</div>
										
										<div class="row">
											
											<div class="col-sm-6 form-group">
												<input type="text" name="age" placeholder="Age" class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<select name="gender" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
													<option value="0">Gender</option>
													<option data-icon="fa fa-male" value="male">Male</option>
													<option data-icon="fa fa-female" value="female">Female</option>
												</select>
											</div>

										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<textarea name="present_address" class="form-control" placeholder="Present Address"></textarea>
											</div>

											<div class="col-sm-6 form-group">
												<textarea name="permanent_address" class="form-control" placeholder="Permanent Address"></textarea>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<select name="maritial_status" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
													<option value="0">Maritial Status</option>
													<option data-icon="fa fa-male" value="married">Married</option>
													<option data-icon="fa fa-female" value="unmarried">Unmarried</option>
												</select>
											</div>

											<div class="col-sm-6 form-group">
												<input type="number" name="number_of_family_members" placeholder="Number of family members" class="form-control">
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="number" name="number_of_children" placeholder="Number of Children" class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<input type="number" name="major_wage" placeholder="Major Wage" class="form-control">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="number" name="monthly_hh_income" placeholder="Monthly HH Income" class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<input type="number" name="number_of_years_living_in_dhaka" placeholder="Number of years living in Dhaka" class="form-control">
											</div>
										</div>

										<!-- Professional Related Information -->
										<label>Professional Related Information</label>

										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="text" name="business_area" placeholder="Which area of business" class="form-control">	
											</div>

											<div class="col-sm-6 form-group">
												<input type="number" name="monthly_business_income" placeholder="Monthly business income" class="form-control">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="number" name="number_of_employees" placeholder="Number of family members" class="form-control">	
											</div>

											<div class="col-sm-6 form-group">
												<select name="bank_loans" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
													<option value="0">Bank Loans</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<select name="traning_on_trade_category" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
													<option value="0">Traning on any trade category?</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>

											<div class="col-sm-6">
												<input type="text" name="business_interest" placeholder="Which are of business are you interested in?" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<input type="text" name="spacific_trade_name" placeholder="Please specify, Which trade?" class="form-control">
										</div>

										<!-- Office Use Information -->
										<label>Office Use Information</label>

										<div class="row">
											
											<div class="col-sm-6 form-group">
												<select name="selection_type" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
													<option value="0">Choose selection type</option>
													<option value="1">Selected for indiviaul assessment</option>
													<option value="2">Waiting List</option>
													<option value="3">Dropout</option>
												</select>
											</div>
											
											<div class="col-sm-6 form-group">
												<input type="text" name="name_of_recomender" placeholder="Name of recomender" class="form-control">
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<div class="input-group date">
													<div class="input-group-addon">
														<span class="fa fa-calendar"></span>
													</div>
													<input type="text" name="office_date" placeholder="Date" class="form-control" data-provide="datepicker">
												</div>
											</div>

											<div class="col-sm-6 form-group">
												<input type="text" name="name_of_approver" placeholder="Name of approver" class="form-control">
											</div>
										</div>

									</div>

									<div class="panel-footer text-right">
										<button type="reset" class="btn btn-sm btn-default">Clear form</button>
										<button type="submit" class="btn btn-sm btn-info">Save</button>
									</div>
								</div>
							</form>
							<!-- End Form - Outreach Data Entry -->

						</div>
					</div>
				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>
		<!-- End Page Wrapper -->

		<!-- Global JS [  jQuery, Bootstrap, Bootstrap Datepicker, Bootstrap Select ] -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

		<script type="text/javascript" src="assets/vendor/metisMenu/metisMenu.min.js"></script>
		<script type="text/javascript" src="assets/byeah-dashboard/byeah-dashboard.js"></script>

		<!-- APP JS -->
		<script type="text/javascript" src="assets/js/app.min.js"></script>

	</body>
</html>