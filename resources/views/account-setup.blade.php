<x-app-layout>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<div class="card mt-5 card-custom gutter-b example example-compact">
				<div class="card-header">
					<h3 class="card-title">Account Setup</h3>
				
				</div>
				<!--begin::Form-->
				<form class="form" method="post" action="{{url('account-setup')}}">
				@csrf
												<div class="card-body">
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Personal Info:</h3>
													<div class="mb-15">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">First Name:<span class="text-danger">*</span></label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="first_name" required placeholder="Enter first name">
																<span class="form-text text-muted">Please enter your first name</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Last name:<span class="text-danger">*</span></label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="last_name" required placeholder="Enter last name">
																<span class="form-text text-muted">Please enter your last name</span>
															</div>
														</div>
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Date of Birth:<span class="text-danger">*</span></label>
															<div class="col-lg-6">
																<input type="date" class="form-control" name="dob" required placeholder="Date of birth">
																<span class="form-text text-muted">Please enter your date of birth</span>
															</div>
														</div>
														
														
														
															<div class="form-group row">
															<label class="col-lg-3 col-form-label">Gender:<span class="text-danger">*</span></label>
															<div class="col-lg-6">
																<div class="radio-inline">
																<label class="radio radio-solid">
																<input type="radio" name="gender" checked="checked" value="male">
																<span></span>Male</label>
																<label class="radio radio-solid">
																<input type="radio" name="gender" value="female">
																<span></span>Female</label>
															</div>
															<span class="form-text text-muted">Please select your gender</span>
															</div>
														</div>
														
												
														
														
														
													</div>
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Other Details:</h3>
													<div class="mb-3">
														
															<div class="form-group row">
															<label class="col-lg-3 col-form-label">Annual income:<span class="text-danger">*</span></label>
															<div class="col-lg-6">
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="fas fa-rupee-sign"></i>
																		</span>
																	</div>
																	<input type="number" name="annual_income" class="form-control" required placeholder="Annual income">
																</div>
																<span class="form-text text-muted">Please enter your average anual income</span>
															</div>
														</div>
														
														
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Occupation:</label>
															<div class="col-lg-6">
															<select class="form-control" name="occupation">
                                                                <option selected="true" disabled="disabled">Choose Occupation</option>    
																<option>Private Job</option>
																<option>Government Job</option>
																<option>Business</option>

															</select>
										
															</div>
														</div>
														
														
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Family Type:</label>
															<div class="col-lg-6">
															<select class="form-control" name="family_type">
                                                                <option selected="true" disabled="disabled">Choose Family Type</option>    
																<option>Joint Family</option>
																<option>Nuclear family</option>
															</select>
															</div>
														</div>
														
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Manglik :</label>
															<div class="col-lg-6">
															<select class="form-control" name="manglik">
                                                                <option selected="true" disabled="disabled">Choose Manglik</option>    
																<option>Yes</option>
																<option>No</option>
															</select>
															<span class="form-text text-muted">Please slect that you are manglik or not</span>
															</div>
														</div>
														
														
													</div>
											
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="submit" class="btn btn-success mr-2">Create Account</button>
															<button type="reset" class="btn btn-secondary">Reset</button>
														</div>
														
														
													</div>
												</div>
											</form>
				<!--end::Form-->
			</div>
		</div>
	</div>
</div>
</x-app-layout>








