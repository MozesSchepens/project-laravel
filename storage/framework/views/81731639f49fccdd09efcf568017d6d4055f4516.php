

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Profile</h1>
    <div class="card">
        <div class="card-header">
            Profile Details
        </div>
        <div class="card-body">
            <p><strong>Username:</strong> <?php echo e($profile->username); ?></p>
            <p><strong>Birthday:</strong> <?php echo e($profile->birthday); ?></p>
            <p><strong>About Me:</strong> <?php echo e($profile->about_me); ?></p>
            <?php if($profile->avatar): ?>
                <p><strong>Avatar:</strong></p>
                <img src="<?php echo e(asset('storage/' . $profile->avatar)); ?>" alt="Avatar" style="max-width: 100px;">
            <?php endif; ?>
            <a href="<?php echo e(route('profile.edit', $profile->user_id)); ?>" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/profile/show.blade.php ENDPATH**/ ?>