<!--====== Start Hero Area ======-->
<section id="home-section" class="have-animate-icons">
  <div class="slider-wrapper default">
    <div id="slider">

      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="hero-slide-main">
        <div class="hero-slide-item">
          <h2 class="content fade"><?php echo e($slider->slider_title); ?></h2>
          <p class="content fade"><?php echo e($slider->slider_sub_title); ?></p>
        </div>
        <img src="<?php echo e(URL::asset('upload/slider/'.$slider->slider_image.'-b.jpg')); ?>" class="bg" title="<?php echo e($slider->slider_title); ?>" alt="slider" />
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </div>
</section>
<!--====== End Hero Area ======--><?php /**PATH C:\xampp\htdocs\mobility_cms\resources\views/pages/sections/slider.blade.php ENDPATH**/ ?>