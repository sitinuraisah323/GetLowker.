
<?php $__env->startSection('content'); ?>


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
						<div class="col-md-12 ">
							<div class="x_panel">
								<div class="x_title">
									<strong><h2>Tambah Data Pegawai<small></small></h2></strong>
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
									<form method="post" action="" class="form-label-left input_mask">
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Nama Pegawai</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="nama_pegawai" type="text" class="form-control" placeholder="Nama Pegawai">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Nama Pegawai</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="nama_pegawai" type="text" class="form-control" placeholder="Nama Pegawai">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Foto Pegawai</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="foto" type="file" class="form-control" placeholder="Gambar">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Nama Pegawai</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="nama_pegawai" type="text" class="form-control" placeholder="Nama Pegawai">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Alamat</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="alamat" type="text" class="form-control" placeholder="Alamat">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Kabupate/Kota</label>
											<div class="col-md-7 col-sm-7 ">
												<select class="form-control" name="kota">
													
													<option value=""> </option>
												
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Nomor Telepon</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 "> Tarif</label>
											<div class="col-md-7 col-sm-7 ">
												<input name="tarif_dokter" type="text" class="form-control" placeholder="Tarif">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\findJob\resources\views/admin/dataUser/tambah_user.blade.php ENDPATH**/ ?>