<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
<style>
    .news-ticker-section {
        background-color: #f8f9fa;
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
        color: #333;
        /* color: white; */
        animation: scroll-left 20s linear infinite;
    }

    /* hover to stopp scroll */
    .ticker-content:hover {
        animation-play-state: paused;
    }

    /* responsive font size  */
    .ticker-content {
        font-size: clamp(14px, 2vw, 18px);
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
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('public/assets/images/banners/banner1.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('public/assets/images/banners/banner2.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('public/assets/images/banners/banner4.png') ?>" class="d-block w-100" alt="...">
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
<section class="container-fluid" style="background:#ddeeff">
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
</section>


<?= view('layouts/footer') ?>