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

</body>

</html>