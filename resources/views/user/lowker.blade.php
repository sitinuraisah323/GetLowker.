@extends('layouts.layout1')
@section('content')

  <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Lowongan Kerja</li>
        </ol>
        <h2>Lowongan Kerja</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

           <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action=" {{ url('lowker') }} " method="GET">
                  
                  <input type="text" name="cari" placeholder="Posisi/Kota">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
              
              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

          <div class="col-lg-8 entries">
            @foreach($lowker as $a)
            <article class="entry">

              <div class="entry-img">
                <img src="/img/{{ $a->logo }}" alt="" class="img-fluid">
              </div>
             

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $a->posisi }} - {{ $a->perusahaan }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi-pin-map-fill  "></i>{{ $a->lokasi }}</</li>
                  <li class="d-flex align-items-center"><i class="bi bi-cash"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $a->gaji }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>{{ $a->created_at }}</li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{ $a->kualifikasi }}
                </p>
                <div class="read-more">
                  <a href=" {{ route('cariLowker.edit', $a->id_lowker) }} ">Selengkapnya</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            
            <div class="blog-pagination">
              <ul class="justify-content-center">

                
                  {{ $lowker->links() }}
              
              </ul>
            </div>

          </div><!-- End blog entries list -->

         

        </div>

      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->
           <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
@endsection