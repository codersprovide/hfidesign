<!--====== Portfolio Section Start ======-->
<section id="work-section" class="portfolio-section section-gap">
  <div class="container">
    <div class="section-heading text-center mb-50">
      <h2 class="title"><?php echo getcong_service('section_portfolio_title'); ?></h2>
     </div>
    <div class="portfolio-filter">
      <ul>
        <li data-filter="*" class="active">Show All</li>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li data-filter=".<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
      </ul>
    </div>
    <div class="row filter-items">
      
      <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 col-sm-6 filter-item <?php echo e($portfolio_item->cat_id); ?>">
        <div class="portfolio-items-two mt-50">
          <div class="portfolio-thumb">
            <img src="<?php echo e(URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg')); ?>" alt="Portfolio Image" title="<?php echo e($portfolio_item->title); ?>">
            <a href="<?php echo e(URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg')); ?>" class="portfolio-link video-popup" data-lity title="portfolio"></a>
          </div>
          
          <div class="portfolio-content">
            <h4 class="title"><a href="#" title="portfolio name"><?php echo e($portfolio_item->title); ?></a></h4>
            <div class="categories">
              <a href="#" title="portfolio categories"><?php echo e(\App\Categories::getCategoryInfo($portfolio_item->cat_id)->category_name); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    </div>
  </div>
</section>
<!--====== Portfolio Section End ======--><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/pages/sections/portfolio.blade.php ENDPATH**/ ?>