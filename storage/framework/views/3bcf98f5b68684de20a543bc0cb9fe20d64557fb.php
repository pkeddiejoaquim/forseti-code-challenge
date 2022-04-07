<!doctype html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Centro Advogados')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('imgs/sistema/ca.png')); ?>" rel="shortcut icon" />
<!--    <link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" type="text/css" rel="stylesheet">
-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />
    <script src="https://kit.fontawesome.com/683d3262aa.js"></script>
    <script type="text/javascript"> (function () {
            var css = document.createElement('link');
            css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })(); </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('javascript:history.back()')); ?>">
                    <div class="logo_container"><img width='73px;' src="../imgs/sistema/ca-branco.png" id="ca"  />				
                    <?php echo e(__('Centro Advogados')); ?><!--<?php echo e(config('app.name', 'Centro Advogados')); ?>-->
                    </div>
                </a>

                <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-clock"></i>&nbsp;&nbsp;<?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i>&nbsp;<?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>   
</body>
</html>       
<!-- Script Modal
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script><!-- DataTables JavaScript Procura tabela iDisplayLength:8 -->
<!--<script src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script><!-- Page-Level Demo Scripts - Tables - Use for reference -->	

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf-8">
 jQuery(document).ready(function() {
    jQuery('#caModal').css('display','block'); 
    
    $("#tabela").dataTable(
        {
            "order"         : [0, "asc"],
            "language"      : {
                "lengthMenu"    : "Mostra _MENU_ Registros por pagina",
                "zeroRecords"   : "Nenhum Registro Fundado",
                "info"          : "Pagina _PAGE_ de _PAGES_",
                "infoEmpty"     : "Sem Registro avaliado",
                "infoFiltered"  : "(Filtro de _MAX_ total registros)"
            }
	}
    ); 	

});
</script>

<main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>
 
<?php /**PATH E:\xampp\htdocs\desenv\gis\resources\views/layouts/app1.blade.php ENDPATH**/ ?>