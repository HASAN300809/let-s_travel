<style>
    .curved-image {
        width: 400px; /* Sesuaikan ukuran */
        height: 500px; /* Sesuaikan ukuran */
        border-top-left-radius: 100px; /* Lengkung kiri atas */
        border-top-right-radius: 100px; /* Lengkung kanan atas */
        border-bottom-left-radius: 100px; /* Lengkung kiri atas */
        border-bottom-right-radius: 100px; /* Lengkung kanan atas */
        overflow: hidden; /* Sembunyikan bagian luar */
    }
    
    .curved-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
    }

    .link {
        text-decoration: none
    }


    </style>

    


<section id="hero" style=" background-image: url('{{ asset('images/pexels-asadphoto-457882.jpg') }}');">
    <div class="container" style="height: 90vh">
        <div class="row">
                         <!-- bikin ke tengah -->
             <div class="col p-5" style="text-align: center; margin-top: 160px">
                 <h1 style="color: black">Find Unforgettable<br>Adventures With Us!</h1>
                 <p style="color: black">We are your travel partner, ready to take you to your dream destination with the best service and unforgettable experiences.</p>
                 <a  href="/booking" class="btn btn-light"> Booking Now</a>
             </div>
        </div>

        <div class="row">
             <img style="border-radius: 25px;" class="d-block w-100" src="./assets/img/thumb_rumahmewahminimalisjpg-removebg-preview.png" alt="">
        </div>

    </div>
</section>

  <div class="container mt-5">

  </div>

