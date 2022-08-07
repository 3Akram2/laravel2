

<?php $__env->startSection('title' , 'Home'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('users.store')); ?>" method="POST" class='container'>

<?php echo csrf_field(); ?>

<table>
<!-- <tr>
<td><label>id</label></td>
<td><input type="text" name="id"></td>    
</tr> -->
<tr>
    <td><label>Name</label></td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td><label>E-mail</label>
</td>
    <td><input type="email" name="email"></td>
</tr>
<tr>
    <td>
    <label >email verfication</label>

    </td>
    <td>
    <input type="text">
    </td>
</tr>
<tr>
    <td></td>
    <td><button type="submit" class="btn btn-primary">submit</button></td>
</tr>
</table>






</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\3Akram\Desktop\lab2\resources\views/users/create.blade.php ENDPATH**/ ?>