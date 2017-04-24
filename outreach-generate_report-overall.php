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

						<div class="col-sm-12">
							
							<!-- Form - Overall Outreach Report -->
							<form action="#" method="POST" id="form-outreach-overall-report-search" class="form">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4>
											Reports - Search <br>
											<small>Overall - Outreach Workshop</small>
										</h4>
									</div>

									<div class="panel-body">
										
										<div class="row">
											<div class="col-sm-6 form-group">
	
												<label for="demographic_information">Demographic Information</label>
												<select name="demographic_information" id="demographic_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="age">Age</option>
													<option value="gender">Gender</option>
													<option value="education">Education</option>
													<option value="nid">NID</option>
													<option value="location">Location</option>
													<option value="gender">Gender</option>
												</select>

											</div>

											<div class="col-sm-6 form-group">
												<label for="business_information">Business Information</label>
												<select name="business_information" id="business_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="type">Type</option>
													<option value="number_of_employees">Number of Employees</option>
													<option value="bank_loan">Bank Loan</option>
													<option value="traning">Traning</option>
													<option value="area_of_interest">Area of Interests</option>
													<option value="gender">Gender</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
	
												<label for="program_information">Programe Related Information</label>
												<select name="program_information" id="program_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="business_related_gov_regulation">Business related Gov. Regulations</option>
													<option value="profitable_business_ideas">Selecting Profitable Business Ideas</option>
												</select>

											</div>

											<div class="col-sm-6 form-group">
												<label for="eligibility_for_market_visit">Eligibility for market Visit</label>
												<select name="eligibility_for_market_visit" id="eligibility_for_market_visit" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="individual_assestment">individual assestment</option>
													<option value="waiting_list">Waiting List</option>
												</select>
											</div>
										</div>

									</div>

									<div class="panel-footer">
										<button type="reset" class="btn btn-sm btn-default">Reset form</button>
										<button type="submit" class="btn btn-sm btn-info">Generate Report</button>
									</div>

								</div>
							</form>
							<!-- End Form - Overall Outreach Report -->
							
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