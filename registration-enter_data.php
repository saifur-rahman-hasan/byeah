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
										<button type="submit" class="btn btn-sm btn-default">Preview</button>
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

<?php include_once 'components/html_stop.php'; ?>