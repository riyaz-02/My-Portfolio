<section class="contact" id="contact">
    <div class="container">
        <div class="sectionhead">
            <h1 data-aos="fade-up"><i class="fa-solid fa-address-book"></i> Contact <span>Me</span></h1>
        </div>
        <div class="box flex-direction">
            <div class="contact-image" data-aos="fade-right">
                <img src="https://i.ibb.co/bwgcrbn/contact-img.png">
            </div>
            <div class="form">
                <form class="contact-form" id="contactForm" action="send_email.php" method="POST">
                    <input class="form-controls" id="name" name="name" type="text" placeholder="Your Name" data-aos="fade-left" required>
                    <input class="form-controls" id="email" name="email" type="email" placeholder="Your Email" data-aos="fade-left" required>
                    <input class="form-controls" id="phone" name="phone" type="text" placeholder="Your Phone" data-aos="fade-left" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    <textarea class="form-controls" id="message" name="message" placeholder="Write your message" cols="30" rows="4" data-aos="fade-left"></textarea>
                    <div>
                        <input class="form-btn btn common-btn" type="submit" value="Send Message" data-aos="zoom-in">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>