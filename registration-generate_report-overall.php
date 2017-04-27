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
											<small>Overall - Registration</small>
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
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
	
												<label for="program_information">Outreach workshop information</label>
												<select name="program_information" id="program_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="business_related_gov_regulation">Business related Gov. Regulations</option>
													<option value="profitable_business_ideas">Selecting Profitable Business Ideas</option>
												</select>

											</div>
											
											<div class="col-sm-6 form-group">
												<label for="eligibility_for_market_visit">Assessment Information</label>
												<select name="eligibility_for_market_visit" id="eligibility_for_market_visit" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="individual_assestment">Skillset to implement the plan</option>
													<option value="waiting_list">Experience</option>
													<option value="waiting_list">Number of competitors</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 form-group">
												<label for="eligibility_for_market_visit">Status</label>
												<select name="eligibility_for_market_visit" id="eligibility_for_market_visit" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
													<option value="individual_assestment">Selected for registration</option>
													<option value="waiting_list">Waiting List</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label for="eligibility_for_market_visit">Date time range</label>
												<div class="row">
													<div class="col-sm-6 form-group">
														<div class="input-group date">
															<div class="input-group-addon">
																<span class="fa fa-calendar"></span>
															</div>
															<input type="text" name="outreach_worshop_attended_date" placeholder="From date time" class="form-control" data-provide="datepicker">
														</div>
													</div>
													<div class="col-sm-6 form-group">
														<div class="input-group date">
															<div class="input-group-addon">
																<span class="fa fa-calendar"></span>
															</div>
															<input type="text" name="outreach_worshop_attended_date" placeholder="To date time" class="form-control" data-provide="datepicker">
														</div>
													</div>
												</div>
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
							
							<div class="panel panel-default">
								<div class="panel-heading">Demographic Information</div>
								<div class="panel-body">
									<div class="row">

										<!-- Gender -->
										<div class="col-sm-6">
											<div id="outreach_generate_report_overall_demographic_chart_gender">
												<canvas class="chart-canvas"></canvas>
											</div>	
										</div>

										<!-- NID -->
										<div class="col-sm-6">
											<div id="outreach_generate_report_overall_demographic_chart_nid">
												<canvas class="chart-canvas"></canvas>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Demographic Analytic -->
						
						<!-- Business Analytic -->
						<div class="col-sm-8">
							<div class="panel panel-default">
								<div class="panel-heading">Business Information</div>
								<div class="panel-body">
									<div class="row">

										<!-- NUmber of employees chart -->
										<div class="col-sm-6">
											<div id="outreach_generate_report_overall_business_chart_employees">
												<canvas class="chart-canvas"></canvas>
											</div>
										</div>
										<!-- End Number of Employees Chart -->

										<!-- Bank loan and trannning -->
										<div class="col-sm-6">
											<div class="row">

											<!-- Bank Loan -->
											<div class="col-sm-6">
												<div id="outreach_generate_report_overall_business_chart_bankloan">
													<canvas class="chart-canvas"></canvas>
												</div>	
											</div>

											<!-- Tranning -->
											<div class="col-sm-6">
												<div id="outreach_generate_report_overall_business_chart_tranning">
													<canvas class="chart-canvas"></canvas>
												</div>	
											</div>
										</div>
										</div>
										<!-- End Bank Loan and trannning -->

									</div>
								</div>
							</div>
						</div>
						<!-- End Business Analytic -->
					</div>

					<div class="row">
						<!-- Parsonal / Market analysis -->
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									Eligibility for personal / Market Visit
								</div>
								<div class="panel-body">
									<div id="outreach_generate_report_overall_market_visit_chart">
										<canvas class="chart-canvas"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- End Parsonal / Market analysis -->

						<!-- Time analysis -->
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									Time
								</div>
								<div class="panel-body">
									<div id="outreach_generate_report_overall_time_chart">
										<canvas class="chart-canvas"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- End Time analysis -->
					</div>
					<!-- End Analytic Reports Section -->
					
					<!-- Analytic report download section -->
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="well well-sm">
								<button type="button" class="btn btn-sm btn-default">Share</button>
								<button type="button" class="btn btn-sm btn-default">Print</button>
								<button type="button" class="btn btn-sm btn-default">Download</button>
							</div>
						</div>
					</div>
					<!-- End Analytic report download section -->

				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>
		<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>