<!-- Recomended -->
<section id="recomended">
    <div class="container py-5 h-100">
      <h5 data-aos="fade-up" class="text-center" style="color: cornflowerblue">- Best Choice -</h5>
      <h3 data-aos="fade-up" class="text-center">Popular Destinations</h3>
      <div class="row mt-5">
        <!-- Card 1 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/dubai.jpg') }}" class="card-img-top" alt="Dubai">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>800.00
              </h5>
              <h6 class="card-text">Dubai, United Arab Emirates</h6>
              <p>5D6N</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/bali.jpg') }}" class="card-img-top" alt="Bali">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>500.00
              </h5>
              <h6 class="card-text">Bali, Indonesia</h6>
              <p>3D4N</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/lombok.jpg') }}" class="card-img-top" alt="Lombok">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>300.00
              </h5>
              <h6 class="card-text">Lombok, Indonesia</h6>
              <p>4D5N</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <!-- Card 4 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/rome.jpg') }}" class="card-img-top" alt="Rome">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>600.00
              </h5>
              <h6 class="card-text">Rome, Italia</h6>
              <p>2D3N</p>
            </div>
          </div>
        </div>
        <!-- Card 5 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/coban.png') }}" class="card-img-top" alt="Malang">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>200.00
              </h5>
              <h6 class="card-text">Malang, Indonesia</h6>
              <p>6D7N</p>
            </div>
          </div>
        </div>
        <!-- Card 6 -->
        <div data-aos="zoom-in-up" class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('images/sentosa-Island.jpg') }}" class="card-img-top" alt="Sentosa Island">
            <div class="card-body">
              <h5 class="card-title">
                <span style="color: rgb(255, 196, 2)">$</span>700.00
              </h5>
              <h6 class="card-text">Sentosa Island, Singapura</h6>
              <p>3D4N</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Recomended -->
  

    <section class=" bg-tertiary-color features">

        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Gambar dengan Efek Lingkaran -->
                <div data-aos="zoom-out-right" class="col-md-6 text-center">
                    <div class="curved-image">
                        <img src="{{ asset('images/bg-coba.jpg') }}" alt="Team Image" class="img-fluid" style=" border-radius: 50px;">
                    </div>
                </div>
        
                <!-- Konten Accordion -->
                <div data-aos="zoom-out-left" class="col-md-6">
                    <h6 class="text-warning fw-bold">Why Choose Us</h6>
                    <h2 class="fw-bold">Experience That We <br> Promise To You</h2>
                    <p class="text-muted">We are always ready to serve by providing the best service for you. <br> We make a good choice to travel around the world.</p>
        
                    <!-- Accordion -->
                    <div class="accordion" id="accordionExample">
                        <!-- Accordion Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="bi bi-shield-check me-2 text-primary"></i> Best places in the world
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Discover amazing places around the world that are waiting for you to explore.
                                </div>
                            </div>
                        </div>
        
                        <!-- Accordion Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="bi bi-tags me-2 text-primary"></i> Affordable price for you
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Find the best deals and travel packages that suit your budget.
                                </div>
                            </div>
                        </div>
        
                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-calendar-check me-2 text-primary"></i> Best plan for your time
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Organize your trips efficiently and make the most of your vacation time.
                                </div>
                            </div>
                        </div>
                         <!-- Accordion Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="bi bi-heart-fill me-2"></i> Customer satisfaction
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our customers are at the heart of everything we do, ensuring top-notch service.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
      <div class="container">
          <p data-aos="fade-up" class="text-warning fw-bold text-center">Our Blog</p>
          <h2 data-aos="fade-up" class="text-center" style="margin-bottom: 25px">The Best Trip For You</h2>
          <div class="row g-4">
              <!-- Blog Item 1 -->
              <div data-aos="zoom-in-up" class="col-md-4">
                  <div class="card blog-card">
                      <img src="{{ asset('images/barang-1.jpg') }}" alt="10 Place Recommendations">
                      <div class="card-body">
                          <h5 class="card-title">10 Place Recommendations</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi corrupti suscipit.</p>
                          <small>02 Mar 2023 | 10 Comments | 24 Views</small>
                      </div>
                  </div>
              </div>
              <!-- Blog Item 2 -->
              <div data-aos="zoom-in-up" class="col-md-4">
                  <div class="card blog-card">
                      <img src="{{ asset('images/barang-2.jpg') }}" alt="12 Benefits Of Traveling">
                      <div class="card-body">
                          <h5 class="card-title">12 Benefits Of Traveling</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. numquam suscipit.</p>
                          <small>02 Mar 2023 | 4 Comments | 18 Views</small>
                      </div>
                  </div>
              </div>
              <!-- Blog Item 3 -->
              <div data-aos="zoom-in-up" class="col-md-4">
                  <div class="card blog-card">
                      <img src="{{ asset('images/barang-3.jpg') }}" alt="5 Things To Do Before Traveling">
                      <div class="card-body">
                          <h5 class="card-title">5 Things To Do Before Traveling</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugiat numquam.</p>
                          <small>02 Mar 2023 | 6 Comments | 30 Views</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <footer data-aos="zoom-in-up" class="bg-light py-4" style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <!-- Logo dan Visi -->
            <div class="col-md-4">
              <div class="d-flex align-items-center">
                <!-- Logo Pesawat -->
                <img src="{{ asset('images/logo_pesawat.png') }}" alt="Plane Logo" class="me-2" style="width: 30px; height: 30px; margin-bottom: 110px">
            
                <!-- Tulisan Let's Travel -->
                <div>
                    <h5 class="fw-bold text-primary" style="margin-bottom: 20px">LET'S TRAVEL</h5>
                    <p>Our vision is to help people find the best places to travel with high security.</p>
                </div>
              </div>
            </div>

            <!-- About -->
            <div class="col-md-2">
                <h6 class="fw-bold">About</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-black link">About Us</a></li>
                    <li><a href="#" class="text-black link">Features</a></li>
                    <li><a href="#" class="text-black link">News & Blog</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="col-md-2">
                <h6 class="fw-bold">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-black link">How We Work?</a></li>
                    <li><a href="#" class="text-black link">Capital</a></li>
                    <li><a href="#" class="text-black link">Security</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-md-2">
                <h6 class="fw-bold">Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-black link">FAQs</a></li>
                    <li><a href="#" class="text-black link">Support Center</a></li>
                    <li><a href="#" class="text-black link">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-2">
                <h6 class="fw-bold">Follow Us</h6>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/" class="text-black"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/" class="text-black"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.pinterest.com/" class="text-black"><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


  