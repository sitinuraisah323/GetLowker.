@extends('layouts.layout_adm')
@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

           <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Perusahaan<small></small></h2>
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

                  <a href=" {{ route('perusahaan.create') }} " class="btn btn-success"><i class="fa fa-plus"></i></a>
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Logo Perusahaan</th>
                          <th>Nama Perusahaan </th>
                          <th>Email</th>
                          <th>Profil</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no=1;@endphp
                        @foreach($data as $a)
                              <tr>
                                <td> {{ $no++ }} </td>
                                <td>
                                  <div class="product_gallery">
                                    <a>
                                      <img src="/img/{{ $a->logo }}" alt="..." />
                                    </a>
                                  </div>
                                </td>
                                <td>{{ $a->perusahaan }} </td>
                                <td>{{ $a->email }} </td>
                                <td>{{ $a->profil }}</td>
                                 
                               <td>
                            <form method="post" action="{{ route('perusahaan.destroy', $a->id_perusahaan) }}">
                              @method ('DELETE')
                              @csrf
                                  
                            <a href=" {{ route('perusahaan.edit', $a->id_perusahaan) }}" class="btn btn-primary "><i class="fa fa-pencil"></i></a>

                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>

                            </form>
                          </td>
                            </tr>
                            @endforeach
                           

                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
 @endsection