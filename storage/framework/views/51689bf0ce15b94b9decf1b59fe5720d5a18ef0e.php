

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">The Etihad Stadium</h1>
    <p>
        The Etihad Stadium, home of Manchester City Football Club, is one of the most iconic stadiums in the world. Located in the heart of Manchester, it offers state-of-the-art facilities and an incredible atmosphere for fans and players alike.
    </p>
    <h2>Stadium Tours</h2>
    <p>
        Join us for an unforgettable tour of the Etihad Stadium. Explore the behind-the-scenes areas, including the players' tunnel, the dressing rooms, and the press conference room.
    </p>
    <h2>Upcoming Events</h2>
    <p>
        The Etihad Stadium hosts a variety of events throughout the year, from football matches to concerts and community events. Check our events calendar for more information.
    </p>
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/tour1.png')); ?>" class="img-fluid" alt="Stadium Moment 1">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/tour2.png')); ?>" class="img-fluid" alt="Stadium Moment 2">
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(asset('images/tour3.png')); ?>" class="img-fluid" alt="Stadium Moment 3">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\projectLaravel\resources\views/club/stadium.blade.php ENDPATH**/ ?>