@extends('layouts.layout_adm')
@section('content')


<div class="">
<div class="page-title">
						<div class="title_left">
							
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

						<div class="row">

							 

            <!--                     <div class="card-body">
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif -->
          
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
        </div>

					 <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tambah Admin <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      
                        
												<div class="x_panel">
													
													

								<div class="x_content">
									<br />
									<form method="post" action=" {{ route('admin.store') }} " class="form-label-left input_mask">
										@csrf
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Nama Lengkap</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap">
																				@error('name')
				                                   	<span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Email</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
																				@error('email')
				                                   	<span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Password</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
 																				@error('password')
				                                   	<span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Confirm Password</label>
											<div class="col-md-7 col-sm-7 ">
												<input id="password-confirm" name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm Password" autocomplete="new-password">
 																				
										</div>

										</div>


												<input name="role" type="hidden" class="form-control" placeholder="Nama Lengkap" value="Admin">		

										<div class="ln_solid"></div>
										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="button" class="btn btn-primary">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success" name="submit">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
                      </div>
                      <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-md-12 ">
												<div class="x_panel">
													
														<div class="clearfix"></div>
													
													<div class="x_content">
														<br />
														<form method="post" action=" {{ route('profilAdmin.store') }} " class="form-label-left input_mask">
															@csrf

																		<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Pilih Email</label>
											<div class="col-md-7 col-sm-7 ">
												<select  name="name" type="text" class="form-control " >
													@foreach($admin as $a)
													<option value="{{ $a->id }}">{{ $a->email }}</option>
													@endforeach
												</select>
												
																				@error('name')
				                                   	<span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>

															<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">Jenis Kelamin</label>
															<p class="col-md-2 col-sm-2 ">
																L:
																<input type="radio" class="flat @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="Laki-laki"  required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P:
																<input type="radio" class="flat @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="Perempuan" />
															</p>
																									@error('jenis_kelamin')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
															</div>	
															<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">Foto </label>
																<div class="col-md-7 col-sm-7 ">
																	<input name="foto" type="file" class="form-control @error('foto') is-invalid @enderror" placeholder="Foto ">
																									@error('foto')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
																</div>
															</div>
																<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">No HP</label>
																<div class="col-md-7 col-sm-7 ">
																	<input name="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="No HP">
																									@error('no_hp')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
																</div>
															</div>		
															<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">Tempat Lahir</label>
																<div class="col-md-7 col-sm-7 ">
																	<input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir">
																									@error('tempat_lahir')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
																</div>
															</div>	
																<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">Tanggal Lahir</label>
																<div class="col-md-7 col-sm-7 ">
																	<input name="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="Tanggal Lahir">
																									@error('tanggal_lahir')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
																</div>
															</div>				
																<div class="form-group row">
																<label class="col-form-label col-md-3 col-sm-3 ">Alamat</label>
																<div class="col-md-7 col-sm-7 ">
																	<input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat">
																									@error('alamat')
									                                   	<span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
					                                				@enderror
																</div>
															</div>		

															<div class="ln_solid"></div>
															<div class="form-group row">
																<div class="col-md-9 col-sm-9  offset-md-3">
																	<button type="button" class="btn btn-primary">Cancel</button>
																	<button class="btn btn-primary" type="reset">Reset</button>
																	<button type="submit" class="btn btn-success" name="submit">Submit</button>
																</div>
															</div>

														</form>
													</div>
												</div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
 -->
		


					</div>		
					</div>
				</div>

@endsection