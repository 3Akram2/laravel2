

<?php $__env->startSection('title' , 'Home'); ?>

<?php $__env->startSection('content'); ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
    <tr>
      <th scope="row"><?php echo e($user['id']); ?></th>
      <td><?php echo e($user['name']); ?></td>
      <td><?php echo e($user['email']); ?></td>
      <td><button  class="btn btn-primary"><a href="<?php echo e(route('users.edit',['id'=>$user['id']])); ?>" style="color:black; text-decoration: none;">Edit</a></button>
      <button  class="btn btn-danger"><a href="<?php echo e(route('users.destroy',['id'=>$user['id']])); ?>" style="color:black; text-decoration: none;">Delete</a></button>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3Akram\Desktop\lab2\resources\views/users/index.blade.php ENDPATH**/ ?>