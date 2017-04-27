<?php include_once 'components/html_start.php'; ?>
		
<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Navbar -->
	<?php include_once 'components/navbar.php'; ?>
	<!-- End Navbar -->

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<div class="container-fluid">
			
			<br>

			<div class="row">
				
				<form action="#" method="GET" autocomplete="off">
					<div class="col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>
									Reports - Batch-wise
									<br>
									<small>Select batch number to get more data</small>
								</h4>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6 form-group">

										<div class="input-group">
											<select name="batch_group" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" data-live-search="true">
												<option value="0">Select Batch</option>
												<option value="1">Batch One</option>
												<option value="2">Batch Two</option>
												<option value="3">Batch Three</option>
												<option value="4">Batch Four</option>
											</select>
											<span class="input-group-btn">
												<button type="submit" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
											</span>
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				
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