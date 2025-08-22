<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

<section id="news-letters">
    <div class="container">

        <!-- search box -->

        <div class="col-lg-12 mb-5 mt-5">
            <h5 class="font-weight-bold mb-4">Find News-Letters</h5>

            <div class="row">
                <div class="col-sm-10  position-relative p-1 pl-3 pr-3 mb-2">
                    <span class="position-absolute bg-white pl-2 pr-2" style="left:20px; top:-8px"><small>Search news letters</small></span>
                    <input type="text" id="search_forane" name="search_forane" class="form-control" style="height:48px;" placeholder="Search by name or month or Volume Number or Event Name">
                </div>
                <div class="col-sm-2 p-sm-1 text-right">
                    <button class="btn btn-lg btn-primary" type="button" onclick="searchNewsLetter();" style="width:100%">Find</button>
                </div>
            </div>
        </div>
        <!-- first -->
        <div class="row">
            <div class="col-lg-12 col-sm-12 mb-5">
                <div class="row align-items-center m-0 shadow-lg bg-white">
                    <div class="col-lg-5 p-0">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>">
                            <img src="<?= base_url('public/assets/images/news-letters/august2025-2.png') ?>" class="img-fluid" alt="Parish">
                        </a>
                    </div>
                    <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="text-body">
                            <h4 class="font-weight-bold mb-2">Fatima Vani August-2025</h4>
                        </a>

                        <p class="mb-1">
                            <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                            <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                        </p>
                        <p class="mb-2">
                            <i class="fa-solid fa-cross"></i> Bishop :
                            <a href="#" target="_blank" class="text-info ml-1">Rev. Fr. D. Vijaya Paul</a>
                        </p>

                        <div class="card-group mb-3">
                            <div class="card p-2">
                                <small class="text-secondary">published</small>
                                <h6 class="m-0 mt-1 font-weight-bold">August 2025</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">Volume</small>
                                <h6 class="m-0 mt-1 font-weight-bold">XLXXXVXXXIV</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">No. of pages</small>
                                <h6 class="m-0 mt-1 font-weight-bold">20</h6>
                            </div>
                        </div>

                        <a href=" <?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="btn btn-primary pl-4 pr-4 round-more">
                            <span class="material-icons float-right">Read More <i class="fas fa-arrow-right float-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- second -->

        <div class="row" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom"
            data-aos-duration="2000">
            <div class="col-lg-12 col-sm-12 mb-5">
                <div class="row align-items-center m-0 shadow-lg bg-white">
                    <div class="col-lg-5 p-0">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>">
                            <img src="<?= base_url('public/assets/images/news-letters/july2025-3.png') ?>" class="img-fluid" alt="Parish">
                        </a>
                    </div>
                    <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="text-body">
                            <h4 class="font-weight-bold mb-2">Fatima Vani July-2025</h4>
                        </a>
                        <p class="mb-1">
                            <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                            <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                        </p>
                        <p class="mb-2">
                            <i class="fa-solid fa-cross"></i> Bishop :
                            <a href="#" target="_blank" class="text-info ml-1">Rev. Fr. D. Vijaya Paul</a>
                        </p>

                        <div class="card-group mb-3">
                            <div class="card p-2">
                                <small class="text-secondary">published</small>
                                <h6 class="m-0 mt-1 font-weight-bold">July 2025</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">Volume</small>
                                <h6 class="m-0 mt-1 font-weight-bold">XLXXXVXXXIII</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">No. of pages</small>
                                <h6 class="m-0 mt-1 font-weight-bold">24</h6>
                            </div>
                        </div>

                        <a href=" <?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="btn btn-primary pl-4 pr-4 round-more">
                            <span class="material-icons float-right">Read More <i class="fas fa-arrow-right float-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- third -->
        <div class="row" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom"
            data-aos-duration="2000">
            <div class="col-lg-12 col-sm-12 mb-5">
                <div class="row align-items-center m-0 shadow-lg bg-white">
                    <div class="col-lg-5 p-0">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>">
                            <img src="<?= base_url('public/assets/images/news-letters/july2025-2.png') ?>" class="img-fluid" alt="Parish">
                        </a>
                    </div>
                    <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="text-body">
                            <h4 class="font-weight-bold mb-2">Fatima Vani June-2025</h4>
                        </a>

                        <p class="mb-1">
                            <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                            <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                        </p>

                        <p class="mb-2">
                            <i class="fa-solid fa-cross"></i> Bishop :
                            <a href="#" target="_blank" class="text-info ml-1">Most. Rev. Udumala Bala</a>
                        </p>

                        <div class="card-group mb-3">
                            <div class="card p-2">
                                <small class="text-secondary">published</small>
                                <h6 class="m-0 mt-1 font-weight-bold">June 2025</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">Volume</small>
                                <h6 class="m-0 mt-1 font-weight-bold">XLXXXVXXXII</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">No. of pages</small>
                                <h6 class="m-0 mt-1 font-weight-bold">20</h6>
                            </div>
                        </div>

                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="btn btn-primary pl-4 pr-4 round-more">
                            Read More <i class="fas fa-arrow-right float-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fourth -->

        <div class="row" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom"
            data-aos-duration="2000">
            <div class="col-lg-12 col-sm-12 mb-5">
                <div class="row align-items-center m-0 shadow-lg bg-white">
                    <div class="col-lg-5 p-0">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>">
                            <img src="<?= base_url('public/assets/images/news-letters/default.png') ?>" class="img-fluid" alt="Parish">
                        </a>
                    </div>
                    <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="text-body">
                            <h4 class="font-weight-bold mb-2">Fatima Vani May-2025</h4>
                        </a>

                        <p class="mb-1">
                            <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                            <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                        </p>

                        <p class="mb-2">
                            <i class="fa-solid fa-cross"></i> Bishop :
                            <a href="#" target="_blank" class="text-info ml-1">Most. Rev. Udumala Bala</a>
                        </p>

                        <div class="card-group mb-3">
                            <div class="card p-2">
                                <small class="text-secondary">published</small>
                                <h6 class="m-0 mt-1 font-weight-bold">May 2025</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">Volume</small>
                                <h6 class="m-0 mt-1 font-weight-bold">XLXXXVXXXI</h6>
                            </div>
                            <div class="card p-2">
                                <small class="text-secondary">No. of pages</small>
                                <h6 class="m-0 mt-1 font-weight-bold">28</h6>
                            </div>
                        </div>

                        <a href="<?= base_url() . 'public/assets/pdfs/news-letters/Fatima-Vani-August-2025.pdf' ?>" class="btn btn-primary pl-4 pr-4 round-more">
                            Read More <i class="fas fa-arrow-right float-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- searchNewsLetter javascript -->

<script>
    function searchNewsLetter() {
        const searchValue = document.getElementById("search_forane").value.toLowerCase().trim();
        const newsletters = document.querySelectorAll("#news-letters .row.align-items-center");

        newsletters.forEach(newsletter => {
            const text = newsletter.innerText.toLowerCase();
            if (text.includes(searchValue)) {
                newsletter.parentElement.style.display = "block"; // Show matched
            } else {
                newsletter.parentElement.style.display = "none"; // Hide unmatched
            }
        });
    }
</script>

<?= view('layouts/footer') ?>