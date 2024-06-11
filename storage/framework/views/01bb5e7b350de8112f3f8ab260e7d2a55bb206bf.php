

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Club History</h1>
    <p>
        Welcome to the history of Manchester City Football Club. This page is dedicated to showcasing the rich and storied past of our beloved club. From our humble beginnings to our triumphs on the global stage, every moment is cherished by our fans.
    </p>
    <h2>Early Years</h2>
    <p>
        Manchester City was founded in 1880 as St. Mark's (West Gorton). The club became Ardwick Association Football Club in 1887 and Manchester City in 1894. The team has had its ups and downs but has always been an integral part of the community.
    </p>
    <h2>Key Achievements</h2>
    <ul>
        <li>First Division/Premier League titles: [List of years]</li>
        <li>FA Cup victories: [List of years]</li>
        <li>League Cup victories: [List of years]</li>
        <li>European successes: [List of years]</li>
    </ul>
    <h2>Legends of the Club</h2>
    <p>
        Over the years, Manchester City has been home to many legendary players and managers. [List of legendary players and managers with brief descriptions of their contributions].
    </p>
    <h2>Recent Success</h2>
    <p>
        In recent years, under the management of Pep Guardiola, Manchester City has achieved unprecedented success, winning multiple Premier League titles and other major trophies.
    </p>
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/first.png')); ?>" class="img-fluid" alt="Historic Moment 1">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/ageurooo.png')); ?>" class="img-fluid" alt="Historic Moment 2">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/vinnie.png')); ?>" class="img-fluid" alt="Historic Moment 3">
        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\projectLaravel\resources\views/club/history.blade.php ENDPATH**/ ?>