<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
<style>
    .news-ticker-section {
        background-color: #f8f9fa;
        /* background-color: rgb(118, 159, 176) */
        /* background-color: rgb(221, 99, 51); */
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
        overflow: hidden;
        position: relative;
        white-space: nowrap;
    }

    .news-ticker {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .ticker-content {
        display: inline-block;
        padding-left: 100%;
        font-weight: 600;
        /* color: #333; */
        color: rgb(222, 95, 50);
        animation: scroll-left 25s linear infinite;
    }

    /* hover to stopp scroll */
    .ticker-content:hover {
        animation-play-state: paused;
    }

    /* responsive font size  */
    .ticker-content {
        font-size: clamp(14px, 2vw, 18px);
    }

    .vertical-divider {
        position: relative;
    }

    .vertical-divider:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 15%;
        right: 0;
        height: 70%;
        border-right: 3px solid rgba(78, 105, 153, 0.4);
    }


    /* bishop card */

    .bishop-card img {
        max-height: 350px;
        object-fit: cover;
    }

    .bishop-card {
        transition: transform 0.3s ease-in-out;
        will-change: transform;
    }

    .bishop-card:hover {
        transform: scale(1.02);
    }

    .read-more-btn {
        display: inline-block;
        color: #4e6999;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    .read-more-btn .arrow {
        display: inline-block;
        transition: transform 0.3s ease-in-out;
    }

    .read-more-btn:hover .arrow {
        transform: translateX(5px);
    }


    @media (max-width: 767px) {
        .vertical-divider {
            border-right: none;
            border-bottom: 1px solid rgba(78, 105, 153, 0.4);
        }
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<section class="carouselitems">
    <div class="container-fluid mt-0 mb-0">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('public/assets/images/banners/banner4.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('public/assets/images/banners/banner5.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('public/assets/images/banners/banner2.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('public/assets/images/banners/banner1.png') ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-ticker-section">
    <div class="news-ticker">
        <div class="ticker-content">
            🔔 Latest News: Admissions open for 2025 academic year | Independence Day celebration on August 15 | Bishop's new message published | Diocesan Youth Meet next week |
        </div>
    </div>
</section>

<!-- <section class="container-fluid" style="background:#ddeeff">
    <div class="col-lg-8 mx-auto pl-1 pr-1 pl-lg-3 pr-lg-3 pt-4 pb-4">
        <div class="row two-tones">

            <a href="https://mananthavadydiocese.com/bulletin" class="col-6 col-sm-3 text-body pl-2 pr-0 pl-lg-5">
                <i class="fas fa-newspaper float-sm-left mr-2 mr-lg-3 text-primary"></i>
                <h5 class="font-weight-bold m-0">Diocesan<br>Bulletin</h5>
            </a>

            <a href="https://mananthavadydiocese.com/diocese/bishops-program" class="col-6 col-sm-3 text-body pl-2 pr-0 pl-lg-5">
                <i class="fas fa-calendar-alt float-sm-left mr-2 mr-lg-3 text-success"></i>
                <h5 class="font-weight-bold m-0">Bishop's<br>Programs</h5>
            </a>

            <a href="#" class="col-6 col-sm-3 text-body pl-2 pr-0 pl-lg-5">
                <i class="fas fa-bullhorn float-sm-left mr-2 mr-lg-3 text-danger"></i>
                <h5 class="font-weight-bold m-0">Public<br>Relations</h5>
            </a>

            <a href="https://mananthavadydiocese.com/downloads" class="col-6 col-sm-3 text-body pl-2 pr-0 pl-lg-5">
                <i class="fas fa-file-pdf float-sm-left mr-2 mr-lg-3 text-warning"></i>
                <h5 class="font-weight-bold m-0">Diocesan <br>Circulars</h5>
            </a>

        </div>
    </div>
</section> -->

<!-- <section class="container-fluid" style="background:#ddeeff">
    <div class="col-lg-8 mx-auto px-3 pt-4 pb-4">
        <div class="row two-tones text-decoration-none">

            <a href="https://mananthavadydiocese.com/bulletin" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-newspaper fa-2x text-primary me-3"></i>
                <h6 class="fw-bold m-0">Diocesan<br>Bulletin</h6>
            </a>

            <a href="https://mananthavadydiocese.com/diocese/bishops-program" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-calendar-alt fa-2x text-success me-3"></i>
                <h6 class="fw-bold m-0">Bishop's<br>Programs</h6>
            </a>

            <a href="#" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-bullhorn fa-2x text-danger me-3"></i>
                <h6 class="fw-bold m-0">News<br>Letters</h6>
            </a>

            <a href="https://www.warangaldiocese.com/images/Aboutus.pdf" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-file-pdf fa-2x text-warning me-3"></i>
                <h6 class="fw-bold m-0">About<br>Us</h6>
            </a>

        </div>
    </div>
</section> -->

<section class="container-fluid" style="background:#ddeeff">
    <div class="col-lg-8 mx-auto px-3 pt-2 pb-2">
        <div class="row text-decoration-none">

            <a href="#" data-aos="fade-right" data-aos-duration="2000" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-newspaper fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Diocesan<br>Bulletin</h6>
            </a>

            <a href="#" data-aos="fade-right" data-aos-duration="2000" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-calendar-alt fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Bishop's<br>Programs</h6>
            </a>

            <a href="<?= base_url() .'news-letters/' ?>" data-aos="fade-left" data-aos-duration="2000" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-bullhorn fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">News<br>Letters</h6>
            </a>

            <a href="https://www.warangaldiocese.com/images/Aboutus.pdf" data-aos="fade-left" data-aos-duration="2000" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-file-pdf fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">About <br>Us</h6>
            </a>

        </div>
    </div>
</section>

<!-- <section class="container-fluid" style="background:#ddeeff">
    <div class="col-lg-8 mx-auto px-3 pt-4 pb-4">
        <div class="row text-decoration-none">

            <a href="https://mananthavadydiocese.com/bulletin" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-newspaper fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Diocesan<br>Bulletin</h6>
            </a>

            <a href="https://mananthavadydiocese.com/diocese/bishops-program" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-calendar-alt fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Bishop's<br>Programs</h6>
            </a>

            <a href="#" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3 vertical-divider">
                <i class="fas fa-bullhorn fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Public<br>Relations</h6>
            </a>

            <a href="https://mananthavadydiocese.com/downloads" class="col-6 col-sm-3 text-body text-decoration-none d-flex align-items-center mb-3">
                <i class="fas fa-file-pdf fa-2x me-3" style="color: rgb(78,105,153);"></i>
                <h6 class="fw-bold m-0">Diocesan<br>Circulars</h6>
            </a>

        </div>
    </div>
</section> -->
<!-- <h2 class="text-center">Welcome to Diocese of Warangal</h2> -->

<section class="container my-5">
    <div class="row align-items-center">



        <div class="col-lg-5 col-md-12 col-12 mb-4 mt-4" data-aos="fade-right" data-aos-duration="3000">
            <div class="card shadow border-0 h-100 bishop-card">
                <div class="card-body text-center">
                    <img src="<?= base_url('public/assets/images/churchimage.png') ?>"
                        alt="Diocese of Warangal"
                        class="img-fluid rounded shadow-sm"
                        style="max-height: 300px; width: 100%;">
                </div>
            </div>
        </div>



        <!-- Welcome Text -->
        <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-4 text-center text-success fw-bold">Welcome to the Diocese of Warangal</h2>
            <p class="text-muted">
                After the bifurcation of Vijayawada Diocese, Hyderabad Diocese was left with the districts of Telangana region only.
                The Hyderabad–Vijayawada Railway line brought many Catholic employees to key junctions like Kazipet, Dornakal, and Khammam.
                Since 1887, the Baptism register at Kazipet reveals a diverse Catholic community of Anglo-Indians, Telugus, and Tamils.
            </p>
            <p class="text-muted">
                Between 1890 and 1930 a
                good number of Catholic families migrated from Guntur and other parts of Coastal Andhra to Telangana
                in search of cultivable land for their livelihood. They got settled wherever they found fertile black cotton
                soil. The early Missionaries helped these migrant traditional Catholic communities in their settlements and
                took care of their spiritual needs.
                <!-- <a href="/about" class="btn btn-outline-secondary ">
                    Read More &rarr;
                </a> -->
                <a href="https://www.warangaldiocese.com/images/origins_and_formation_of_the_warangal_diocese.pdf" target="_blank" class="read-more-btn mt-3">
                    Read More <span class="arrow">&rarr;</span>
                </a>

            </p>
        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container"
        data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
        data-aos-duration="2000">

        <div class="row align-items-center">

            <!-- Text Content -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="mb-2 text-uppercase text-warning small">Bishop of Warangal</div>
                <h2 class="mb-3 text-dark fw-bold">Rev. Fr. D. Vijaya Paul Reddy</h2>
                <p class="text-muted">
                    Thomas D’Souza was born on <strong>08<sup>th</sup> January 1965</strong> in Warangal.
                    He was ordained as Priest on <strong>02<sup>nd</sup> April 1992</strong> and opted for the Diocese of warangal
                    on <strong>15<sup>th</sup> August 1998</strong>.
                    The Holy Father has appointed D. Vijaya Paul Reddy to lead the Diocese of warangal as the Bishop of warangal from <strong>December 15, 2024</strong>.
                </p>
                <a href="https://www.dioceseofvasai.com/about/bishop/" class="btn btn-warning mt-3" target="_blank">
                    Know More &rarr;
                </a>
            </div>

            <!-- Image -->
            <!-- <div class="col-lg-4 text-center">
                <img src="https://res.cloudinary.com/dxysia3su/images/c_scale,w_848,h_565/f_auto,q_auto/v1734364987/Msgr-Thomas-DSouza1/Msgr-Thomas-DSouza1.jpg?_i=AA"
                    alt="Msgr Thomas D'Souza"
                    class="img-fluid rounded shadow"
                    style="max-height: 400px; object-fit: cover;">
            </div> -->
            <div class="col-lg-4 text-center">
                <img src="<?= base_url('public/assets/images/bishops/vijay-paul-reddy.JPG') ?>" alt="Msgr Thomas D'Souza"
                    class="img-fluid rounded shadow"
                    style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>



<?= view('layouts/footer') ?>