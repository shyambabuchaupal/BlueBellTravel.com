<?php include 'includes/header.php'; ?>
<main>
    <!-- Hero Section Start -->
    <section class="hero-section position-relative">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="hero-img">
                        <img src="./assets/images/BlueBellBgDesktop.webp" class="img-fluid d-md-block d-none"
                            alt="Hero Background Image" loading="lazy"/>
                        <img src="./assets/images/BlueBellBgMobile.png" class="img-fluid d-md-none"
                            alt="Hero Background Image Mobile" loading="lazy"/>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- BlueBell Second Section -->
    <div class="bluebell-second-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="second-section position-relative">
                        <img src="./assets/images/BlueBellsecondPartImg.png" class="img-fluid rounded d-md-block d-none"
                            alt="BlueBell Second Part Image" loading="lazy"/>
                        <div class="second-center position-absolute top-50 start-50 translate-middle pt-3 pb-4">
                            <h2>Plan your trip</h2>
                            <h3>Discover the world with<br>
                                Blue Bell Travels.</h3>
                            <h4>where every journey is tailored<br>
                                for unforgettable experiences.<br>
                                Your adventure starts here!</h4>
                            <a href="ContactUs.php" class="Bluelbellbtn">Travel with us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bluebell-third-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Swiper Container -->
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $travelQuery="SELECT * FROM `trav`";
                            $travelResult=mysqli_query($conn,$travelQuery);
                            while($travlerow=mysqli_fetch_assoc($travelResult)){
                                ?>

                            <!-- Swiper Slides -->
                            <div class="swiper-slide">
                                <img src="./assets/images/<?=$travlerow['image']?>" alt="Bluebell Image 1"
                                    class="img-fluid" loading="lazy">
                            </div>

                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bluebell-fourth-section position-relative">
        <div class="container">
            <div class="row g-4">
                <!-- First Card -->
                <?php 
                 $thirdquery='SELECT * FROM `thirdpart`';
                 $thirdResult=mysqli_query($conn,$thirdquery);
                 while($thirdrow=mysqli_fetch_assoc($thirdResult)){
                    ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="card1 shadow-sm fourthcard">

                        <div class="card-body">
                            <h5 class="card-title bluebellhead"><?=$thirdrow['heading']?></h5>
                            <p class="card-text bluebelltext"><?=$thirdrow['title']?></p>

                        </div>
                        <img src="./assets/images/<?=$thirdrow['image']?>" class="card-img-top" alt="Exciting Packages" loading="lazy">
                    </div>
                </div>
                <?php
                 }
                 ?>


            </div>
        </div>
    </div>

    <div class="bluebell-fifth-section ">
        <div class="container">
            <?php include 'secondslider.php' ?>
        </div>
    </div>


    <div class="bluebell-sixth-section">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="bluebellsixithimgright">
                        <img src="./assets/images/Bluebellsixthpart4.png" class="card-img-top"
                            alt="Bluebellsixthpart4 img" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class='bluebellsixthimgleft'>
                        <h2>Make it memorable</h2>
                        <h3>We create the trips you love</h3>
                        <p>
                            We take the best of what we’ve learned over our 25 years of experience as
                            luxury travel agents and bring it all together to create bespoke luxury travel experiences.
                        </p>
                        <div class=" bluebelldiv">
                            <div class="bluebellsiximg">
                                <img src="./assets/images/Bluebellsixthpart3.png" alt="Bluebellsixthpart3 img" loading="lazy">
                            </div>
                            <div class="bluebellsixttext">
                                <h3>
                                    Best Tours</h3>
                                <p>A strict screening process ensures that we only offer the best tours and trip
                                    packages.</p>
                            </div>
                        </div>
                        <div class=" bluebelldiv">
                            <div class="bluebellsiximg">
                                <img src="./assets/images/Bluebellsixthpart2.png" alt="Bluebellsixthpart3 img"loading="lazy">
                            </div>
                            <div class="bluebellsixttext">
                                <h3>Best Price</h3>
                                <p>We guarantee you the best price. Found a lower price? We will match it.</p>
                            </div>
                        </div>
                        <div class=" bluebelldiv">
                            <div class="bluebellsiximg">
                                <img src="./assets/images/Bluebellsixthpart1.png" alt="Bluebellsixthpart3 img" loading="lazy">
                            </div>
                            <div class="bluebellsixttext">
                                <h3>
                                    Free Cancellation</h3>
                                <p>Enjoy peace of mind with free cancellation options for your trips.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bluebell-seventh-section">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="seventh-right">
                        <h2>Testimonials</h2>
                        <h3>What our Travelers are saying</h3>
                        <img src="./assets/images/BluebellTesimonial.png" class="card-img-top"
                            alt="Bluebell Testimonial" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 m-auto">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="bluebellcarsoule">
                                    <h2>Harshil Bansal</h2>
                                    <h4>30/11/2022</h4>
                                    <div class="bluebellstart">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            Me and my family recently visited Dubai and planned our trip by the help
                                            of
                                            BlueBell Tours and Travels Pvt Ltd. It was really an amazing experience
                                            and
                                            they made our trip much more fun and enjoyable. Everything was well
                                            planned
                                            and executed perfectly.</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bluebellcarsoule">
                                    <h2>sakshi tyagi</h2>
                                    <h4>02/01/2024</h4>
                                    <div class="bluebellstart">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            We had a good experience with Bluebell tour and travel.
                                            Starting from providing quotation to clarifying and
                                            booking was smooth. All the arrangements picking from
                                            airport till dropping back to airport after our iternary
                                            was well taken care.</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bluebellcarsoule">
                                    <h2>Sudhakar M</h2>
                                    <h4>09/01/2024</h4>
                                    <div class="bluebellstart mb-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            We booked our Singapore trip and it was hassle free
                                            service. Wonderful experience in preparing itinerary,
                                            document submission reminder, timely travel arrangements
                                            and real time ground support.</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bluebellcarsoule">
                                    <h2>Sunil Bijalwan</h2>
                                    <h4>09/01/2024</h4>
                                    <div class="bluebellstart">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            Excellent!!! I have no words to express my heartfelt
                                            feelings with Blue Bell Travels. It means alot!!! The trip
                                            to Kerala was awesome, Had an amazing experience with Blue
                                            Bell Travels PVT LTD .</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bluebellcarsoule">
                                    <h2>Kavita Bidhuri</h2>
                                    <h4>11/01/2024</h4>
                                    <div class="bluebellstart">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            We planned a beautiful escape to Singapore in last
                                            December. We Booked Singapore Package with Blue bell
                                            Travel that helped us plan a beautiful trip, we would like
                                            to thank Mr Vaibhav Tyagi .</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bluebellcarsoule">
                                    <h2>Sudhakar M</h2>
                                    <h4>09/01/2024</h4>
                                    <div class="bluebellstart">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p><i class="bi bi-quote"></i>
                                        <span>
                                            We booked our Singapore trip and it was hassle free
                                            service. Wonderful experience in preparing itinerary,
                                            document submission reminder, timely travel arrangements
                                            and real time ground support.</span>
                                        <i class="bi bi-quote"></i>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bluebell-eight-section">
        <h2>Videos testimonials</h2>
        <h3>What our Travelers are saying</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 ">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/wA5gIAmTHik?rel=0&modestbranding=1&enablejsapi=1"
                            title="BlueBell Travel Introduction Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/i-qZmEbYpbI?si=do9YJY9-2exUo6fe&enablejsapi=1"
                            title="Traveler Testimonial 2" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/UnkEQOrHsr0?si=KiQTXxe_KaEufR2W&enablejsapi=1"
                            title="Traveler Testimonial 3" id="video" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item hhgh frameofvideo12"
                            src="https://www.youtube-nocookie.com/embed/Gs_SRg2yuSE?si=Ko46lzgte4xLnhjY&enablejsapi=1"
                            title="Traveler Testimonial 4" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item hhgh frameofvideo12"
                            src="https://www.youtube-nocookie.com/embed/IpZVhxqRDPk?si=DWhjrBbcWF1D6fbZ&enablejsapi=1"
                            title="Traveler Testimonial 5" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bluebellVideo embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube-nocookie.com/embed/wA5gIAmTHik?rel=0&modestbranding=1&enablejsapi=1"
                            title="BlueBell Travel Introduction Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bluebell-ninth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contacttext">
                        <h2>Let’s contact</h2>
                        <h3>CONTACT US</h3>
                        <p>Reach out to us – whether you have questions about our packages, need assistance with
                            bookings, or simply want expert advice on your next destination.</p>

                        <div class="align-items-center mt-3">
                            <!-- Phone -->
                            <p class="contact_phone mb-3">
                                <i class="bi bi-telephone-fill fs-5 mt-2" style="color:black;"></i>
                                <span class="ms-2"><b>Phone:</b>
                                    <a href="tel:+880010150150" class="fs-611 text-black" style="color:#5B5B5B;">
                                        08800150150, 08800140140, 01204314040
                                    </a>
                                </span>
                            </p>

                            <!-- Email -->
                            <p class="contact_phone mb-3">
                                <i class="bi bi-envelope-fill fs-511 mt-2" style="color:black;"></i>
                                <span class="ms-2"><b>Email:</b>
                                    <a href="mailto:info@bluebelltravels.com" class="fs-611 text-black"
                                        style="color:#F28B38;">
                                        info@bluebelltravels.com
                                    </a>
                                </span>
                            </p>

                            <!-- Hours -->
                            <p class="contact_phone mb-3">
                                <i class="bi bi-stopwatch-fill fs-511 mt-2" style="color:black;"></i>
                                <span class="ms-2"><b>Hours:</b>
                                    <span class="fs-611" style="color:#5B5B5B;">10 am – 8 pm. Closed on Sundays.</span>
                                </span>
                            </p>

                            <!-- Address -->
                            <p class="contact_phone mb-3">
                                <i class="bi bi-geo-alt-fill fs-511 mt-2" style="color:black;"></i>
                                <span class="ms-2"><b>Address:</b>
                                    <a href="#" class="fs-611 text-black" style="color:#5B5B5B;">
                                        LGF-70, Ansal Fortune Arcade, Sector 18, Noida, Uttar Pradesh 201301
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-left">
                        <h2>Get a call back</h2>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom03" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label">Phone No.</label>
                                <input type="number" class="form-control" id="validationCustom04" placeholder='+91 |'
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Your Message</label>
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    id="validationCustom05" required=""></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>



                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-icons">
        <!-- WhatsApp Icon -->
        <a href="https://wa.me/8800150150/?text=Hello%20there!" target="_blank" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <!-- Phone Icon -->
        <a href="tel:+918800150150" class="phone" aria-label="Phone">
            <i class="fas fa-phone"></i>
        </a>
    </div>

</main>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>




<?php include 'includes/footer.php'; ?>