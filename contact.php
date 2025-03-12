<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    if ($name && $email && $message) {
        $to = "c22-4663-01@spist.edu.ph";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            $success = "Thank you for your message! We'll get back to you soon.";
        } else {
            $error = "There was a problem sending your message. Please try again later.";
        }
    } else {
        $error = "Please fill in all fields correctly.";
    }
}
include('includes/header.php'); 
?>

<!-- About header -->
<section class="about-contact bg-light">
    <div class="container">
        <h1 class="text-center">Contact Us</h1>
        <p class="text-center lead"><strong>Get in Touch</strong></p>
        <p class="text-center lead">Have questions? We'd love to hear from you.</p>
    </div>
 </section>

<section class="contact">
    <div class="container">
        
        <?php if (isset($success)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>
    
        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
                <div class="contact-info mb-5">
        
                    <div class="mt-4">
                        <h4>Contact Information</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                Southern Philippines Institute of Science & Technology<br>
                                <span class="ms-4">Dasmariñas, Cavite</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone me-2"></i>
                                (123) 456-7890
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope me-2"></i>
                                info@spistech.edu.ph
                            </li>
                        </ul>
                    </div>
                </div>

                <form action="contact.php" method="POST" class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            
            
            <div class="col-md-6">
                <div class="map-container mt-4">
                    <h3 class="mb-3">Our Location</h3>
                    <div class="ratio ratio-4x3">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.7026444972897!2d120.93722531483454!3d14.387137989926946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2609bedc269%3A0xd49218819a523761!2sSouthern%20Philippines%20Institute%20of%20Science%20%26%20Technology!5e0!3m2!1sen!2sph!4v1625764283456!5m2!1sen!2sph"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    
                    <div class="mt-4">
                        <h4>Office Hours</h4>
                        <ul class="list-unstyled">
                            <li><strong>Monday - Friday:</strong> 8:00 AM - 5:00 PM</li>
                            <li><strong>Saturday:</strong> 9:00 AM - 5:00 PM</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
