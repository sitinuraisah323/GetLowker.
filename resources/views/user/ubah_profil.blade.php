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

        <div class="card-body">
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
          
 <!-- ======= Contact Section ======= -->
       <div> 
        <div class="contact container row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
            @foreach($profil as $r)
              <img src="/img/{{ $r->foto }}" class="blog blog-author d-flex align-items-center container rounded-circle float-left" alt="" style="border-radius: 50%; width: 270px; height: 270px;">
               
               <div class="col-md-12">
                <div class="info-box mt-4">
                  <div> 
                    <h4 style="text-align: center;"><b>{{ $r->name }}</b></h4><br>
                  </div>
              
                  <a href=" {{ route('profil.edit', $r->id_profil) }} "><i class="bx bx-pencil"></i><br>Ubah Data Profil</a>
 
                  
                   <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <ul class="faq-list accordion" data-aos="fade-up">
        
          <li>                 
            <h5 data-bs-toggle="collapse" class="collapsed">Jenis Kelamin : {{ $r->jenis_kelamin }}</h5> 
          </li>

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Nomor Handphone : {{ $r->no_hp }}</h5>
          </li> 

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Email : {{ $r->email }}</h5>
          </li>

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Tempat Lahir : {{ $r->tempat_lahir }}</h5>
        </li>

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Tanggal Lahir :  {{ $r->tanggal_lahir }}</h5>
          </li>

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Alamat : {{ $r->alamat }}</h5>
          </li>

        </ul>

      </div> @endforeach
    </section><!-- End Frequently Asked Questions Section -->

                </div>
              </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



       </div>
     </div>
      </div>
    </section>

   


  </main><!-- End #main -->