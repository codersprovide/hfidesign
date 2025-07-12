<div id="client" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo getcong_service('section_our_client_title'); ?></h2>
      <hr>
    </div>
    <div id="clients" class="owl-carousel">
      <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <div class="item">
        <?php if($client->url!=""): ?>
        <a href="<?php echo e($client->url); ?>" target="_blank">
          <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="<?php echo e($client->name); ?>">
        </a> 
        <?php else: ?>
         <img src="<?php echo e(URL::asset('upload/clients/'.$client->image.'-b.png')); ?>" alt="<?php echo e($client->name); ?>">
        <?php endif; ?>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
         
    </div>
  </div>
</div><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/_particles/clients.blade.php ENDPATH**/ ?>