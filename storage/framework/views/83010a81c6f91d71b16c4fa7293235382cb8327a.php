<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->

<!-- Set the title content to "Home" -->
<?php $__env->startSection('title', 'Home'); ?>
<!-- Set the "content" section, which will replace "<?php echo $__env->yieldContent('content'); ?>" in the index file we're extending -->
<?php $__env->startSection('content'); ?>
<div class="jumbotron text-light" style="background-image: url('https://suncitydarts.hu/images/unnamed2.png')">
  <div class="container">
    <?php if(Auth::user()): ?> 
      <h1 class="display-4" style="color:black"><strong> Welcome, <?php echo e(Auth::user()->name); ?>!</strong></h1>
      <p class="lead" style="color:white; background-color: rgba(0, 0, 0, 0.5)">Competitions in Szeged <br>The 9Ball and Vegas tournaments will take place every night. Monthly finals for the top 32 players.<br> <a style="color:grey" href="https://suncitydarts.hu">Sun City Darts Club original website</a></p>
      <a href="/dashboard" class="btn btn-success btn-lg my-2">Dashboard</a>
    <?php else: ?>
      <h1 class="display-3"style="color:black">Sun City Darts Club</h1>
      <p class="lead" style="color:white; background-color: rgba(0, 0, 0, 0.5)">Welcome to Sun City Darts Club, besides a lot of useful information, you can also register for tournaments on the site.</p>
      <a href="/login" class="btn btn-success btn-lg my-2">Registration required to enter</a>
    <?php endif; ?>                
  </div>
</div>
<div class="container">

<h1><strong>About us</strong></h1>  <br>
Mint szegedi dartsot szerető közösség, már évek óta aktívan részt vettünk mind a városi, mind az országos bajnokságokban. Bódi Richárd (elnök) és a 9 Ball Club együttműködése által már 2019 év eleje óta heti rendszerességgel kerültek megrendezésre versenyek, bajnokságok. Az idő folyamán sok új barátot megismerhettünk, akik jöttek a versenyeinkre. Fokozatosan kialakulóban volt egy nagyon jó, klubon kívül is összetartó közösség.

Vagyunk szerencsére jó páran, akik fejlődni szeretnénk, esetleg több célunk van a dartscal, mint hetente lejönni dobálgatni és sörözni. Noha ezen tevékenység egyfajta aktív kikapcsolódás, azért csináljuk mert szeretjük, azonban megfogalmazódott bennünk, hogy érdemes lenne egy átfogó keretbe formálni a sporttevékenységünket. 2020 derekán határoztuk el magunkat, hogy a 2021-es évet már egy egyesület formájában szeretnénk kezdeni. Ez meg is valósult és 10 alapítótaggal megalakult a Sun City Darts Club Sportegyesület. Azóta már 30 tagot számlálunk, ami mindannyiunknak egy igazán pozitív visszacsatolás.
<br><br>
<strong>Jáger Attila</strong>  <br>
alelnök
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/home.blade.php ENDPATH**/ ?>