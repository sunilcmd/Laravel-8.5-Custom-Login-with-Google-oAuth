<x-app-layout>
 



<div class="container-fluid my-5">
								<!--begin::Profile Overview-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
										<!--begin::Profile Card-->
										<div class="card card-custom card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
														<div class="symbol-label" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png')"></div>
														<i class="symbol-badge bg-success"></i>
													</div>
													<div>
														<a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$user->first_name}} {{$user->last_name}}</a>
														<div class="text-muted">{{$user->email}}</div>
														<div class="mt-2">
															<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-sm btn-warning font-weight-bold py-2 px-3 px-xxl-5 my-1">Logout</a>
															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	 {{ csrf_field() }}
															 </form>
														</div>	
													</div>
												</div>
												<!--end::User-->
												<!--begin::Contact-->
												<div class="py-9">
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Gender:</span>
														<a href="#" class="text-muted text-hover-primary">{{$user->gender}}</a>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Date of birth:</span>
														<span class="text-muted">{{$user->dob}}</span>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<span class="font-weight-bold mr-2">Occupation:</span>
														<span class="text-muted">{{$user->occupation}}</span>
													</div>
												</div>
												<!--end::Contact-->
												<!--begin::Nav-->
												
												
												
											
												<!--end::Nav-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Profile Card-->
									</div>
									<!--end::Aside-->
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Row-->
										<div class="row">



										</div>
										<!--end::Row-->
										<!--begin::Advance Table: Widget 7-->
										<div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Partner's suggestion</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
											


											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">



                                            <div class="container">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-end mb-7">
													<!--begin::Pic-->
													<div class="d-flex align-items-center">
														<!--begin::Pic-->
														<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
															<div class="symbol symbol-circle symbol-lg-75">
																<img src="https://i.pinimg.com/originals/09/ee/97/09ee9790e4a873be73302693a56a9bf6.jpg" alt="image">
															</div>
															<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
																<span class="font-size-h3 font-weight-boldest">JM</span>
															</div>
														</div>
														<!--end::Pic-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Priya Jain</a>
															<span class="text-muted font-weight-bold">Head of Development</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">I distinguish three 
												<a href="#" class="text-primary pr-1">#XRS-54PQ</a>objectives First objectives and nice cooked rice</p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Barcelona</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/300_10.jpg" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
															<span class="font-size-h3 font-weight-boldest">JM</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
														<span class="text-muted font-weight-bold">Head of Development</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">I distinguish three 
												<a href="#" class="text-primary pr-1">#XRS-65PQ</a>objectives First 
												<span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span>doloremagna</p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Barcelona</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75 d-none">
															<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/300_10.jpg" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary">
															<span class="symbol-label font-size-h3 font-weight-boldest">AK</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Anna Krox</a>
														<span class="text-muted font-weight-bold">Python Developer</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">I distinguish three 
												<a href="#" class="text-primary pr-1">#XRS-54PQ</a>objectives First merely first 
												<span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span></p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-2">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">52(43)56254826</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Moscow</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									
									
									
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="https://stylesatlife.com/wp-content/uploads/2018/04/South-Indian-Hairstyles-1.jpg.webp" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
															<span class="font-size-h3 font-weight-boldest">JM</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Ayushi Sharma</a>
														<span class="text-muted font-weight-bold">Atr Direcrtor</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Contrary to popular belief, Lorem Ipsum is not 
												<br>
												<a href="#" class="text-primary pr-1">#XRS-54PQ</a>simply random text</p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">jason@fifestudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Melbourne</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
							
							
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/300_2.jpg" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
															<span class="font-size-h3 font-weight-boldest">JM</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Teresa Fox</a>
														<span class="text-muted font-weight-bold">Project Manager</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Lorem Ipsum is simply 
												<a href="#" class="text-primary pr-1">#XRS-65PQ</a>dummy text of objectives and nice cooked rice</p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">teresa@festudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">75(58)87545243</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">France</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75 d-none">
															<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/300_10.jpg" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary">
															<span class="symbol-label font-size-h3 font-weight-boldest">GN</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Giannis Nelson</a>
														<span class="text-muted font-weight-bold">Python Developer</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">I distinguish three 
												<a href="#" class="text-primary pr-1">#XRS-65PQ</a>objectives First 
												<span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span>doloremagna</p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-2">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">52(43)56254826</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Moscow</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/300_16.jpg" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
															<span class="font-size-h3 font-weight-boldest">LM</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Lisa Moss</a>
														<span class="text-muted font-weight-bold">USD421/Annual</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">I distinguish three 
												<a href="#" class="text-primary pr-1">#XRS-54PQ</a>objectives First merely first 
												<span class="text-dark-75 font-weight-bolder pr-1">USD342/Annual</span></p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">lisa@fifestudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">43(16)98462644</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">London</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Label:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="https://stylesatlife.com/wp-content/uploads/2019/11/Blow-dried-wavy-look-with-bangs.jpg.webp" alt="image">
														</div>
														<div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
															<span class="font-size-h3 font-weight-boldest">JM</span>
														</div>
													</div>
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Harshita Singh</a>
														<span class="text-muted font-weight-bold">Atr Direcrtor</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Contrary to popular belief, Lorem Ipsum is not simply random text 
												<a href="#" class="text-primary pr-1">#XRS-65PQ.</a></p>
												<!--end::Desc-->
												<!--begin::Info-->
												<div class="mb-7">
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">nick@festudios.com</a>
													</div>
													<div class="d-flex justify-content-between align-items-cente my-1">
														<span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
														<a href="#" class="text-muted text-hover-primary">44(76)34254578</a>
													</div>
													<div class="d-flex justify-content-between align-items-center">
														<span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
														<span class="text-muted font-weight-bold">Melbourne</span>
													</div>
												</div>
												<!--end::Info-->
												<a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								
								
								
						
								<!--end::Row-->
								<!--begin::Pagination-->
						
								<!--end::Pagination-->
							</div>
												



                                          
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 7-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Profile Overview-->
							</div>







</x-app-layout>
