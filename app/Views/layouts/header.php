<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url() ?>">My Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->

<!-- AOS CSS (in the <head>) -->
<!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

AOS JS (before closing </body>)
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script> -->

<style>
    .disabled-link {
        pointer-events: none;
        /* disables click */
        cursor: not-allowed;
        /* shows disabled cursor */
        opacity: 0.6;
        /* dim the text */
    }
</style>

<section class="bg-white border-bottom sticky-top hide-print">
    <div class="col-sm-11 col-lg-11 mx-auto pr-0">
        <nav class="navbar navbar-expand-lg navbar-light pr-0" style="width:100%">
            <div class="row align-items-center" style="width:100%">
                <!-- Logo + Toggle -->
                <!-- <div class="col-lg-3 p-0">

                    <a class="navbar-brand" href="#"><img src="https://mananthavadydiocese.com/assets/images/cs/eparchy-logo.svg" class="img-fluid logo"></a>
                    <button class="navbar-toggler border-0 pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div> -->

                <div class="col-lg-3 p-0 d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('public/assets/images/logo/logo.jpg') ?>" class="img-fluid logo" alt="Logo">
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <!-- Navbar Links -->
                <div class="col-lg-9">
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav font-weight-bold position-relative">

                            <!-- Home -->
                            <li class="nav-item"><a class="nav-link" href="index">Home</a></li>

                            <!-- Diocese Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Diocese</a>
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item disabled-link" href="#">About Us</a>
                                    <a class="dropdown-item disabled-link" href="#">History</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>diocese_curia">Diocesan Curia</a>

                                    <a class="dropdown-item" href="<?= base_url() ?>College_Consultors">College of Consultors</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Senate_Members">Senate Members</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>commissions">Commissions</a>
                                    <a class="dropdown-item disabled-link" href="#">Committees</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Marriage_tribunal">Marriage Tribunal</a>
                                    <a class="dropdown-item disabled-link" href="#">Deaneries</a>
                                    <a class="dropdown-item disabled-link" href="#">Directress</a>
                                    <a class="dropdown-item disabled-link" href="#">Parishes</a>
                                    <a class="dropdown-item disabled-link" href="#">Cathedral</a>
                                    <a class="dropdown-item disabled-link" href="#">Diocesan Shrines</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Seminarians">Seminarians</a>

                              </div>
                            </li>

                            <!-- Bishop Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Bishop</a>
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item disabled-link" href="#">Bishop</a>
                                    <a class="dropdown-item disabled-link" href="#">Bishop's Message</a>
                                </div>
                            </li>

                            <!-- Institutions Dropdown -->
                            <li class="nav-item dropdown">
<!--                                 <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Institutions</a> -->
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item" href="<?= base_url() ?>institutions">Institutions</a>


                                    <a class="dropdown-item" href="<?= base_url() ?>education">Educational Institutions</a>

                                    <a class="dropdown-item disabled-link" href="#">Hospitals</a>
                                </div>
                            </li>

                            <!-- Priests & Religious Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Priests & Religious</a>
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item disabled-link" href="#">Diocesan Priests</a>
                                    <a class="dropdown-item disabled-link" href="#">Religious Priests</a>
                                    <a class="dropdown-item disabled-link" href="#">Religious Sisters</a>
                                </div>
                            </li>

                            <!-- Calendars Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Calendars</a>
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item" href="<?= base_url() ?>birthday_calender">Birthday Calendar</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>birthday_calender">Ordination Calendar</a>
                                    <a class="dropdown-item" href="#">Necrology</a>
                                </div>
                            </li>

                            <!-- Media Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Media</a>
                                <div class="dropdown-menu rounded-0 sub-drop pb-3">
                                    <a class="dropdown-item disabled-link" href="#">News & Events</a>
                                    <a class="dropdown-item disabled-link" href="#">Articles</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Photo_Gallery">Photo Gallery</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Video_gallery">Video Gallery</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>song_gallery">Songs Gallery</a>
                                    <a class="dropdown-item disabled-link" href="#">Newsletters</a>
                                </div>
                            </li>

                            <!-- Feedback & Contact -->
                            <li class="nav-item"><a class="nav-link disabled-link" href="#">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link disabled-link" href="#">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>

<script>
    document.querySelectorAll('.disabled-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
        });
    });
</script>