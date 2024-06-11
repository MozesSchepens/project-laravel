

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Jerseys</h1>
    <p>Browse our collection of official Manchester City jerseys for the season.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/kits.png')); ?>" class="card-img-top" alt="Jersey 1">
                <div class="card-body">
                    <h5 class="card-title">Home Jersey</h5>
                    <p class="card-text">$79.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Home Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/kits.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/away.png')); ?>" class="card-img-top" alt="Jersey 2">
                <div class="card-body">
                    <h5 class="card-title">Away Jersey</h5>
                    <p class="card-text">$79.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Away Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/away.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/third.png')); ?>" class="card-img-top" alt="Third jersey">
                <div class="card-body">
                    <h5 class="card-title">Third Jersey</h5>
                    <p class="card-text">$79.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Third jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/third.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
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
    .btn-primary {
        background-color: #003566;
        border: none;
    }
    .btn-primary:hover {
        background-color: #00509e;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\project-laravel\resources\views/shop/jerseys.blade.php ENDPATH**/ ?>