<!--====== Contact Section Start ======-->
<section id="contact-section" class="consultation-section section-doted-bg section-gap bg-color-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9 wow fadeInUp">
                        <div class="consultation-text text-white pr-xl-5">
                            <div class="section-heading heading-white mb-20">
                                <h2 class="title"><?php echo getcong_service('section_contact_title'); ?></h2>
                                <span class="tagline">Ready To Get Popular Service</span>
                            </div>                            
                            <div class="contact-us mt-4">
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i> <?php echo getcong_service('section_contact_address'); ?></li>
                                    <li>
                                        <i class="far fa-envelope-open"></i>
                                        <a href="mailto:<?php echo e(getcong_service('section_contact_email1')); ?>" title="email"><?php echo e(getcong_service('section_contact_email1')); ?></a>
                                        <a href="mailto:<?php echo e(getcong_service('section_contact_email2')); ?>" title="email"><?php echo e(getcong_service('section_contact_email2')); ?></a>
                                    </li>
                                    <li>
                                        <i class="far fa-phone"></i>
                                        <a href="tel:<?php echo e(getcong_service('section_contact_phone1')); ?>" title="phone"><?php echo e(getcong_service('section_contact_phone1')); ?></a>
                                        <a href="tel:<?php echo e(getcong_service('section_contact_phone2')); ?>" title="phone"><?php echo e(getcong_service('section_contact_phone2')); ?></a>
                                    </li>
                                </ul>
                            </div>                                  
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 wow fadeInUp">
                        <div class="consultation-form-area pl-xl-3 content-mt-md-50">
                            <div class="consultation-form-one">
 

                                <?php if(Session::has('flash_message')): ?>
                                        <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                            <?php echo e(Session::get('flash_message')); ?>

                                        </div>
                                  <?php endif; ?>

                                <?php echo Form::open(array('url' => 'contact_send','class'=>'','name'=>'sentMessage','id'=>'contactForm','role'=>'form','novalidate'=>'novalidate')); ?>

                                    <div class="input-field">
                                        <input type="text" name="name" id="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="email" id="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="number" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="input-field">
                                        <textarea name="message" id="message" rows="3" placeholder="Message Here..." required=""></textarea>
                                    </div>
                                    <div class="input-field">
                                        <div id="loading_contact" align="center"></div>
                                        <div id="success"></div>

                                        <button type="submit" id="contact_submit" value="Submit" class="template-btn">Send Message <i class="far fa-long-arrow-right"></i></button>
                                    </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Section End ======-->

<?php /**PATH C:\xampp\htdocs\mobility_cms\resources\views/pages/sections/contact.blade.php ENDPATH**/ ?>