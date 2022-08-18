<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel 8 User Roles and Permissions Tutorial')); ?></title>

    <!-- Scripts -->

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

            <div class="container">

                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

                

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

    

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto"></ul>



                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->

                        <?php if(auth()->guard()->guest()): ?>

                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>

                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>

                        <?php else: ?>
                            <li><a class="nav-link" href="<?php echo e(url('home')); ?>">HOME</a></li>
                             <?php if(Auth::user()->hasRole('Admin')): ?> <li><a class="nav-link" href="<?php echo e(route('users.index')); ?>">Manage Users</a></li><?php endif; ?>

                           <?php if(auth::user()->can('role-list')): ?> <li><a class="nav-link" href="<?php echo e(route('roles.index')); ?>">Manage Role</a></li><?php endif; ?>

                           <?php if(auth::user()->can('task-list')): ?>  <li><a class="nav-link" href="<?php echo e(route('task.index')); ?>">Manage Tasks</a></li><?php endif; ?>

                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>

                                </a>



                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"

                                       onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">

                                        <?php echo e(__('Logout')); ?>


                                    </a>



                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

                                        <?php echo csrf_field(); ?>

                                    </form>

                                </div>

                            </li>

                        <?php endif; ?>

                    </ul>

                </div>

            </div>

        </nav>



        <main class="py-4">

            <div class="container">

            <?php echo $__env->yieldContent('content'); ?>

            </div>

        </main>

    </div>


</body>

</html>
<?php /**PATH E:\sample projects\salford\resources\views/layouts/app.blade.php ENDPATH**/ ?>