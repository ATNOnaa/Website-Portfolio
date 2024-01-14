    <!-- Start Footer -->
    <footer class="footer pb-5">
        <p>&copy; <a class="border-bottom text-primary fw-bold" href="#">Ilhamsyah Osmar</a>, All Right Reserved.
        <script> document.write(new Date().getFullYear()); </script></p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/")?>js/script.js"></script>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
</body>
</html>