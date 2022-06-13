<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
        
        
        <a href="<?php echo e(route('users.welcome')); ?>">Welcome Page</a>
        <a href="<?php echo e(route('users.login')); ?>">Login</a>
        <a href="<?php echo e(route('users.reg')); ?>">Registration</a>

        

        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\demo_project_laravel\APWT_SUM22_Assign\resources\views/layouts/logoutlay.blade.php ENDPATH**/ ?>