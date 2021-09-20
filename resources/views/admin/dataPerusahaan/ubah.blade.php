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
                        <div class="col-md-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <strong><h2>Tambah Data Perusahaan<small></small></h2></strong>
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
                                    
                                    <form method="post" action="{{ route('perusahaan.update', $edit->id_perusahaan) }}" class="form-label-left input_mask">
                                        @method ('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 ">Logo Perusahaan</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <input name="logo" type="file" class="form-control @error('logo') is-invalid @enderror" placeholder="Logo Perusahaan" value=" {{ $edit->logo }}">
                                                @error('logo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 "> Nama Perusahaan</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <input name="perusahaan" type="text" class="form-control @error('perusahaan') is-invalid @enderror" placeholder="Nama Perusahaan" value=" {{ $edit->perusahaan }}">
                                                @error('perusahaan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 "> Email</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email Perusahaan"  value=" {{ $edit->email }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 "> Profil Perusahaan</label>
                                            <div class="col-md-7 col-sm-7 ">
                                                <textarea name="profil" class="resizable_textarea form-control @error('profil') is-invalid @enderror" placeholder="Informasi Perusahaan ...">{{ $edit->profil }}</textarea>
                                                @error('profil')
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