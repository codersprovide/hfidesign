<!--====== Footer Start ======-->
<footer class="footer-item copyright-box">
  <div class="container">
    <div class="row">
      <div class="col-lg d-lg-flex align-items-center">
        <p>
          <?php if(getcong('site_copyright')): ?>
            
            <?php echo e(getcong('site_copyright')); ?>

          
          <?php else: ?>
          
            Copyright &copy; <?php echo e(date('Y')); ?>. All rights reserved.

          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
        <ul class="social-links">
          <li><span>Follow Us:-</span></li>

          <?php if(getcong('facebook_url')): ?><li><a data-tooltip="facebook" href="<?php echo e(getcong('facebook_url')); ?>" title="facebook"><i class="fab fa-facebook-square"></i></a></li><?php endif; ?>
          <?php if(getcong('linkedin_url')): ?><li><a data-tooltip="Linkedin" href="<?php echo e(getcong('linkedin_url')); ?>" title="Linkedin"><i class="fab fa-linkedin"></i> </a></li><?php endif; ?>
          <?php if(getcong('twitter_url')): ?><li><a data-tooltip="twitter" href="<?php echo e(getcong('twitter_url')); ?>" title="twitter"><i class="fab fa-twitter-square"></i></a></li><?php endif; ?>           
          <?php if(getcong('pinterest_url')): ?><li><a data-tooltip="Pinterest" href="<?php echo e(getcong('pinterest_url')); ?>" title="Pinterest"><i class="fab fa-pinterest"></i> </a></li><?php endif; ?>
           
        </ul>
      </div>
    </div>      
  </div>
</footer>
<!--====== Footer End ======--><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/_particles/footer.blade.php ENDPATH**/ ?>