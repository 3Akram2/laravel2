

<?php $__env->startSection('title' , 'Home'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(Route('users.update' , ['id' => $user['id'] ])); ?>">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <table>
 <tr>
<td><label>id</label></td>
<td><input type="text" name="id" value="<?php echo e($user['id']); ?>"></td>    
</tr> 
<tr>
    <td><label>Name</label></td>
    <td><input type="text" name="name" value="<?php echo e($user['name']); ?>"></td>
</tr>
<tr>
    <td><label>E-mail</label>
</td>
    <td><input type="email" name="email" value="<?php echo e($user['email']); ?>"></td>
</tr>
<tr>
    <td></td>
    <td><button type="submit" class="btn btn-primary">submit</button></td>
</tr>
</table>






</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3Akram\Desktop\lab2\resources\views/users/edit.blade.php ENDPATH**/ ?>