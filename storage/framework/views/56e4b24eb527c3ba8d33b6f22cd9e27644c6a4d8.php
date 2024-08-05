

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Equipment</h1>
    <p>Top-notch equipment for training and match day.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/pads.png')); ?>" class="card-img-top" alt="Equipment 1">
                <div class="card-body">
                    <h5 class="card-title">Shin pads</h5>
                    <p class="card-text">$20</p>
                </div>
                <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Home Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="images/jersey1.jpg">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/bag.png')); ?>" class="card-img-top" alt="Equipment 2">
                <div class="card-body">
                    <h5 class="card-title">Sports bag</h5>
                    <p class="card-text">$45</p>
                </div>
                <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Home Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="images/jersey1.jpg">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/ball.png')); ?>" class="card-img-top" alt="Equipment 3">
                <div class="card-body">
                    <h5 class="card-title">Soccer Ball</h5>
                    <p class="card-text">$35</p>
                </div>
                <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Home Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="images/jersey1.jpg">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
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
    .card-img-top {
        height: 300px;
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
    .btn-primary.custom-btn {
        background-color: #003566;
        border-color: #003566;
    }
    .btn-primary.custom-btn:hover {
        background-color: #00509e;
        border-color: #00509e;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/shop/equipment.blade.php ENDPATH**/ ?>