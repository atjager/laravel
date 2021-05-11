<nav class="navbar navbar-expand navbar-light" style="background-color: #B12F38;">       
  <div class="navbar-nav w-100">
    <a class="navbar-brand text-color" href="/">Sun City Darts</a> 
    <a class="nav-item nav-link" href="/comps">Competition entry</a>
    <?php if(auth()->guard()->check()): ?>
      <a class="nav-item nav-link" href="/dashboard">Entries</a>
      <a class="nav-item nav-link" href="/crud">Photo Gallery</a>
    <?php endif; ?>
    <div class="ml-auto">
      <?php if(auth()->guard()->check()): ?>                
        <!-- The Logout method must be POST (and not GET) for security reasons!!!! -->
        <!-- If you want to use Logout with a Submit button, then use a simple Form.  -->
        <!-- If you want to use Logout with a link, then this is the right way: -->
        <a class="nav-item nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo e(csrf_field()); ?>

        </form> 
      <?php else: ?>
        <a class="nav-item nav-link" href="<?php echo e(route('login')); ?>">Log in/Sign up</a>
      <?php endif; ?>
    </div>        
  </div>
</nav><?php /**PATH C:\02-Portable-Laravel-8.11.2-UI-Auth\Portable-Laravel-8.11.2-UI-Auth\resources\views/partials/nav.blade.php ENDPATH**/ ?>