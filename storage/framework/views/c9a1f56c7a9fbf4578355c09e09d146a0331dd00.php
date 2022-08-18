<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>SALFORD</title>

 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/apple-touch-icon.png')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">

</head>

<body>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-6">

            <a href="mailto:grouponeremovalservices@hotmail.com" style="text-decoration:none;"> <i class="fa fa-envelope phone_footer fontoffooter" style=""></i>
            <span class="rating-color mailfont footermailres">grouponeremovalservices@hotmail.com</span></a>
                            
        </div>
        <div class="col-md-4">
            <a href="tel:07383396748" style="text-decoration:none;"><i class="fa fa-phone phone_footer fontoffooter" style=""></i>
            <span class="rating-color mailfont footermailres">07383396748</span></a>
        </div>
    </div>
</div>	


	
<main class="py-4"style="background-color: #0066cc0a!important;">
            <?php echo $__env->yieldContent('content'); ?>
</main>
    </div>


	
	
<div class="container footer-top">
    <div class="row justify-content-around">
        <div class="col-12 footer-icon-top">
            <span> <i class="fa fa-facebook footer_icon_margin" style="font-size:24px"></i></span>
            <span> <i class='fa fa-linkedin footer_icon_margin' style='font-size:24px'></i></span>
            <span><i class='fa fa-instagram footer_icon_margin' style='font-size:24px'></i></span>
            <span> <i class='fa fa-whatsapp footer_icon_margin' style='font-size:24px'></i></span>
        </div>
        <div class="col-md-6">
            <div><a href="mailto:grouponeremovalservices@hotmail.com" style="text-decoration:none;"> <i class="fa fa-envelope phone_footer fontoffooter" style=""></i>
            <span class="rating-color mailfont footermailres ">grouponeremovalservices@hotmail.com</span></a>
            <a href="tel:07383396748" style="text-decoration:none;"><i class="fa fa-phone phone_footer fontoffooter" style=""></i>
            <span class="rating-color mailfont footermailres ">07383396748</span></a></div>
        </div>
    </div>
 </div>   

 

      <p style="float:right; text-decoration:none;color:black;"><a href="https://jameskahnremovals.com/privacy-policy/" style=" text-decoration:none;color:black;">privacy Policy</a> &nbsp &nbsp <a href="https://jameskahnremovals.com/terms-and-conditions/" style="text-decoration:none;color:black;">Term and conditions</a></p>
      <br>
      <p style="text-align: center;
    background-color: black;
    margin-top: 24px;
    /* padding: 0px; */
    margin-bottom: 0px;color:white;">Copyright @ 2021 - JAMES KAHN Company</p>

       <!-- Scripts -->
   <script src="<?php echo e(asset('/assets/js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?>"></script>
    <!-- ALL PLUGINS -->
	<script src="<?php echo e(asset('/assets/js/jquery.superslides.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/images-loded.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/isotope.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/baguetteBox.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/assets/js/form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/contact-form-script.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/custom.js')); ?>"></script>
    
</body>
</html>
<?php /**PATH E:\sample projects\salford\resources\views/layouts/base.blade.php ENDPATH**/ ?>