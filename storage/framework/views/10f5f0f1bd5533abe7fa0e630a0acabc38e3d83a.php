<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(getcong('site_name')); ?> Admin</title>
	
	<link href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>" rel="shortcut icon" type="image/x-icon" />

	<link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/css/style.css')); ?>">
	
	<script src="<?php echo e(URL::asset('admin_assets/js/jquery.js')); ?>"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
  <div class="container-fluid">
      
<div id="main">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login">

            <div class="logo" href="#" align="">
              
            <img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="logo">
            </div>
            <div class="panel panel-default panel-shadow">
               <!-- <div class="avatar">
                    <img src="images/guy.jpg" alt="guy" class="img-circle img-responsive"/>
                </div>-->
                <?php echo Form::open(array('url' => 'admin/password/reset','class'=>'','id'=>'passwordform','role'=>'form')); ?>

                    <div class="panel-body">
                    <input type="hidden" name="token" value="<?php echo e($token); ?>">	
                    	<div class="message">
												<!--<?php echo Html::ul($errors->all(), array('class'=>'alert alert-danger errors')); ?>-->
							                    	<?php if(count($errors) > 0): ?>
											    <div class="alert alert-danger">
											    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
											        <ul>
											            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											                <li><?php echo e($error); ?></li>
											            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											        </ul>
											    </div>
											<?php endif; ?>
							                    	
							                    </div>
                    	
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                        </div>
                       
                         
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"> Reset Password <i class="md md-lock-open"></i></button>
                    </div>
                <?php echo Form::close(); ?> 
            </div>
           
        </div>
    </div>
</div>
</div>


  </div>
	
	 <!-- Plugins -->
  <script src="<?php echo e(URL::asset('admin_assets/js/plugins.js')); ?>"></script>

  <!-- App Scripts -->
  <script src="<?php echo e(URL::asset('admin_assets/js/scripts.js')); ?>"></script>
	
</body>
 
</html><?php /**PATH E:\xampp\htdocs\envato\mobility_cms\resources\views/admin/auth/reset.blade.php ENDPATH**/ ?>