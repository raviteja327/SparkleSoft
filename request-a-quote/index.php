<!doctype html>
<html lang="en">
  <head>
    <?php include '../header-links.php'; ?>
    <title>Sparkle Soft | Request A Quote</title>
  </head>
  <body>
    
    <main>
        <?php include '../header.php'; ?>

        <section class="inner-banner">
            <div class="banner-image" data-aos="fade-down" data-aos-duration="1000">
                <img src="<?php echo $base_url ?>/assets/images/banners/quote-banner.webp" class="img-fluid" alt="Sparkle Soft Banner" loading="lazy" decoding="async">
            </div>
            <div class="banner-text">
                <h3 data-aos="zoom-in" data-aos-duration="2000">REQUEST A QUOTE</h3>
            </div>
        </section>

        <section class="afford request-form">
            <div class="container">
                <h3>Please complete the form</h3>
                <p data-aos="fade-up" data-aos-duration="1000">
                    Please complete the form to receive a FREE Quotation for our Services. We will reply as soon as possible.
                </p>
                <form action="" class="forms" data-aos="fade-up" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your Name<span>*</span></label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your Phone<span>*</span></label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your Email<span>*</span></label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Industry Type</label>
                                <input type="text" class="form-control" name="industry">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">How can we help you?</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">What is your goal?</label>
                        <div class="checks">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Website Design</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Digital Marketing</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Web Applications</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                <label class="form-check-label" for="inlineCheckbox4">Mobile Applications</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                <label class="form-check-label" for="inlineCheckbox5">ERP Solutions</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                <label class="form-check-label" for="inlineCheckbox6">VPS Hosting</label>
                            </div>
                        </div>
                    </div>
                    <input type="button" value="SEND" name="submit" class="btn">
                </form>
            </div>
        </section>


        <section class="things">
            <div class="container">
                <h6 data-aos="fade-up" data-aos-duration="1000">Things we have <strong>Done</strong></h6>
                <p data-aos="fade-up" data-aos-duration="1500">We are building bridges in web technology in order to connect the client's goal to reality</p>
                <div class="portfolio-link" data-aos="fade-up" data-aos-duration="2000">
                    <a href="">VIEW FULL PORTFOLIO</a>
                </div>
            </div>
        </section>
    </main>

    <?php include '../footer.php'; ?>
    <?php include '../footer-links.php'; ?>
  </body>
</html>