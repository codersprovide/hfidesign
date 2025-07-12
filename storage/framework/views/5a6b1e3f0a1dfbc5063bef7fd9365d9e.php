<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("pages.sections.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(getcong('about_section')!=0): ?>
<?php echo $__env->make("pages.sections.about", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('service_section')!=0): ?>
<?php echo $__env->make("pages.sections.services", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('portfolio_section')!=0): ?>
<?php echo $__env->make("pages.sections.portfolio", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('features_section')!=0): ?>
<?php echo $__env->make("pages.sections.features", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('team_section')!=0): ?>
<?php echo $__env->make("pages.sections.team", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('achivement_section')!=0): ?>
<?php echo $__env->make("pages.sections.achivement", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php endif; ?>

<?php if(getcong('testimonials_section')!=0): ?>
<?php echo $__env->make("pages.sections.testimonials", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
 
<?php if(getcong('whychoose_section')!=0): ?>
<?php echo $__env->make("pages.sections.whychoose", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('our_clients_section')!=0): ?>
<?php echo $__env->make("pages.sections.clients", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(getcong('contact_us_section')!=0): ?>
<?php echo $__env->make("pages.sections.contact", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mobility_cms\resources\views/pages/index.blade.php ENDPATH**/ ?>