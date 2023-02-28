<!doctype html>
<html lang="en">
  <head>
    <?php include '../header-links.php'; ?>
    <title>Sparkle Soft | Contact Us</title>
  </head>
  <body>
    
    <main>
        <?php include '../header.php'; ?>

        <section class="inner-banner">
            <div class="banner-image" data-aos="fade-down" data-aos-duration="1000">
                <img src="<?php echo $base_url ?>/assets/images/banners/contact-banner.webp" class="img-fluid" alt="Sparkle Soft Banner" loading="lazy" decoding="async">
            </div>
            <div class="banner-text">
                <h3 data-aos="zoom-in" data-aos-duration="2000">CONTACT US</h3>
            </div>
        </section>

        <section class="contact-form">
            <div class="container">
                <div class="row row1">
                    <div class="col-lg-6">
                        <figure class="figure" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="<?php echo $base_url ?>/assets/images/inner/stamp.png" class="figure-img img-fluid rounded" alt="Sparkle Soft Contact Stamp" loading="lazy" decoding="async">
                        </figure>
                        <h5>LET'S TALK BUSINESS</h5>
                        <form action="" class="forms" data-aos="fade-up" data-aos-duration="1000">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Message</label>
                                <textarea class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <input type="button" value="SEND" name="submit" class="btn">
                        </form>
                    </div>
                    <div class="col-lg-6 reach">
                        <p>Reach Us:</p>
                        <h5 data-aos="fade-up" data-aos-duration="1500">SoftCurve Inc</h5>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            8170 Lark Brown Rd, <br>
                            Ste 202, Elkridge, MD -21075
                        </p>
                        <div class="email">
                            <p>Email:</p>
                            <div class="mail-id">
                                <a href="mailto: info@softcurve.com" data-aos="fade-up" data-aos-duration="2500">info@softcurve.com </a>
                                <a href="mailto: sales@softcurve.com" data-aos="fade-up" data-aos-duration="3000">sales@softcurve.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../footer.php'; ?>
    <?php include '../footer-links.php'; ?>
  </body>
</html>