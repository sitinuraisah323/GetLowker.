
@extends('layouts.layout1')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Profil</li>
        </ol>
        <h2>Profil</h2>

      </div>
    </section><!-- End Breadcrumbs -->

     <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">
        
          
 <!-- ======= Contact Section ======= -->
       <div> 
        <div class="contact container row" data-aos="fade-up" data-aos-delay="100">

          <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
        </div>

          <div class="col-lg-12">
             @foreach($edit_profil as $r)
            <form action="{{ route('profil.update', $r->id_profil) }}" method="post" class="php-email-form">
              @method ('PUT')
              @csrf
              <div>
                <div class="section-title">
                  <h2>Ubah Profil</h2>
                </div>
              </div>
             
              <input type="hidden" class="form-control" value=" {{ $r->id_profil }} " name="id_profil" id="id" placeholder="id" required>
              <div class="row">
                 <input type="hidden" class="form-control" value=" {{ $r->id }} " name="id" id="id" placeholder="id" required>
                 <label class="col-2 form-group">Jenis Kelamin</label>:
                <div class="col-2 form-group">
                 
                  <input type="radio" name="jenis_kelamin" class="" value="Laki-laki" placeholder="Your Jenis" required> Laki-Laki
                </div>
                <div class="col-2 form-group">
                  <input type="radio" name="jenis_kelamin" class="" value="Perempuan" placeholder="Your Jenis" required> Perempuan
                </div>
              </div>
            <div class="row">
              <div class="col-6 form-group">
                <input type="file" class="form-control" value=" {{ $r->foto }} " name="foto" id="foto" placeholder="Foto" required>
              </div>
              <div class="col-6 form-group">
                <input type="text" class="form-control" value=" {{ $r->no_hp }} " name="no_hp" id="no_hp" placeholder="Nomor Handphone" required>
              </div>
            </div>  
            <div class="row">
              <div class="col-6 form-group">
                <input type="text" class="form-control" value=" {{ $r->tempat_lahir }} " name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
              </div>
              <div class="col-6 form-group">
                <input type="date" class="form-control" value=" {{ $r->tanggal_lahir }} " name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
              </div>
            </div>

            
             <div class="row">
              <div class="col-12 form-group">
                <input type="text" class="form-control" value=" {{ $r->alamat }} " name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
          @endforeach
              <div class="my-3">
                
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-succes">Ubah</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



       </div>
     </div>
      </div>
    </section>

  </main><!-- End #main -->


  @endsection