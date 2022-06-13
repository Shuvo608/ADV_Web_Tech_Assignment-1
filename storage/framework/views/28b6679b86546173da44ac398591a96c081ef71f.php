
<?php $__env->startSection('content'); ?>
<br>
<br>
<br>
<form action ="<?php echo e(route('users.login.submit')); ?>" method="post" allign="justified">
<?php echo e(@csrf_field()); ?>


Email: <input type = "text" value = "<?php echo e(old('email')); ?>" name ="email"></br>
<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span><br>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
Password: <input type="password" name="password"></br>

<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span><br>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</br>
<input type="submit" value="Login">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logoutlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo_project_laravel\APWT_SUM22_Assign\resources\views/users/login.blade.php ENDPATH**/ ?>