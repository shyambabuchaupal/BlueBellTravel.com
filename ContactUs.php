<?php include 'includes/header.php'; ?>

<style>
.bluebell-ninth-section {
    margin: 70px 0;
}
</style>
<section class="contact-section position-relative">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="hero-img">
                    <img src="./assets/images/BluebellContact.webp" class="img-fluid" alt="Hero Background Image" loading="lazy"/>

                </div>
            </div>
        </div>
    </div>
</section>

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
                    <form class="row g-3 needs-validation" novalidate method='post'>
                        <div class="col-md-6">
                            <label class="form-label">First name</label>
                            <input type="text" name='fname' class="form-control shadow-lg" id="validationCustom01"
                                required>

                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last name</label>
                            <input type="text" name='lname' class="form-control shadow-lg" id="validationCustom02"
                                required>

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email</label>
                            <input type="text" name='email' class="form-control shadow-lg" id="validationCustom03"
                                required>

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Phone Number</label>
                            <input type="number" name="phone" placeholder='+91 |' class="form-control shadow-lg"
                                id="validationCustom04" required>

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Textarea</label>
                            <textarea class="form-control shadow-lg" name="message" id="validationTextarea" cols=''
                                rows='5' required></textarea>

                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary shadow-lg rounded-pill px-5 py-1" type="submit"
                                name="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
<?php
if (isset($_POST['submit'])) {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'shyam18061996@gmail.com';
    $subject = "New Message from Contact Form";

    // Construct the message body with proper formatting
    $body = "
        <html>
        <head>
            <title>Contact Form Submission</title>
        </head>
        <body>
            <p>Dear Sir/Ma'am,</p>
            <p><strong>First Name:</strong> $fname</p>
            <p><strong>Last Name:</strong> $lname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>
        </body>
        </html>
    ";

    // Set headers for HTML email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: <info@bluebelltravels.com>' . "\r\n";

    // Send email and check success
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Thank you, $fname! Your message has been sent successfully. We appreciate your visit to our website.');
                window.location.href = 'index.php'; // Change to your feedback or homepage
              </script>";
    } else {
        echo "<script>
                alert('Sorry, there was an issue sending your message. Please try again later.');
                window.history.back(); // Go back to the contact form page
              </script>";
    }
}
?>

<?php include 'includes/footer.php'; ?>