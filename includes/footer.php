<footer class="footer-section bg-light text-dark py-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="footer-title">Blue Bell Travels</h4>
                <p>
                    We are committed to creating tailored travel experiences that leave lasting memories. Let’s plan your next adventure!
                </p>
                <div class="social-icons">
                    <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <!-- Links Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark">Home</a></li>
                    <li><a href="#" class="text-dark">About Us</a></li>
                    <li><a href="#" class="text-dark">Packages</a></li>
                    <li><a href="#" class="text-dark">Contact Us</a></li>
                </ul>
            </div>
            <!-- Legal Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-title">Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark">Terms of Use</a></li>
                    <li><a href="#" class="text-dark">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="footer-title">Contact Us</h5>
                <p><i class="fas fa-map-marker-alt me-2"></i>LGF-70, Ansal Fortune Arcade, Sector 18, Noida, U.P. 201301</p>
                <p><i class="fas fa-phone me-2"></i>+91 8800150150, +91 8800140140</p>
                <p><i class="fas fa-envelope me-2"></i>info@bluebelltravels.com</p>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center mt-4">
            <p class="mb-0">&copy; 2024. All rights reserved.</p>
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
            slidesPerView: 1,
            spaceBetween: 20
        },
    },
});
</script>

<!-- Include the JavaScript fifth part  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select the stack container and cards
        const stack = document.querySelector(".stack");
        const cards = Array.from(stack.children)
            .reverse()
            .filter((child) => child.classList.contains("card"));

        // Rearrange the cards in reverse order to make the first card at the top
        cards.forEach((card) => stack.appendChild(card));

        // Function to move the card (for autoplay or click)
        function moveCard() {
            const lastCard = stack.lastElementChild;
            if (lastCard && lastCard.classList.contains("card")) {
                lastCard.classList.add("swap"); // Add the "swap" animation

                setTimeout(() => {
                    lastCard.classList.remove("swap"); // Remove the "swap" animation
                    stack.insertBefore(lastCard, stack.firstElementChild); // Move the card to the front
                }, 1200); // The swap animation duration (matches the animation duration in CSS)
            }
        }

        // Autoplay interval - move the card every 2 seconds
        let autoplayInterval = setInterval(moveCard, 2000);

        // Allow user interaction to move the card on click
        stack.addEventListener("click", function(e) {
            const card = e.target.closest(".card");
            if (card && card === stack.lastElementChild) {
                card.classList.add("swap"); // Add the "swap" animation

                setTimeout(() => {
                    card.classList.remove("swap"); // Remove the "swap" animation
                    stack.insertBefore(card, stack.firstElementChild); // Move the clicked card to the front
                }, 1200); // The swap animation duration (matches the animation duration in CSS)
            }
        });
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
    iframes.forEach(function (iframe, index) {
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
      players.forEach(function (player) {
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


</body>

</html>