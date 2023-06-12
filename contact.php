<?php 

session_start();
$_SESSION['page']=2;

include('./shared/header.php'); 

?>

 <!-- ========== Header Normal========== -->
 <header id="dsn_header" class="dsn-header-animation header-normal v-dark-head">
            <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>

            <div class="entry-header p-relative over-hidden">
                <div id="hero_content"
                    class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                    <div class="content p-relative ">
                        <div class="intro-project w-100">
                            <div class="intro-title ">

                                <div id="hero_title" class="mt-20">
                                    <h1 class="title text-upper">
                                        Look around you<br> everything is changing.
                                    </h1>
                                </div>
                                <p class="mt-20 max-w570">
                                    What if the time has come to step into the digital era?
                                </p>
                                <div class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex">
                                    <a class="dsn-btn dsn-border border-color-default  background-section effect-ajax has-icon-left"
                                        href="./service.html" data-dsn-text="OUR PORTFOLIO">
                                        <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                        <span class="title-btn p-relative  z-index-1 ">See More Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
                data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                <div class="text">SCROLL</div>
            </a>
        </header>
        <!-- ========== End Header Normal ========== -->


<div id="page_wrapper" class="wrapper">
            <!-- ========== Contact  ========== -->
            <div class="p-relative contact-form over-hidden section-padding">
                <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
                <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                    <div class="box-form">
                        <h2 class="title-h2 ">
                            IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                        </h2>
                        <p class="mt-10">Fill fields and find approximate your repair</p>
                        <div class="dsn-form mt-20 form-box d-flex flex-column" id="contact">
                            <?php  if($_GET)
                            {
                                if($_GET['token']=='success')
                                {
                                    echo '<p class="text-success">Thanks for contacting IZH-Tech. Our team will contact you soon.</p>';
                                }
                                
                            }
                            ?>
                            <form id="contact-form" class="form w-100" method="post" action="shared/contact-us.php"
                                data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                        <div class="form-group dsn-up">
                                            <div class="entry-box">

                                                <input id="form_name" type="text" name="name"
                                                    placeholder="Type your name" required="required"
                                                    data-error="name is required." />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group dsn-up">
                                            <div class="entry-box">

                                                <input id="form_email" type="email" name="email"
                                                    placeholder="Type your Email Address" required="required"
                                                    data-error="Valid email is required." />
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="form-group dsn-up">
                                        <div class="entry-box">

                                            <textarea id="form_message" class="form-control" name="message" rows="7"
                                                placeholder="Tell us about you and the world" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="d-flex dsn-up">
                                        <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                            data-dsn="parallax">
                                            <input type="submit" value="Send Message">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-info p-30 background-theme ">
                        <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                            <div class="d-grid dsn-service icon-left align-items-center">
                                <div class="service-item p-relative grid-item style-box  background-transparent">

                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">Head Office:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>Flora Drive,<br> Singapore 506889.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item p-relative grid-item style-box  background-transparent">

                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">
                                                Phones:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>+65 89269693</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item p-relative grid-item style-box  background-transparent">

                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">
                                                Write Us:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>info@izhtech.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ========== End Contact  ========== -->
            <!-- ========== Map  ========== -->
            <div style="height:30rem; width: 100%;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7025661863586!2d103.9646337746704!3d1.355050398632124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3cfb468dd395%3A0x89f04829e34ab49a!2sHedges%20Park%20Condominium!5e0!3m2!1sen!2sin!4v1684411708954!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- ========== End Map  ========== -->




<?php include('./shared/footer.php'); ?>