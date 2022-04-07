<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Centro Advogados</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="imgs/sistema/ca.png" rel="shortcut icon" />
        <link rel="stylesheet" href="css/index.css" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(url('home')); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fas fa-user-clock'></i>&nbsp;&nbsp;<?php echo e(Auth::user()->name); ?>

                        </a>

                    <?php else: ?>

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(route('login')); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fas fa-sign-in-alt'></i>&nbsp;&nbsp;Login
                        </a>
                        <!-- <a href="<?php echo e(route('register')); ?>">Registrar</a> -->
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <center><img width='100' src='imgs/sistema/ca.png' alt='Logo Centro Advogados' /></center>
                <div class="">
                    Assessoria Jurídica
                    <br><br><br>
                </div>

                <div class="links">

                    <a href="juridico">SERVIÇOS JURÍDICOS</a>
                    <a href="pericia">QUEM SOMOS</a>
                    <a href="ca_html">LARAVEL</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /var/www/html/desenv/gis/resources/views/welcome.blade.php ENDPATH**/ ?>