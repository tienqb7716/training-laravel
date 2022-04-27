
<?php $__env->startSection('content'); ?>
<div class="container">
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Student ID</th>
          </tr>
        </thead>
        <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($u->id); ?></th>
            <td><?php echo e($u->name); ?></td>
            <td><?php echo e($u->email); ?></td>
            <td><?php echo e($u->phone); ?></td>
            <td><?php echo e($u->mssv); ?></td>
          </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BE2\training-laravel\resources\views/auth/manageruser.blade.php ENDPATH**/ ?>