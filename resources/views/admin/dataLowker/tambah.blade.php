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
										
						<div class="col-md-12 ">
							<div class="x_panel">
								<div class="x_title">
									<strong><h2>Tambah Data Lowker<small></small></h2></strong>
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
									<br />
									<form method="post" action=" {{ route('lowker1.store') }} " class="form-label-left input_mask">
										@csrf
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Posisi</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" placeholder="Posisi">
																				@error('posisi')
				                                   	<span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Nama Perusahaan</label>
											<div class="col-md-7 col-sm-7 ">
												<select class="form-control @error('id_perusahaan') is-invalid @enderror" name="id_perusahaan">
													@foreach($perusahaan as $p)
													<option value=" {{ $p->id_perusahaan }} "> {{ $p->perusahaan }} </option>
													@endforeach
												</select>
												@error('id_perusahaan')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Lokasi</label>
											<div class="col-md-7 col-sm-7 ">
												<select class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" >
													@foreach($kota as $k)
													<option value=" {{ $k->nama_kota }} "> {{ $k->nama_kota }} </option>
													@endforeach
												</select>
												@error('lokasi')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Gaji</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="gaji" type="text" class="form-control @error('gaji') is-invalid @enderror" placeholder="Gaji" >
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Level Pekerjaan</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="level" type="text" class="form-control @error('level') is-invalid @enderror" placeholder="Level Pekerjaan">
												@error('level')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Tipe Pekerjaan</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="tipe" type="text" class="form-control @error('tipe') is-invalid @enderror" placeholder="Tipe Pekerjaan">
												@error('tipe')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Pendidikan</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="Pendidikan">
												@error('pendidikan')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
											</div>
										</div>
										<div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 "> Kualifikasi Pekerjaan</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <textarea name="kualifikasi" class="resizable_textarea form-control @error('kualifikasi') is-invalid @enderror" placeholder="Kualifikasi Pekerjaan"></textarea>
                                                @error('kualifikasi')
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $message }}</strong>
				                                    </span>
                                				@enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 "> Deskripsi Pekerjaan</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <textarea name="deskripsi" class="resizable_textarea form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi Pekerjaan"></textarea>
                                                @error('deskripsi')
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

@endsection