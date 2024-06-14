

<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        overflow-x: hidden;
    }

    .contact-container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .contact-header {
        text-align: center;
        color: black;
        margin-bottom: 20px;
    }

    .contact-form {
        width: 100%;
    }

    .contact-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .contact-form button {
        width: 100%;
        padding: 10px;
        background-color: navy;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: darkblue;
    }

    .contact-form button:active {
        background-color: navy;
    }
</style>

<div class="contact-container">
    <h1 class="contact-header">Contact Us</h1>
    <form method="POST" action="<?php echo e(route('contact.submit')); ?>" class="contact-form">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\OneDrive\Bureaublad\project-laravel\resources\views/contact.blade.php ENDPATH**/ ?>