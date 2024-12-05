<style>
    .link {
        text-decoration: none
    }
</style>


<section id="hero" style=" background-image: url('{{ asset('images/bg-blog2.jpg') }}');">
    <div class="container" style="height: 90vh">
        <div class="row">
                         <!-- bikin ke tengah -->
             <div class="col p-5" style="text-align: center; margin-top: 160px">
                <p style="color: white">Our</p>
                <h1 style="color: white">Blog</h1>

             </div>
        </div>

        <div class="row">
             <img style="border-radius: 25px;" class="d-block w-100" src="./assets/img/thumb_rumahmewahminimalisjpg-removebg-preview.png" alt="">
        </div>

    </div>
</section>



    <!-- Blog Section -->
    <section class="blog-section" style="margin-top: 30px">
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
                <!-- Blog Item 4 -->
                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card blog-card">
                        <img src="{{ asset('images/barang-4.jpg') }}" alt="5 Things To Do Before Traveling">
                        <div class="card-body">
                            <h5 class="card-title">Reduces Stress</h5>
                            <p class="card-text">Illum necessitatibus fugiat cupiditate perspiciatis saepe!</p>
                            <small>10 jul 2023 | 4 Comments | 20 Views</small>
                        </div>
                    </div>
                </div>
                <!-- Blog Item 5 -->
                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card blog-card">
                        <img src="{{ asset('images/barang-5.jpg') }}" alt="5 Things To Do Before Traveling">
                        <div class="card-body">
                            <h5 class="card-title">Creates Lifelong Memories</h5>
                            <p class="card-text">Deleniti, sit. Consequuntur inventore dolore blanditiis voluptatem!</p>
                            <small>12 agu 2023 | 7 Comments | 35 Views</small>
                        </div>
                    </div>
                </div>
                <!-- Blog Item 6 -->
                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card blog-card">
                        <img src="{{ asset('images/barang-6.jpg') }}" alt="5 Things To Do Before Traveling">
                        <div class="card-body">
                            <h5 class="card-title">Strengthens Relationships</h5>
                            <p class="card-text">Possimus necessitatibus saepe impedit suscipit rerum magnam.</p>
                            <small>20 oct 2023 | 3 Comments | 15 Views</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer data-aos="zoom-in-up" class="bg-light py-4" style="margin-top: 30px">
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