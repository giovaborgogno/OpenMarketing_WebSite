<?php require_once('inc/header/header.php'); ?>


        <div id="content" class="site-content">
            <div class="page-header dtable text-center" style="background-image: url(images/bg-page-header.jpg);">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Free a Quote</h1>
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li class="active">Free a Quote</li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <section class="p-t100 p-b40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 col-xs-12">
                            <div class="ot-heading text-center">
                                <h6><span>Get a Free Quote</span></h6>
                                <h2 class="main-heading">Talk With Our Digital Strategists</h2>
                                <p>Please fill out the form below to receive a free quote for our search marketing services. Select what services you are interested in below and we’ll contact you as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m-b100">
                <div class="container">
                    <div class="wpcf7">
                        <form action="freeaquote.php" method="POST" class="wpcf7-form">
                            <div class="faq-form row">
                                <p class="col-md-6 col-xs-12">
                                    <input type="url" name="website" class="wpcf7-form-control wpcf7-text" placeholder="Website URL *" required="">
                                </p>
                                <p class="col-md-6 col-xs-12">
                                    <input type="text" name="company" class="wpcf7-form-control wpcf7-text" placeholder="Company Name" required="">
                                </p>
                                <p class="col-md-6 col-xs-12">
                                    <input type="text" name="fname" class="wpcf7-form-control wpcf7-text" placeholder="First Name *" required="">
                                </p>
                                <p class="col-md-6 col-xs-12">
                                    <input type="text" name="lname" class="wpcf7-form-control wpcf7-text" placeholder="Last Name *" required="">
                                </p>
                                <p class="col-md-6 col-xs-12">
                                    <input type="tel" name="phone" class="wpcf7-form-control wpcf7-text wpcf7-tel" placeholder="Phone Number *" required="">
                                </p>
                                <p class="col-md-6 col-xs-12">
                                    <input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="Your Email *" required="">
                                </p>
                                <p class="col-md-12 col-xs-12 multi-checkbox">
                                    <label>Reason To Contact</label><br>
                                    <span class="wpcf7-form-control-wrap your-option" >
                                        <span class="wpcf7-form-control wpcf7-checkbox" >
                                            <span class="wpcf7-list-item first" required="">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="SEO Optimization">
                                                    <span class="wpcf7-list-item-label">SEO Optimization</span>
                                                </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="Web Development">
                                                    <span class="wpcf7-list-item-label">Web Development</span>
                                                </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="PPC Advertising">
                                                    <span class="wpcf7-list-item-label">PPC Advertising</span>
                                                </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="Content Marketing">
                                                    <span class="wpcf7-list-item-label">Content Marketing</span>
                                                </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="Social Marketing">
                                                    <span class="wpcf7-list-item-label">Social Marketing</span>
                                                </label>
                                            </span>
                                            <span class="wpcf7-list-item last">
                                                <label>
                                                    <input type="checkbox" name="name[]" value="App Development">
                                                    <span class="wpcf7-list-item-label">App Development</span>
                                                </label>
                                    
                                                
                                            </span>
                                        </span>
                                    </span>
                                    
                                    
                                <p class="col-md-12 col-xs-12">
                                    <textarea  type="text" name="message" class="wpcf7-form-control wpcf7-textarea" placeholder="Your Message" required=""></textarea>
                                </p>
                                
                                <!-- <div class="g-recaptcha col-md-12 col-xs-12" data-sitekey="6LfEdeAhAAAAAJPZOh6dDGtD6-CLOLRjr8LfQnC1"></div> -->
                                <!-- esta es la que hizo giovanni: -->
                                <div class="g-recaptcha col-md-12 col-xs-12" data-sitekey="6LcxO3wiAAAAALwfrCogdmQRk3WVSfjpLH92V0I-"></div> 
                                <p class="text-center">
                                    
                        
                                    <button class="octf-btn octf-btn-icon octf-btn-primary">Send Message<i class="flaticon-right-arrow-1"></i></button>
                                         <!-- <br/>
                                              <input type="submit" value="Submit"> -->
                                </p>
                             
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
  

<?php require_once('inc/footer/footer.php'); ?>
        