<!--====== Faq Setion Start ======-->
  <section id="why-choose" class="faq-section section-gap-bottom">
    <div class="container">
      <div class="accordion-video-box">
        <div class="accordion-video">
          <div class="faq-image text-center text-lg-right content-mb-md-50">
            <img src="<?php echo e(URL::asset('assets/img/feature-faq-image.png')); ?>" alt="feature-faq-image" title="whychoose" class="animate-float-bob-y">
          </div>
        </div>
        <div class="box-content">
          <div class="section-heading mb-30">
            <h2 class="title"><?php echo getcong_service('section_whychoose_title'); ?></h2>
           </div>
          <div class="accordion" id="accordionFaqOne">
            
            <?php $__currentLoopData = $whychoose; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $whychoose_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="accordion-item <?php if($i==0): ?> accordion-active <?php endif; ?>">
              <h5 class="accordion-title collapsed" data-toggle="collapse" aria-expanded="<?php if($i==0): ?> true <?php else: ?> false <?php endif; ?>" data-target="#accordion-<?php echo e($i); ?>">
                  <?php echo $whychoose_item->title; ?>

              </h5>
              <div id="accordion-<?php echo e($i); ?>" class="collapse <?php if($i==0): ?> show <?php endif; ?>" data-parent="#accordionFaqOne">
                <div class="accordion-content">
                  <?php echo $whychoose_item->description; ?>

                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== Faq Setion End ======--> <?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/pages/sections/whychoose.blade.php ENDPATH**/ ?>