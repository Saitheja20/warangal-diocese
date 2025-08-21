<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (optional if needed) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Navbar Collapse Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
        var navbarCollapse = document.querySelector('.navbar-collapse');

        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // If the link is a dropdown toggle, do NOT collapse
                if (link.classList.contains('dropdown-toggle')) return;

                if (navbarCollapse.classList.contains('show')) {
                    var bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });
    });
</script>

<!-- Footer -->
<section class="container-fluid pt-5 pb-3 hide-print bg-dark text-light" id="footer">
    <div class="col-lg-10 mx-auto pt-lg-5 pb-lg-5">
        <div class="row g-4">

            <!-- Get in Touch -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="mb-4 fw-bold text-warning">Get In Touch</h6>

                <p class="mb-3">
                    <i class="fas fa-map-marker-alt text-warning me-2"></i>
                    <!-- Bishop House, Mananthavady, Wayanad Dist, Kerala, India -->
                    Diocese of Warangal<br>
                    Bishops House, Fatimanagar, Kazipet,<br> Warangal-506004
                </p>

                <p class="mb-3">
                    <i class="fas fa-phone-alt text-warning me-2"></i>
                    <a href="tel:+918075997576" class="text-light text-decoration-none">+91 870-245-9128</a>
                </p>

                <p class="mb-3">
                    <i class="fas fa-envelope text-warning me-2"></i>
                    <a href="mailto:bphmtdy@gmail.com" target="_blank" class="text-light text-decoration-none">wgldioabu@gmail.com</a>
                </p>
                <p class="mb-0">
                    <i class="fa-solid fa-globe text-warning me-2"></i>
                    <a href="https://www.warangaldiocese.com/contact.html" target="_blank" class="text-light text-decoration-none">https://www.warangaldiocese.com/</a>
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="mb-4 fw-bold text-warning">Quick Links</h6>
                <a class="d-block text-light text-decoration-none mb-2" href="https://www.vatican.va/" target="_blank">About us</a>
                <a class="d-block text-light text-decoration-none mb-2" href="http://www.syromalabarchurch.in/" target="_blank">Senate Members</a>
                <a class="d-block text-light text-decoration-none mb-2" href="https://www.syromalabarliturgy.org/" target="_blank">Committes</a>
                <a class="d-block text-light text-decoration-none mb-2" href="#">Deaneries</a>
                <a class="d-block text-light text-decoration-none mb-2" href="#">Seminarians</a>
                <a class="d-block text-light text-decoration-none mb-2" href="#">Diocesan Shrines</a>
            </div>

            <!-- Important Links -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="mb-4 fw-bold text-warning">Important Links</h6>
                <a class="d-block text-light text-decoration-none mb-2" href="https://vidyapitham.com/" target="_blank">Home</a>
                <a class="d-block text-light text-decoration-none mb-2" href="https://catholicmalayalam.org/" target="_blank">Bishop</a>
                <a class="d-block text-light text-decoration-none mb-2" href="#">News Letters</a>
                <a class="d-block text-light text-decoration-none mb-2" href="https://ceadom.com/" target="_blank">Calendars</a>
                <a class="d-block text-light text-decoration-none mb-2" href="https://syromalabarcatholicchurch.com/mananthavady" target="_blank">Latest News & upcoming Events</a>
                <a class="d-block text-light text-decoration-none mb-2" href="https://catechismmdy.in/" target="_blank">Contact Us</a>
            </div>

            <!-- About -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="mb-4 fw-bold text-warning">About</h6>
                <!-- <p class="mb-4">The eparchy of Mananthavady was erected by His Holiness Pope Paul VI, by the Bull Quanta Gloria of March 1, 1973 bifurcating the vast diocese of Tellicherry.</p> -->

                <p class="mb-4">The Diocese of Warangal began with Catholic settlements in Kazipet in 1887, later strengthened by migrants from Coastal Andhra, supported by missionaries in their spiritual and community life.</p>


                <div class="social">
                    <a href="#" target="_blank" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="text-light me-3"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="text-light"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Copyright -->
<section class="container-fluid bg-secondary text-light py-3 hide-print" id="copyright">
    <div class="col-lg-10 mx-auto">
        <div class="row align-items-center">
            <div class="col-sm-6 text-center text-sm-start mb-2 mb-sm-0">
                © Diocese of Warangal. All Rights Reserved.
            </div>
            <div class="col-sm-6 text-center text-sm-end">
                Powered by
                <a href="https://kakatiyasolutions.com/" class="text-warning text-decoration-none" target="_blank">
                    <img src="https://www.warangaldiocese.com/images/pwrd_kas.png" class="img-fluid" style="max-height:20px">
                    Kakatiya Solutions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom Footer Styling -->
<style>
    #footer a:hover {
        color: #ffc107 !important;
        /* Yellow hover */
    }

    .social a {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .social a:hover {
        color: #ffc107 !important;
        transform: scale(1.2);
    }
</style>
</body>

</html>