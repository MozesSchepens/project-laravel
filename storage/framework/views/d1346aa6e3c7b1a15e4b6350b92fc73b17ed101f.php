

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Shop</h1>
    <p>Explore our wide range of products and merchandise. Find the perfect gear to show your support for Manchester City!</p>
    <hr>
    <h2 class="sub-section-title">Categories</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/kits.png')); ?>" class="card-img-top" alt="Jerseys">
                <div class="card-body">
                    <h5 class="card-title">Jerseys</h5>
                    <p class="card-text">Official Manchester City jerseys for the season.</p>
                    <a href="<?php echo e(url('/shop/jerseys')); ?>" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/scarf.png')); ?>" class="card-img-top" alt="Accessories">
                <div class="card-body">
                    <h5 class="card-title">Accessories</h5>
                    <p class="card-text">Find the perfect accessories to complement your gear.</p>
                    <a href="<?php echo e(url('/shop/accessories')); ?>" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/ball.png')); ?>" class="card-img-top" alt="Equipment">
                <div class="card-body">
                    <h5 class="card-title">Equipment</h5>
                    <p class="card-text">Top-notch equipment for training and match day.</p>
                    <a href="<?php echo e(url('/shop/equipment')); ?>" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h2 class="sub-section-title">Featured Products</h2>
    <?php if(Auth::check() && Auth::user()->is_admin): ?>
    <a href="<?php echo e(route('shop.create')); ?>" class="btn btn-primary mb-3">Add Product</a>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/gloves.png')); ?>" class="card-img-top" alt="Gloves">
                <div class="card-body">
                    <h5 class="card-title">Gloves</h5>
                    <p class="card-text">$4.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Gloves">
                        <input type="hidden" name="price" value="4.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/gloves.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                    <a href="<?php echo e(route('shop.edit', 1)); ?>" class="btn btn-warning mt-2">Edit</a>
                    <form action="<?php echo e(route('shop.destroy', 1)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/bag.png')); ?>" class="card-img-top" alt="Sports bag">
                <div class="card-body">
                    <h5 class="card-title">Sports bag</h5>
                    <p class="card-text">$45.00</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Sports bag">
                        <input type="hidden" name="price" value="45.00">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/sports_bag.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                    <a href="<?php echo e(route('shop.edit', 2)); ?>" class="btn btn-warning mt-2">Edit</a>
                    <form action="<?php echo e(route('shop.destroy', 2)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/third.png')); ?>" class="card-img-top" alt="Third Jersey">
                <div class="card-body">
                    <h5 class="card-title">Third Jersey</h5>
                    <p class="card-text">$79.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Third Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/third_jersey.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                    <a href="<?php echo e(route('shop.edit', 3)); ?>" class="btn btn-warning mt-2">Edit</a>
                    <form action="<?php echo e(route('shop.destroy', 3)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="<?php echo e(asset('images/sheet.png')); ?>" class="card-img-top" alt="Sheets">
                <div class="card-body">
                    <h5 class="card-title">Sheets</h5>
                    <p class="card-text">$29.99</p>
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="name" value="Sheets">
                        <input type="hidden" name="price" value="29.99">
                        <input type="hidden" name="image" value="<?php echo e(asset('images/sheet.png')); ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                    <a href="<?php echo e(route('shop.edit', 4)); ?>" class="btn btn-warning mt-2">Edit</a>
                    <form action="<?php echo e(route('shop.destroy', 4)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    <?php endif; ?>
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
    .sub-section-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 15px;
        text-transform: uppercase;
    }
    .card-img-top {
        height: 200px;
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/shop/index.blade.php ENDPATH**/ ?>