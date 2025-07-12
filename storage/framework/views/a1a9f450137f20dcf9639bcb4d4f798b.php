<!--====== Service Section Start ======-->
<section id="services-section" class="service-section section-gap">
  <div class="container">
    <div class="section-heading text-center mb-30">
      <h2 class="title"><?php echo getcong_service('section_service_title'); ?></h2>
      <span class="tagline"><?php echo getcong_service('section_service_desc'); ?></span>
    </div>
    <div class="row justify-content-center">
      
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 col-sm-6 wow fadeInUp">
        <div class="iconic-box icon-left mt-30">
          <div class="icon">
            <img src="<?php echo e(URL::asset('upload/service/'.$service->service_icon)); ?>" alt="Service Icon" title="<?php echo e($service->service_title); ?>">
          </div>
          <div class="content">
            <h5 class="title">
              <?php echo e($service->service_title); ?>

            </h5>
            <p><?php echo $service->service_text; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
  </div>
</section>
<!--====== Service Section End ======--><?php /**PATH C:\xampp\htdocs\mobility_cms\resources\views/pages/sections/services.blade.php ENDPATH**/ ?>