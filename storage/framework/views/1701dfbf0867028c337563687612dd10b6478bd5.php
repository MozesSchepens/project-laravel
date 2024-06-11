

<?php $__env->startSection('content'); ?>
<style>
    h1{
    color: #001838;
  }
  strong, h5{
    color: navy;
  }
  p{
    color: #001838;
  }
  h5:hover{
    color: blue;
  }
</style>
<div class="container">
    <h1>Commonly Asked Questions</h1>
    <hr>
    <ul>
        <li>
            <strong>How many seats are there in the Etihad Stadium?</strong> 
            <p>The Etihad Stadium has a capacity of approximately 55,000, making it the 6th-largest football stadium in England.</p>
        </li>
        <li>
            <strong>How many Premier League titles does Manchester City have?</strong> 
           <p>Manchester City has won 10 Premier League/First Division titles. Additionally, 
            City has won 7 FA Cups, 8 EFL Cups, and 6 FA Community Shields. Internationally, 
            City has secured several other trophies: 1 UEFA Champions League, 1 Club World Cup, 1 European Cup Winners' Cup, and 1 UEFA Super Cup.
        </p>
        </li>
        <li>
            <strong>What is the price of tickets?</strong> 
            <p>Ticket prices for Manchester City matches vary depending on the competition, the opponent, and the seating category. 
                For the most up-to-date information on ticket prices, please visit the official Manchester City website or contact the 
                ticket office directly</p>
        </li>
        <li>
            <strong>Who is the current manager of Manchester City?</strong> 
            <p>As of now, the current manager of Manchester City is Pep Guardiola.</p>
        </li>
        <li>
            <strong>Where can I buy official Manchester City merchandise?</strong> 
            <p>Official Manchester City merchandise can be purchased from the official online store or at the City 
                Store located at the Etihad Stadium.</p>
        </li>
        <li>
            <strong>What are the stadium tour options available?</strong> 
            <p>Manchester City offers several stadium tour options, including the standard stadium tour, VIP tours, and Legends tours. 
                or more details and booking information, visit the official Manchester City website.</p>
        </li>
        <li>
            <strong>How can I become a Manchester City member?</strong>
            <p>You can become a Manchester City member by signing up on the official Manchester City website. Membership offers various benefits,
                including priority ticket access, exclusive content, and discounts on merchandise.</p>
        </li>
        <li>
            <strong>What is the club's policy on accessibility for disabled fans?</strong>
            <p>Manchester City is committed to providing an inclusive and accessible experience for all fans. The club offers various services and 
                facilities for disabled supporters, including accessible seating, dedicated stewards, and audio commentary for visually impaired 
                fans. For more information, please visit the accessibility section on the official Manchester City website.</p>
        </li>
    </ul>
    
    <a class="nav-link" href="<?php echo e(url('/contact')); ?>"><h5>Any other questions? Feel free to contact us anytime by clicking here.</h5></a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\projectLaravel\resources\views/faq.blade.php ENDPATH**/ ?>