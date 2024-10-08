<?php include('header.php') ?>

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="index.php" class="text-light">Home</a> /
            <a href="contact.php" class="text-light">Contact Us</a>
        </p>
    </div>
</div>

<section>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-7">
                <div class="contact-content mb-2">
                    <h2>Contact Us</h2>
                    <p><i class="bi bi-telephone"></i> 1234567890, +91 3452134567</p>
                    <!-- <p class="colling">
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+918789823998">+91 8789823998</a>,
                        <a href="tel:+917870789135">07870789135</a>
                    </p> -->
                    <p><i class="bi bi-envelope"></i> webmtechnology@gmail.com</p>

                    <p><i class="bi bi-link-45deg"></i> https://jissoftware.in/webmtechnology/</p>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7324.006427793805!2d85.31252714773404!3d23.388101000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e123db5a160b%3A0xe6ef89a82717573c!2sInstitute%20of%20Management%20Studies!5e0!3m2!1sen!2sin!4v1723027000387!5m2!1sen!2sin" width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-form">
                    <h2>Get in Touch</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Mobile Number</label>
                            <input type="number" class="form-control" id="number" placeholder="Your Number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary text-center align-item-center">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include('footer.php') ?>