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

          <div class="col-lg-12">

              <img src="/presento/assets/img/blog/blog-author.jpg" class="blog blog-author d-flex align-items-center container rounded-circle float-left" alt="" style="border-radius: 50%; width: 270px; height: 270px;">
               
               <div class="col-md-12">
                <div class="info-box mt-4">
                  <div>
                    <h4 style="text-align: center;"><b>{{ $auth->name }}</b></h4><br>
                  </div>
              
                  <a href=" {{ route('profil.create') }} "><i class="bx bx-pencil"></i><br>Lengkapi Data Profil</a>

                  
                   <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <h5 data-bs-toggle="collapse" class="collapsed">Email: {{ $auth->email }}</h5>
          </li>

        </ul>

      </div>
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

     <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="presento/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">
                
                <div class="portfolio-links">
                  <form action="">
                  <button data-gallery="portfolioGallery" title="App 1"></button>
                  <input type="file" name="file">
                  </form>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->



  </main><!-- End #main -->