

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Profile</h1>
    <div class="card">
        <div class="card-header">
            Edit Profile Details
        </div>
        <div class="card-body">
            <form method="POST" action="<?php echo e(route('profile.update', $profile->user_id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?php echo e($profile->username); ?>" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo e($profile->birthday); ?>">
                </div>
                <div class="form-group">
                    <label for="about_me">About Me</label>
                    <textarea id="about_me" name="about_me" class="form-control"><?php echo e($profile->about_me); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" id="avatar" name="avatar" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/profile/edit.blade.php ENDPATH**/ ?>