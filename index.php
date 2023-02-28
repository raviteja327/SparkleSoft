<!doctype html>
<html lang="en">
  <head>
    <?php include 'header-links.php'; ?>
    <title>Sparkle Soft</title>
  </head>
  <body>

    <main>
        <?php include 'header.php'; ?>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_url ?>/assets/images/banners/banner3.webp" 
                    class="d-block w-100 img-fluid animate__animated animate__slideInDown" alt="Banner" loading="lazy" decoding="async">
                    <div class="carousel-caption d-none d-md-block animate__animated animate__zoomIn">
                        <h1>Start up & <br> Never Stop</h1>
                        <p>
                            We firmly believe in being truthful and realistic to our <br>
                            customers and practise "Under Commitment and Over <br> Delivery"
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_url ?>/assets/images/banners/banner1.webp" 
                    class="d-block w-100 img-fluid animate__animated animate__slideInDown" alt="Banner" loading="lazy" decoding="async">
                    <div class="carousel-caption d-none d-md-block animate__animated animate__zoomIn">
                        <h5>Expect Nothing <br> less than perfect</h5>
                        <p>
                            Responsive designs have allowed users to take one website and fit onto any <br>
                            screen size. Website design trends are meeting more of a theatrical and <br>
                            cinematic based experience. Finding creative ways for users to navigate your <br>
                            site will continue to keep them more interested.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_url ?>/assets/images/banners/banner2.webp" 
                    class="d-block w-100 img-fluid animate__animated animate__slideInDown" alt="Banner" loading="lazy" decoding="async">
                    <div class="carousel-caption d-none d-md-block animate__animated animate__zoomIn">
                        <h5>A True Business Partner</h5>
                        <p>
                            With the global mobility index rising consistently we have developed this <br>
                            service line to address issues faced in developing business lead <br>
                            applications, Utility lead applications and applications developed for <br>
                            entertainment using IOS and Android.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class="choose">
            <div class="container">
                <h2>WHY CHOOSE <strong>US</strong></h2>
                <div class="row">
                    <div class="col-lg-6">
                        <figure class="figure" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?php echo $base_url ?>/assets/images/home/choose.webp" class="figure-img img-fluid" alt="Choose" loading="lazy" decoding="async">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <ul data-aos="fade-up" data-aos-duration="2000">
                            <li>The Websites we make are optimized</li>
                            <li>We customize, implement everything in Open Source Technology</li>
                            <li>Our Agile Methodology of development is proven and effective</li>
                            <li>Strong focus on business requirements</li>
                            <li>No compromise on quality of website</li>
                            <li>We're quick to response to the clients need</li>
                            <li>Delivering services and solutions right for your business</li>
                            <li>No worrying as we have an expert web development team</li>
                            <li>Our web developers are experienced and certified</li>
                            <li>We build responsive websites that auto adapt to device screens</li>
                            <li>Extensive project management experience</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="process bg" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <h2>OUR <strong>PROCESS</strong></h2>
                <div class="process-flow">
                    <div class="flow flow1">
                        <div class="content">
                            <p>
                                Understanding what you want out of your site and how do you plant to implement it.
                            </p>
                            <h5>PLANNING</h5>
                        </div>
                        <span>1</span>
                        <iconify-icon icon="fa:calendar"></iconify-icon>
                    </div>
                    <div class="flow flow2">
                        <iconify-icon icon="fa:laptop"></iconify-icon>
                        <span>2</span>
                        <div class="content">
                            <h5>DESIGN</h5>
                            <p>
                                We will Create a beautiful, affordable website design for your creative marketing project.
                            </p>
                        </div>
                    </div>
                    <div class="flow flow3">
                        <div class="content">
                            <p>
                                We develop content management system for clients who need basics.
                            </p>
                            <h5>DEVELOPMENT</h5>
                        </div>
                        <span>3</span>
                        <iconify-icon icon="fa:keyboard-o"></iconify-icon>
                    </div>
                    <div class="flow flow4">
                        <iconify-icon icon="fa:paper-plane"></iconify-icon>
                        <span>4</span>
                        <div class="content">
                            <h5>LAUNCH</h5>
                            <p>
                                After successful testing the product is delivered / deployed to the customer for their use.
                            </p>
                        </div>
                    </div>
                    <div class="flow flow5">
                        <div class="content">
                            <p>
                                It is an important step which makes that your site works with efficiency all the time.
                            </p>
                            <h5>MAINTENANCE</h5>
                        </div>
                        <span>5</span>
                        <iconify-icon icon="fa:shield"></iconify-icon>
                    </div>
                    <div class="big-bar"></div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h2>OUR <strong>SERVICES</strong></h2>
                <p class="side-para" data-aos="fade-up" data-aos-duration="1000">
                    We offer a wide range of Digital Marketing & Web Development Services. Our services include web design, web development, Social media marketing, SEO & more.
                </p>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-group" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card">
                                <div class="content">
                                    <h3>WEBSITE <strong>DESIGN</strong></h3>
                                    <p>
                                        Soft Curve will work with you to find out what you need from your website.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                                <iconify-icon icon="simple-line-icons:screen-desktop"></iconify-icon>
                            </div>
                            <div class="card">
                                <div class="content">
                                    <h3>WEB <strong>DEVELOPMENT</strong></h3>
                                    <p>
                                        We offer web development services for any kind of business or industry.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                                <iconify-icon icon="simple-line-icons:layers"></iconify-icon>
                            </div>
                            <div class="card">
                                <div class="content">
                                    <h3>WEB <strong>APPLICATIONS</strong></h3>
                                    <p>
                                        We offer web application services for any kind of business or industry.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                                <iconify-icon icon="simple-line-icons:equalizer"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="figure" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="<?php echo $base_url ?>/assets/images/home/service.png" class="figure-img img-fluid rounded" alt="Choose" loading="lazy" decoding="async">
                        </figure>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-group" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card">
                                <iconify-icon icon="simple-line-icons:globe-alt"></iconify-icon>
                                <div class="content">
                                    <h3>SOCIAL <strong>MARKETING</strong></h3>
                                    <p>
                                        Social Media Marketing is important for the online presence of your business.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                            </div>
                            <div class="card">
                                <iconify-icon icon="simple-line-icons:mouse"></iconify-icon>
                                <div class="content">
                                    <h3>ERP <strong>SOLUTIONS</strong></h3>
                                    <p>
                                        We implement everything in Open Source Technology, we have strong practices in  ERP & CRM.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                            </div>
                            <div class="card">
                                <iconify-icon icon="simple-line-icons:screen-smartphone"></iconify-icon>
                                <div class="content">
                                    <h3>MOBILE <strong>APPLICATIONS</strong></h3>
                                    <p>
                                        Maximize the effectiveness of marketing activities by mobile applications.
                                    </p>
                                    <a href="">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="quote">
            <div class="container">
                <div class="text-btn">
                    <div class="text">
                        <h4 data-aos="fade-up" data-aos-duration="1000">Lets Get Started <strong>your project</strong></h4>
                        <p data-aos="fade-up" data-aos-duration="1500">We will help you to achieve your goals and to grow your business.</p>
                    </div>
                    <div class="button" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#" class="btn">REQUEST A QUOTE</a>
                    </div>
                </div>
            </div>
        </section>

        
    </main>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>
  </body>
</html>