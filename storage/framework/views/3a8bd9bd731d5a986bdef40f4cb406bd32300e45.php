<!--====== Brand Logo Section Start ======-->
  <section class="brand-logo-section">
    <div class="container">
      <div class="section-heading text-center mb-40">
        <h2 class="title"><?php echo getcong_service('section_our_client_title'); ?></h2>
       </div>
      <div class="logo-carousel">
        <div class="slick-slider row logo-carousel-active align-items-center slick-initialized">
          <div class="slick-list">
            <div class="brand-item-logo slider">
              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div>

                 <?php if($client->url!=""): ?>
                  <a href="<?php echo e($client->url); ?>" target="_blank" title="client-url">
                    <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="brand-logo" title="<?php echo e($client->name); ?>">
                  </a> 
                  <?php else: ?>
                   <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="brand-logo" title="<?php echo e($client->name); ?>">
                  <?php endif; ?>
                 
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== Brand Logo Section End ======--> <?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/pages/sections/clients.blade.php ENDPATH**/ ?>