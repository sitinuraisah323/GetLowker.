@extends('layouts.layout1')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>LowKer Details</li>
        </ol>
        <h2>LowKer Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-7">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  @foreach($edit as $a)
                  <img src="/img/{{ $a->logo }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/{{ $a->logo }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/img/{{ $a->logo }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="portfolio-description">
              <h2>Kualifikasi</h2>
              <p>
               {{ $a->kualifikasi }}
              </p>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <p>
               {{ $a->deskripsi }}
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3>{{ $a->posisi }} - {{ $a->perusahaan }}</h3>
              <ul>
                <li><strong>Gaji</strong> : Rp. {{ $a->gaji }}</li>
                <li><strong>Lokasi</strong> : {{ $a->lokasi }}</li>
                <li><strong>Pendidikan</strong> : {{ $a->pendidikan }}</li>
                <li><strong>Tipe</strong> : {{ $a->tipe }}</li>
                <li><strong>Level</strong> : {{ $a->level }}</li>
                <li><strong>Email</strong>: <a href="#">{{ $a->email }}</a></li>
              </ul>
            </div>
            <div class="portfolio-info">
             
               <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class=" portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div class="portfolio-links">
                   <table>
                <tr>
                  <td>
                  <a href="/img/{{ $a->logo }}" data-gallery="portfolioGallery" class="portfolio-lightbox get-started-btn scrollto" title="
                    {{ $a->profil }}">Profil</i></a></td>
                </div>
              </div>
            </div>
          </div>
              
              <td>
              <a href=" {{ route('lamar.edit', $a->id_lowker) }} " class="get-started-btn scrollto">Lamar Sekarang</a>
              </td>
              </tr>
              </table>
            </div>

            </div>
          </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    @endsection