

<?php $__env->startSection('content'); ?>
<style>
    .header-image {
        width: 100%;
        height: auto;
        display: block;
        margin: 0;
        padding: 0;
    }
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .card-img-top {
        height: 350px;
        object-fit: cover;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #003566;
    }
    .card-text {
        font-size: 1rem;
        color: #000;
    }
    .btn-primary {
        background-color: #003566;
        border: none;
    }
    .btn-primary:hover {
        background-color: #00509e;
    }
    h1 {
        color: lightblue;
        font-size: 72px;
    }
    h2, h3 {
        color: navy;
    }
    p {
        color: #001838;
    }
</style>

<img src="<?php echo e(asset('images/header.png')); ?>" class="header-image" alt="Manchester City">

<div class="container">
    <h1 class="display-4 mt-4">Welcome to Manchester City Official Fansite</h1>
    <p class="lead">All the latest news, updates, and information about Manchester City FC.</p>

    <div class="latest-news mt-5">
        <h2 class="section-title">Latest News</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/city.jpg')); ?>" class="card-img-top" alt="News 1">
                    <div class="card-body">
                        <h5 class="card-title">City wins their fourth consecutive Premier League title</h5>
                        <p class="card-text">Manchester City have won the Premier League title for the 2023-2024 season...</p>
                        <a href="<?php echo e(route('news.show', ['news' => 1])); ?>" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/pots.png')); ?>" class="card-img-top" alt="News 2">
                    <div class="card-body">
                        <h5 class="card-title">Phil Foden named Premier League Player of the Season</h5>
                        <p class="card-text">Phil Foden has been named the Premier League Player of the Season...</p>
                        <a href="<?php echo e(route('news.show', ['news' => 2])); ?>" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/etihad.png')); ?>" class="card-img-top" alt="News 3">
                    <div class="card-body">
                        <h5 class="card-title">Manchester City announces new stadium expansion</h5>
                        <p class="card-text">Manchester City has announced plans to expand the Etihad Stadium...</p>
                        <a href="<?php echo e(route('news.show', ['news' => 3])); ?>" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section mt-5">
        <h2 class="section-title">Our Team</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/pep.png')); ?>" class="card-img-top" alt="Pep Guardiola">
                    <div class="card-body">
                        <h5 class="card-title">Pep Guardiola</h5>
                        <p class="card-text">Head Coach</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/kdb.png')); ?>" class="card-img-top" alt="Kevin De Bruyne">
                    <div class="card-body">
                        <h5 class="card-title">Kevin De Bruyne</h5>
                        <p class="card-text">Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo e(asset('images/eddy.png')); ?>" class="card-img-top" alt="Ederson">
                    <div class="card-body">
                        <h5 class="card-title">Ederson</h5>
                        <p class="card-text">Goalkeeper</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo e(url('/players')); ?>" class="btn btn-primary">Meet the Team</a>
    </div>

    <div class="shop-section mt-5 text-center">
        <h2 class="section-title">Official Shop</h2>
        <p>Get the latest Manchester City jerseys, accessories, and equipment.</p>
        <a href="<?php echo e(url('/shop')); ?>" class="btn btn-primary">Visit the Shop</a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/home.blade.php ENDPATH**/ ?>