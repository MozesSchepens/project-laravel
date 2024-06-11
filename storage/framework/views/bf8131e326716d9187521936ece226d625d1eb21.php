

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Global Partners</h1>
    <p>
        Manchester City Football Club is proud to be associated with some of the leading brands in the world. Our partners play a crucial role in the success and growth of our club, helping us reach new heights on and off the field.
    </p>
    <h2>Official Partners</h2>
    <ul>
        <li>Etihad Airways</li>
        <li>Nissan</li>
        <li>Puma</li>
    </ul>
    <h2>Community Partners</h2>
    <ul>
        <li>CITC (City in the Community)</li>
        <li>Local Charities</li>
    </ul>
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/puma.png')); ?>" class="img-fluid" alt="Partners Moment 1">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/Sony-logo.png')); ?>" class="img-fluid" alt="Partners Moment 2">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/Etihad-Airways-Logo.png')); ?>" class="img-fluid" alt="Partners Moment 3">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<style>
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .img-fluid {
        margin-bottom: 15px;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\projectLaravel\resources\views/club/partners.blade.php ENDPATH**/ ?>