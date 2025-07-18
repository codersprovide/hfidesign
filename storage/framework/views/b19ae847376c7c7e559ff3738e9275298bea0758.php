<div id="Portfolio">
  <div class="section-title center">
    <h2><?php echo getcong_service('section_portfolio_title'); ?></strong></h2>
    <hr>
  </div>
  <div id="js-filters-masonry-projects" class="vcf-l-filters-buttonCenter">
    <div data-filter="*" class="vcf-filter-item-active vcf-filter-item">All</div>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div data-filter=".<?php echo e($category->id); ?>" class="vcf-filter-item"><?php echo e($category->category_name); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
     
  </div>
  <div id="js-grid-masonry-projects" class="vcf vcf-l-grid-masonry-projects">
    
    <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <div class="vcf-item <?php echo e($portfolio_item->cat_id); ?>">
        <div class="vcf-caption">
          <div class="vcf-caption-defaultWrap"> <img src="<?php echo e(URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg')); ?>" alt=""> </div>
          <div class="vcf-caption-activeWrap">
            <div class="vcf-l-caption-alignCenter">
              <div class="vcf-l-caption-body"> <a href="<?php echo e(URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg')); ?>" class="vcf-lightbox vcf-l-caption-buttonRight" data-title="<?php echo e(\App\Categories::getCategoryInfo($portfolio_item->cat_id)->category_name); ?>"><i class="fa fa-fw"></i></a> </div>
            </div>
          </div>
        </div>
      <div class="inner-list-detail">
          <a href="#" class="vcf-l-grid-masonry-projects-title" rel="nofollow"><?php echo e($portfolio_item->title); ?></a>
          <div class="vcf-l-grid-masonry-projects-desc"><?php echo e(\App\Categories::getCategoryInfo($portfolio_item->cat_id)->category_name); ?></div>
      </div>
      </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
      
  </div>
</div><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/_particles/portfolio.blade.php ENDPATH**/ ?>