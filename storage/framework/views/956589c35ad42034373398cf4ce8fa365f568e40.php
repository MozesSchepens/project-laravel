

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Shopping Cart</h1>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <?php if(count($cart) > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(asset($item['image'])); ?>" alt="<?php echo e($item['name']); ?>" style="width: 100px;"></td>
                            <td><?php echo e($item['name']); ?></td>
                            <td>$<?php echo e($item['price']); ?></td>
                            <td><?php echo e($item['quantity']); ?></td>
                            <td>$<?php echo e(number_format($item['price'] * $item['quantity'], 2)); ?></td>
                            <td>
                                <form action="<?php echo e(route('cart.remove', $item['id'])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <form action="<?php echo e(route('cart.pay')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn-pay">Pay</button>
        </form>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
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
    .table img {
        width: 100px;
    }
    .btn-pay {
        background-color: green;
        color: white;
        border-radius: 2px;
        padding: 10px;
        border: none;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/cart/index.blade.php ENDPATH**/ ?>