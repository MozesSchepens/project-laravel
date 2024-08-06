

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="section-title">Players</h1>
    <?php if(Auth::check() && Auth::user()->is_admin): ?>
    <a href="<?php echo e(route('players.create')); ?>" class="btn btn-primary mb-3">Add Player</a>
    <?php endif; ?>
    
    <h2 class="position-title">Goalkeepers</h2>
    <div class="player-cards">
        <?php $__currentLoopData = $players->where('position', 'Goalkeeper'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="player-card">
            <div class="player-card-image">
                <img src="<?php echo e(asset('images/' . $player->image)); ?>" alt="<?php echo e($player->name); ?>">
                <div class="player-number"><?php echo e($player->number); ?></div>
            </div>
            <div class="player-card-info">
                <img src="<?php echo e(asset('images/' . $player->nationality . '.png')); ?>" class="flag" alt="<?php echo e($player->nationality); ?>">
                <p class="player-name"><?php echo e($player->name); ?></p>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('players.edit', $player->id)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('players.destroy', $player->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <h2 class="position-title">Defenders</h2>
    <div class="player-cards">
        <?php $__currentLoopData = $players->where('position', 'Defender'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="player-card">
            <div class="player-card-image">
                <img src="<?php echo e(asset('images/' . $player->image)); ?>" alt="<?php echo e($player->name); ?>">
                <div class="player-number"><?php echo e($player->number); ?></div>
            </div>
            <div class="player-card-info">
                <img src="<?php echo e(asset('images/' . $player->nationality . '.png')); ?>" class="flag" alt="<?php echo e($player->nationality); ?>">
                <p class="player-name"><?php echo e($player->name); ?></p>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('players.edit', $player->id)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('players.destroy', $player->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h2 class="position-title">Midfielders</h2>
    <div class="player-cards">
        <?php $__currentLoopData = $players->where('position', 'Midfielder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="player-card">
            <div class="player-card-image">
                <img src="<?php echo e(asset('images/' . $player->image)); ?>" alt="<?php echo e($player->name); ?>">
                <div class="player-number"><?php echo e($player->number); ?></div>
            </div>
            <div class="player-card-info">
                <img src="<?php echo e(asset('images/' . $player->nationality . '.png')); ?>" class="flag" alt="<?php echo e($player->nationality); ?>">
                <p class="player-name"><?php echo e($player->name); ?></p>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('players.edit', $player->id)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('players.destroy', $player->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h2 class="position-title">Attackers</h2>
    <div class="player-cards">
        <?php $__currentLoopData = $players->where('position', 'Attacker'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="player-card">
            <div class="player-card-image">
                <img src="<?php echo e(asset('images/' . $player->image)); ?>" alt="<?php echo e($player->name); ?>">
                <div class="player-number"><?php echo e($player->number); ?></div>
            </div>
            <div class="player-card-info">
                <img src="<?php echo e(asset('images/' . $player->nationality . '.png')); ?>" class="flag" alt="<?php echo e($player->nationality); ?>">
                <p class="player-name"><?php echo e($player->name); ?></p>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('players.edit', $player->id)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('players.destroy', $player->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h2 class="position-title">Manager</h2>
    <div class="manager-cards">
        <div class="manager-card">
            <div class="manager-card-image">
                <img src="<?php echo e(asset('images/pep.png')); ?>" alt="Pep Guardiola">
            </div>
            <div class="player-card-info">
                <img src="<?php echo e(asset('images/spain.png')); ?>" class="flag" alt="Spain">
                <p class="manager-name">Pep Guardiola</p>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('players.edit', $manager->id)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('players.destroy', $manager->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <?php endif; ?>
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
    .position-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #003566;
        margin: 30px 0 10px;
        text-transform: uppercase;
        border-bottom: 2px solid #003566;
        display: inline-block;
    }
    .player-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .player-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 200px;
        text-align: center;
        position: relative;
    }
    .player-card-image {
        position: relative;
    }
    .player-card-image img {
        width: 100%;
        height: auto;
    }
    .player-number {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
    }
    .player-card-info {
        padding: 10px;
    }
    .flag {
        width: 30px;
        height: auto;
        margin-bottom: 10px;
    }
    .player-name {
        font-size: 1rem;
        font-weight: bold;
        color: #003566;
        text-transform: uppercase;
    }
    .manager-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .manager-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 200px;
        text-align: center;
        position: relative;
    }
    .manager-card-image {
        position: relative;
        background-color: lightblue;
    }
    .manager-card-image img {
        width: 100%;
        height: auto;
    }
    .manager-card-info {
        padding: 10px;
    }
    .manager-name {
        font-size: 1rem;
        font-weight: bold;
        color: #003566;
        text-transform: uppercase;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\bw_mozes_schepens_laravel\resources\views/players.blade.php ENDPATH**/ ?>