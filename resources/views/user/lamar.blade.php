
@extends('layouts.layout1')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Lamar</li>
        </ol>
        <h2>Lamar</h2>

      </div>
    </section><!-- End Breadcrumbs -->

     <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">
        
          
 <!-- ======= Contact Section ======= -->
       <div> 
        <div class="contact container row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
              @foreach($email as $e)
            <form action="{{ route('lamar.update', $e->id_lowker) }}" method="post" class="php-email-form">
              @endforeach
              @method ('PUT')
              @csrf
              <div>
                <div class="section-title">
                  <h2>Lamar Pekerjaan</h2>
                </div>
              </div>
              @foreach($email as $e)
              <input type="hidden" class="form-control" value=" {{ $e->email }} " name="email" id="Email" placeholder="Email" required>
              <input type="hidden" class="form-control" value=" {{ $e->perusahaan }} " name="perusahaan" id="Email" placeholder="text" required>
              <input type="hidden" class="form-control" value=" {{ $e->posisi }} " name="posisi" id="Email" placeholder="Email" required>
              @endforeach
             
              <div class="row">
                 <label class="col-2 form-group">Upload CV/Resume</label>:
              </div>
            <div class="row">
              <div class="col-6 form-group">
                <input type="file" class="form-control" name="cv" id="cv" placeholder="cv" required>
              </div>
            </div>  
            

              <div class="my-3">
                
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-succes">Lamar</button>
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