

<?php $__env->startSection('content'); ?>
<style>
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
    .content img {
        padding: 5px;
        display: block;
        margin: 0 auto;
        width: 50%;
    }
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .news-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    .news-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        width: 48%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .news-item img {
        height: 350px;
        object-fit: cover;
    }
    .news-info {
        padding: 15px;
    }
    .news-type {
        display: block;
        color: #888;
        font-size: 0.8rem;
        margin-bottom: 5px;
    }
    .news-title {
        font-size: 1.1rem;
        color: #000;
        margin-bottom: 10px;
    }
    .news-date {
        display: block;
        color: #555;
        font-size: 0.8rem;
        margin-top: 5px;
    }
    .btn-primary {
        background-color: #003566;
        border-color: #003566;
        text-transform: uppercase;
    }
</style>

<div class="container">
    <h1>News</h1>
    <div class="content-container">
        <div class="content">
            <h2>City wins their fourth consecutive Premier League title</h2>
            <img src="<?php echo e(asset('images/City.jpg')); ?>" alt="Manchester City Premier League Champions" class="img-fluid">
            <span class="news-date">Published on: June 5, 2024</span>
            <p>Manchester City has made history by becoming the first team in England to win the Premier League title four times in a row. This remarkable achievement was sealed with a convincing 3-1 victory over West Ham United, cementing their dominance in English football.</p>
            <h3>A Fantastic Second Half of the Season</h3>
            <p>The foundation for this historic season was laid in a breathtaking second half of the campaign. After a somewhat slow start, the City players found their rhythm and delivered a series of impressive performances. Led by their experienced manager, they managed to steadily increase the pressure on their rivals week after week.</p>
            <h3>The Decisive Match</h3>
            <p>The decisive match against West Ham United perfectly exemplified City’s strength and determination. The game started with an early lead for City thanks to a goal from their star player. Although West Ham managed to equalize, City remained cool and resolute. Two brilliant goals in the second half secured the final 3-1 victory, clinching the title.</p>
            <h3>Guardiola</h3>
            <p>Guardiola’s role should not be underestimated. His tactical acumen and ability to get the best out of his players were significant contributors to this achievement. His leadership guided the team through challenging periods and inspired them to reach new heights.</p>
            <h3>An Unforgettable Season</h3>
            <p>This season will go down in the history books as one of the most memorable in the Premier League. Manchester City has not only won four consecutive titles but has also shown what is possible with teamwork, determination, and exceptional skill.</p>
            <p>City fans can be proud of their team, which has once again set the standard in English football. As they celebrate their fourth title, they already look forward to the next challenges and the possibility of continuing their incredible streak.</p>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="section-title">More News</h1>
    <div class="news-grid">
        <div class="news-item">
            <img src="<?php echo e(asset('images/pots.png')); ?>" alt="Phil Foden Award" class="img-fluid">
            <span class="news-date">Published on: June 4, 2024</span>
            <div class="news-info">
                <span class="news-type">Announcement</span>
                <h2 class="news-title">Phil Foden named Premier League Player of the Season</h2>
                <p>Phil Foden has been named the Premier League Player of the Season...</p>
                <a href="<?php echo e(url('/news/pots')); ?>" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <div class="news-item">
            <img src="<?php echo e(asset('images/etihad.png')); ?>" alt="Stadium Expansion" class="img-fluid">
            <span class="news-date">Published on: June 3, 2024</span>
            <div class="news-info">
                <span class="news-type">Announcement</span>
                <h2 class="news-title">Manchester City announces new stadium expansion</h2>
                <p>Manchester City has announced plans to expand the Etihad Stadium...</p>
                <a href="<?php echo e(url('/news/stadium')); ?>" class="btn btn-primary">Read more</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\project-laravel\resources\views/news.blade.php ENDPATH**/ ?>