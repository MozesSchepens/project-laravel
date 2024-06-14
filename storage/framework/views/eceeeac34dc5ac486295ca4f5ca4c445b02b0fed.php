<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #A6C7E4;
            padding: 10px 0;
        }
        .navbar-custom .navbar-brand img {
            height: 50px;
        }
        .navbar-custom .nav-link {
            color: #003566;
            font-weight: bold;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="https://upload.wikimedia.org/wikipedia/en/e/eb/Manchester_City_FC_badge.svg" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/news')); ?>">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/shop')); ?>">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/players')); ?>">PLAYERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/club')); ?>">CLUB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/faq')); ?>">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/contact')); ?>">CONTACT</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo e(url('/about')); ?>">ABOUT</a>
                </li>

            </ul>
           
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/cart')); ?>">cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EN</a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/profile')); ?>"><?php echo e(Auth::user()->name); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\project-laravel\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>