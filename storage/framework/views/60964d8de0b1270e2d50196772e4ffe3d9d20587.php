<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(__('Pagina Modal Centro Advogados')); ?></title>

    <link href="<?php echo asset('imgs/sistema/ca.png');?>" rel="shortcut icon" />
    <link href="<?php echo asset('css/app.css');?>" type="text/css" rel="stylesheet">
 
    

</head>

<body>

        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <div class="logo_container"><img width='73px;' src="imgs/sistema/ca-branco.png" id="ca"  />				
                    <?php echo e(__('Centro Advogados')); ?><!--<?php echo e(config('app.name', 'Centro Advogados')); ?>-->
                    </div>
                </a>
            </div>
        </nav>
 
<script src="<?php echo asset('js/jquery.js');?>" type="text/javascript"></script>
<script src="<?php echo asset('js/bootstrap.min.js');?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
<script>
    //$(window).load(function() {
    //   alert('teste de Mensagem');        
    //});
    export default{
         data() {
             return visiblle:false
         }
    }
</script>    
    
<main class="py-4">
   <?php echo $__env->yieldContent('content'); ?>
</main>
 
</body>
</html>
<?php /**PATH E:\server-www\htdocs\desenv\gis\resources\views/layouts/modal.blade.php ENDPATH**/ ?>