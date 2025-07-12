<!--====== Start Header ======-->
<header class="main-nav-header absolute-header sticky-header">
  <div class="container-fluid container-1550">
    <div class="header-inner">
      <div class="header-left">
        <div class="site-logo">
          <a href="<?php echo e(URL('/')); ?>" title="URL"><img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="logo" title="site logo"></a>
        </div>
      </div>
      <div class="header-center">
        <nav class="nav-menu d-none d-xl-block">
          <ul class="primary-menu">

            <li><a class="page-scroll" href="#home-section" title="URL">Home</a></li>
            
            <?php if(getcong('about_section')!=0): ?>
              <li><a class="page-scroll" href="#about-section" title="URL"><?php echo e(getcong_service('section_name_about')); ?></a></li>
            <?php endif; ?>

            <?php if(getcong('service_section')!=0): ?>
              <li><a class="page-scroll" href="#services-section" title="URL"><?php echo e(getcong_service('section_name_service')); ?></a></li>
            <?php endif; ?>          
            
            <?php if(getcong('portfolio_section')!=0): ?>
              <li><a class="page-scroll" href="#work-section" title="URL"><?php echo getcong_service('section_name_portfolio'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('features_section')!=0): ?>
              <li><a class="page-scroll" href="#features-section" title="URL"><?php echo getcong_service('section_name_features'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('team_section')!=0): ?>
              <li><a class="page-scroll" href="#team-section" title="URL"><?php echo getcong_service('section_name_team'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('testimonials_section')!=0): ?>
              <li><a class="page-scroll" href="#testimonial-section" title="URL"><?php echo getcong_service('section_name_testimonials'); ?></a></li>
            <?php endif; ?>

            <?php if(getcong('whychoose_section')!=0): ?>
              <li><a class="page-scroll" href="#why-choose" title="URL"><?php echo getcong_service('section_name_whychoose'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('contact_us_section')!=0): ?>
              <li><a class="page-scroll" href="#contact-section" title="URL"><?php echo getcong_service('section_name_contact'); ?></a></li>
            <?php endif; ?>

          </ul>
        </nav>
      </div>    
      <div class="header-right">
        <ul class="header-extra">
          <li class="d-none d-xl-block">
            <a href="#" class="off-canvas-btn">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </li>
          <li class="d-xl-none">
            <div class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </li>
        </ul>
      </div>  
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="nav-slide-panel mobile-nav-panel">
    <div class="panel-overlay"></div>
    <div class="panel-inner">
      <nav class="mobile-menu">
        <ul class="primary-menu">
          <li><a class="page-scroll" href="#home-section">Home</a></li>
           
            <?php if(getcong('about_section')!=0): ?>
              <li><a class="page-scroll" href="#about-section" title="URL"><?php echo e(getcong_service('section_name_about')); ?></a></li>
            <?php endif; ?>

            <?php if(getcong('service_section')!=0): ?>
              <li><a class="page-scroll" href="#services-section" title="URL"><?php echo e(getcong_service('section_name_service')); ?></a></li>
            <?php endif; ?>          
            
            <?php if(getcong('portfolio_section')!=0): ?>
              <li><a class="page-scroll" href="#work-section" title="URL"><?php echo getcong_service('section_name_portfolio'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('features_section')!=0): ?>
              <li><a class="page-scroll" href="#features-section" title="URL"><?php echo getcong_service('section_name_features'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('team_section')!=0): ?>
              <li><a class="page-scroll" href="#team-section" title="URL"><?php echo getcong_service('section_name_team'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('testimonials_section')!=0): ?>
              <li><a class="page-scroll" href="#testimonial-section" title="URL"><?php echo getcong_service('section_name_testimonials'); ?></a></li>
            <?php endif; ?>

            <?php if(getcong('whychoose_section')!=0): ?>
              <li><a class="page-scroll" href="#why-choose" title="URL"><?php echo getcong_service('section_name_whychoose'); ?></a></li>
            <?php endif; ?>
            
            <?php if(getcong('contact_us_section')!=0): ?>
              <li><a class="page-scroll" href="#contact-section" title="URL"><?php echo getcong_service('section_name_contact'); ?></a></li>
            <?php endif; ?>

        </ul>
      </nav>
      <a href="#" class="panel-close" title="URL">
        <i class="fal fa-times"></i>
      </a>
    </div>
  </div>
</header>
<!--====== End Header ======--> <?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/_particles/header.blade.php ENDPATH**/ ?>