<footer class="footer-section bg-light text-dark py-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="footer-title">Blue Bell Travels</h4>
                <p>
                    We are committed to creating tailored travel experiences that leave lasting memories. Let’s plan
                    your next adventure!
                </p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/bluebelltravelservices?mibextid=LQQJ4d" target="_blank"
                        class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.instagram.com/bluebelltravels?igsh=MndidTdnOGxnNGY=" target="_blank"
                        class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://www.youtube.com/@BlueBellTravel" target="_blank"><i
                            class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <!-- Links Section -->
            <div class="col-lg-2 col-md-6 mb-4 col-6">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-dark">Home</a></li>
                    <li><a href="AboutUs.php" class="text-dark">About Us</a></li>
                    <li><a href="Packages.php" class="text-dark">Packages</a></li>
                    <li><a href="ContactUs.php" class="text-dark">Contact Us</a></li>
                </ul>
            </div>
            <!-- Legal Section -->
            <div class="col-lg-2 col-md-6 mb-4 col-6">
                <h5 class="footer-title">Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="TermOfCond.php" class="text-dark">Terms of Use</a></li>
                    <li><a href="PrivacyPolicy.php" class="text-dark">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="footer-title">Contact Us</h5>
                <p><i class="fas fa-map-marker-alt me-2"></i>LGF-70, Ansal Fortune Arcade, Sector 18, Noida, U.P. 201301
                </p>
                <p><i class="fas fa-phone me-2"></i>+91 8800150150,

                    +91 8800140140,

                    +91 1204314040</p>
                <p><i class="fas fa-envelope me-2"></i>
                    info@bluebelltravels.com</p>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center mt-4">
            <p class="mb-0">&copy; <span id="year"></span>. All rights reserved.</p>
        </div>

    </div>
</footer>


<!-- Bootstrap js -->
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper', {
    slidesPerView: 3, // Default: 3 slides in the viewport
    spaceBetween: 30, // Space between slides in pixels

    autoplay: {
        delay: 3000, // Delay in milliseconds (3 seconds)
        disableOnInteraction: false, // Continue autoplay even after user interaction
        pauseOnMouseEnter: true,
    },
    loop: true, // Enable looping
    speed: 600, // Smooth transition speed in milliseconds (0.6 seconds)
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        },

        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20
        },
    },
});
</script>
<script>
// Array to store YouTube Player instances
var players = [];

// Initialize YouTube API
function onYouTubeIframeAPIReady() {
    // Get all iframe elements
    var iframes = document.querySelectorAll('iframe');

    // Create a new player instance for each iframe
    iframes.forEach(function(iframe, index) {
        players[index] = new YT.Player(iframe, {
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    });
}

// Handle state change (e.g., when a video starts playing)
function onPlayerStateChange(event) {
    // If a video starts playing, pause all other videos
    if (event.data === YT.PlayerState.PLAYING) {
        players.forEach(function(player) {
            if (player !== event.target) {
                player.pauseVideo();
            }
        });
    }
}

// Load the YouTube API script
var script = document.createElement('script');
script.src = 'https://www.youtube.com/iframe_api';
document.body.appendChild(script);
</script>


<script>
    // Get the current year
const currentYear = new Date().getFullYear();

// Set the year dynamically in the HTML
document.getElementById('year').textContent = currentYear;

</script>


</body>

</html>