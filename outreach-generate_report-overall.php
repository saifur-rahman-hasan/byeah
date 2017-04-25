<?php include_once 'components/html_start.php'; ?>
		
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


					<!-- Analytic Reports Section -->
					<div class="row">
						
						<!-- Demographic Analytic -->
						<div class="col-sm-4">
							<div class="well well-sm">
								<div id="outreach_generate_report_overall_demographic_chart">
									<canvas class="chart-canvas"></canvas>
								</div>
							</div>	
						</div>
						<!-- End Demographic Analytic -->

					</div>
					<!-- End Analytic Reports Section -->

				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>
		<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>