    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (optional if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Your Custom JS (optional) -->
    <!-- <script src="< base_url('assets/js/main.js') ?>"></script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
            var navbarCollapse = document.querySelector('.navbar-collapse');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    // If the link is a dropdown toggle, do NOT collapse
                    if (link.classList.contains('dropdown-toggle')) {
                        return;
                    }

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


    </body>

    </html>