<!--====== Team Section Start ======-->
<section id="team-section" class="team-section section-gap">
  <div class="container">
    <div class="section-heading text-center mb-30">
      <h2 class="title"><?php echo getcong_service('section_team_title'); ?></h2>
      <span class="tagline"><?php echo getcong_service('section_team_desc'); ?></span>
    </div>
    <div class="row team-member-items justify-content-center">
      
      <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
        <div class="member-item mt-30">
          <div class="member-photo">
            <img src="<?php echo e(URL::asset('upload/team/'.$team_member->image.'-b.jpg')); ?>" alt="team" title="team member">
            <ul class="social-icons">

              <?php if($team_member->facebook_url): ?><li><a href="<?php echo e($team_member->facebook_url); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
              <?php if($team_member->twitter_url): ?><li><a href="<?php echo e($team_member->twitter_url); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
              <?php if($team_member->linkedin_url): ?><li><a href="<?php echo e($team_member->linkedin_url); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li><?php endif; ?>
                
            </ul>
          </div>
          <h4 class="name"><a href="#"><?php echo e($team_member->name); ?></a></h4>
          <span class="title"><?php echo e($team_member->designation); ?></span>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
                     
    </div>
  </div>
</section>
<!--====== Team Section End ======--><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/pages/sections/team.blade.php ENDPATH**/ ?>