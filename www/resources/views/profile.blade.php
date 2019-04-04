@extends('layouts.main')

@section('title', 'KIIT E-Summit\'18 | Dashboard')

@section('content')

<div class="row">
								<div class="col-lg-4">
									<div class="m-portlet m-portlet--full-height  ">
										<div class="m-portlet__body">
											<div class="m-card-profile">
												<div class="m-card-profile__title m--hide">
													Your Profile
												</div>
												<div class="m-card-profile__pic">
													<div class="m-card-profile__pic-wrapper">
														<img src="assets/img/user-placeholder.png"/>
													</div>
												</div>
												<div class="m-card-profile__details">
													<span class="m-card-profile__name">
														Mark Andre
													</span>
													<a href="" class="m-card-profile__email m-link">
														mark.andre@gmail.com
													</a>
												</div>
											</div>
											<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
												<li class="m-nav__separator m-nav__separator--fit"></li>
												<li class="m-nav__section m--hide">
													<span class="m-nav__section-text">
														Section
													</span>
												</li>												
												<li class="m-nav__item">
													<a href="header/profile&amp;demo=default.html" class="m-nav__link">
														<i class="m-nav__link-icon flaticon-share"></i>
														<span class="m-nav__link-text">
															Messages
														</span>
													</a>
												</li>
												<li class="m-nav__item">
													<a href="header/profile&amp;demo=default.html" class="m-nav__link">
														<i class="m-nav__link-icon flaticon-share"></i>
														<span class="m-nav__link-text">
															My Transactions
														</span>
													</a>
												</li>
												
											</ul>
											<div class="m-portlet__body-separator"></div>
											
										</div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-tools">
												<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
															<i class="flaticon-share m--hide"></i>
															Update Profile
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
															Tracks
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
															Extras
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
															Settings
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="m_user_profile_tab_1">
												<form class="m-form m-form--fit m-form--label-align-right">
													<div class="m-portlet__body">														
														<div class="form-group m-form__group row">
															<div class="col-10 ml-auto">
																<h3 class="m-form__section">
																	1. Personal Details
																</h3>
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Full Name
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="Mark Andre">
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Mob No.
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="CTO">
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Alternate Mob No.
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="Keenthemes">	
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Profile Type
															</label>
															<div class="col-7">
																<select class="form-control m-input" id="exampleSelect1">
																	<option>
																	Student
																	</option>
																	<option>
																	Startup
																	</option>
																	<option>
																	Professional
																	</option>			
																</select>	
															</div>
														</div>
														
														<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
														<div class="form-group m-form__group row">
															<div class="col-10 ml-auto">
																<h3 class="m-form__section">
																	2. Address
																</h3>
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Address
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="L-12-20 Vertex, Cybersquare">
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Country
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="California">
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																State
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="San Francisco">
															</div>
														</div>
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																City
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="California">
															</div>
														</div>
														
														<div class="form-group m-form__group row">
															<label for="example-text-input" class="col-2 col-form-label">
																Postcode
															</label>
															<div class="col-7">
																<input class="form-control m-input" type="text" value="45000">
															</div>
														</div>
														
													<div class="m-portlet__foot m-portlet__foot--fit">
														<div class="m-form__actions">
															<div class="row">
																<div class="col-2"></div>
																<div class="col-7">
																	<button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">
																		Save changes
																	</button>
																	&nbsp;&nbsp;
																	
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="tab-pane active" id="m_user_profile_tab_2"></div>
										</div>
									</div>
								</div>
							</div>

							@endsection