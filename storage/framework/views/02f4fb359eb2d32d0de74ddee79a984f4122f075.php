<html>
 <head>
 <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
 <style>
        body {
  padding-bottom: 20px;
}

.navbar {
  margin-bottom: 20px;
}
a{
    color: black;
text-decoration: none;
}

    </style>
 <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>


 <?php $__env->startSection('navbar'); ?>
 <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
 <?php echo $__env->yieldSection(); ?>
 
 <div class="container">
 <?php echo $__env->yieldContent('content'); ?>
 </div>
 </body>
</html>
<?php /**PATH C:\Users\3Akram\Desktop\lab2\resources\views/layouts/app.blade.php ENDPATH**/ ?>