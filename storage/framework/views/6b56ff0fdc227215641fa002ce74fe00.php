<div id="testimonial-section" class="section-blob-bg-two">
  <!--====== Testimonial Section Start ======-->
  <section class="testimonial-section section-gap">
    <div class="container">
      <div class="testimonial-area">
        <div class="section-heading text-center mb-50">
          <h2 class="title"><?php echo getcong_service('section_testimonials_title'); ?></h2>
         </div>

        <div class="testimonial-slider-two row">
          <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-6">
            <div class="testimonial-item">
              <div class="content">
                <p><?php echo $testimonial->testimonial; ?></p>
              </div>
              <div class="author">
                <div class="author-photo">
                  <img src="<?php echo e(URL::asset('upload/testimonial/'.$testimonial->image.'-b.png')); ?>" alt="author" title="<?php echo e($testimonial->name); ?>">
                </div>
                <div class="author-info">
                  <h4 class="name"><?php echo e($testimonial->name); ?></h4>
                 </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           
        </div>
      </div>
    </div>
  </section>
  <!--====== Testimonial Section End ======-->
 </div> <?php /**PATH C:\xampp\htdocs\mobility_cms\resources\views/pages/sections/testimonials.blade.php ENDPATH**/ ?>