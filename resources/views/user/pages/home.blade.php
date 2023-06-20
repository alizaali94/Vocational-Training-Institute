@extends("user.layout.mainLayout")
@section('title','Home')
@section('content')
    <!-- Carousel -->
    <div class="container-fluid p-0" >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active w-100 bgimage"
                    style="background:  linear-gradient(rgba(22,34,57,0.7), rgba(22,34,57,0.75)),url(assets/images/Main22-2.jpg);">
                    <div
                        class="container text-white d-flex justify-content-center flex-column align-items-center h-100">
                        <h4 class="font-weight-medium">Welcome To VTI</h4>
                        <h1>Planning Business</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque corporisex cum!</p>
                        <p><a class="btn px-4 py-3 getbutton fw-bold rounded-pill buttonstyle" href="#"
                                role="button">More Details</a></p>
                    </div>
                </div>
                <div class="carousel-item w-100 bgimage" style="background:  linear-gradient(rgba(22,34,57,0.7), rgba(22,34,57,0.75)),url(assets/images/Main22-3.jpg);">
                    <div
                        class="container text-white d-flex justify-content-center flex-column align-items-center h-100">
                        <h4 class="font-weight-medium">Welcome To VTI</h4>
                        <h1>Planning Business</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque corporisex cum!</p>
                        <p><a class="btn px-4 py-3 getbutton fw-bold rounded-pill buttonstyle" href="#"
                                role="button">More Details</a></p>
                    </div>
                </div>
                <div class="carousel-item w-100 bgimage" style="background:linear-gradient(rgba(22,34,57,0.7), rgba(22,34,57,0.75)),url(assets/images/Main22-2.jpg);">
                    <div
                        class="container text-white d-flex justify-content-center flex-column align-items-center h-100">
                        <h4 class="font-weight-medium">Welcome To VTI</h4>
                        <h1>Planning Business</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque corporisex cum!</p>
                        <p><a class="btn px-4 py-3 getbutton fw-bold rounded-pill buttonstyle" href="#"
                                role="button">More Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <div class="iconic">
            <span class="carousel-control-prev-icon icon" aria-hidden="true"></span>
        </div>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <div class="iconic">
            <span class="carousel-control-next-icon icon" aria-hidden="true"></span>
        </div>
        <span class="visually-hidden">Next</span>
    </button>
    <!-- Carousel End -->

    <!-- Cards of Institution Qualities -->

    <section class="container py-5 my-4">
        <div class="row">
            <div class="card bg-primary text-white col-4 rounded-0 card1hover">
                <div class="card-body d-flex align-items-center text-center rounded-0 flex-column w-100">
                    <h2><i class="fa-solid fa-building-columns"></i></h2>
                    <h5 class="card-title">Institution</h5>
                    <p class="card-text">Vocational Training Institute (VTI) is largest vocational training institute in Rahim Yar Khan.</p>
                </div>
            </div>
            <div class="card bg-success text-white col-4 rounded-0 card2hover">
                <div class="card-body d-flex align-items-center text-center rounded-0 flex-column w-100">
                    <h2><i class="fa-solid fa-users"></i></h2>
                    <h5 class="card-title">Professional Development</h5>
                    <p class="card-text">Vocational Training Institute (VTI) is largest vocational training institute in Rahim Yar Khan.</p>
                </div>
            </div>
            <div class="card bg-danger text-white col-4 rounded-0 card3hover">
                <div class="card-body d-flex align-items-center text-center rounded-0 flex-column w-100">
                    <h2><i class="fa-solid fa-wrench"></i></h2>
                    <h5 class="card-title">Art Labs</h5>
                    <p class="card-text">VTI provides art latest tools, equipment and consumables to its labs according to curriculum.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Start -->
    <section id="portfolio"
        class="container portfolio sections-bg con-set con-set3  rounded-5 d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-center">Vocational Training Institute</h2>
                <p class="text-center my-4">Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum
                    enimvelit qui ut et autem uia reprehenderit sunt deleniti Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Cum tempora non ad mollitia rerum id et officiis, optio laudantium quis ea tenetur
                    alias.</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div class="my-3">
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Achievements</li>
                        <li data-filter=".filter-product">News</li>
                        <li data-filter=".filter-branding">Activities</li>
                        <li data-filter=".filter-books">Awards</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/achievement1.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/achievement1.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Lorem 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/news1.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/news1.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Admissions</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/Green.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/Green.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Green Pakistan</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/award1.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/award1.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Lorem 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/achievement2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/achievement2.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">App 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/news2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/news2.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Admissions</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/Kashmir.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/Kashmir.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Kashmir Day</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/award2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/award2.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Lorem 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/achievement3.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/achievement3.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Lorem 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/news3.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/news3.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Product 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/women.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/women.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Women Day</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/images/portfolio/award3.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/images/portfolio/award3.jpg" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details"
                                        class="text-decoration-none">Books 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section>
    <!-- Gallery End -->
    @include('user.include.scripts')
@endsection