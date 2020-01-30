<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">My Account</div>

              <div class="card-body">
                  <?php if(session('status')): ?>
                      <div class="alert alert-success" role="alert">
                          <?php echo e(session('status')); ?>

                      </div>
                  <?php endif; ?>

                  Welcome, <?php echo e(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email); ?>!
                  <br>You currently have X points.
                  <br>Purchase points.
              </div>
          </div>
      </div>
        <div class="col-md-8" style="margin-top:15px">
            <div class="card">
                <div class="card-header" >Daily Options</div>

                <div class="card-body">
                    <?php if(count($items) > 0): ?>
                      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <ul class="list-group">
                        <li class="list-group-item"><?php echo e($items->title); ?></li>
                        <li class="list-group-item"><?php echo e($items->description); ?></li>
                        <li class="list-group-item"><?php echo e($items->price); ?></li>
                      </ul>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    Welcome, <?php echo e(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email); ?>!
                    <br>You currently have X points.
                    <br>Purchase points.
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zwfuser\resources\views/home.blade.php ENDPATH**/ ?>