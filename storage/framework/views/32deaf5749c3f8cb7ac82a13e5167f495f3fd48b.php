<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(url(mix('site/css/app.css'))); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url(mix('site/css/menu.css'))); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url(mix('site/css/tabela.css'))); ?>" type="text/css">
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\desenv\computatrum.ca\resources\views/layouts/menu.blade.php ENDPATH**/ ?>