<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name', 'PrettusKlan Cia')); ?></title>

        <link href="<?php echo e(url('imgs/sistema/forseti.png')); ?>" rel="shortcut icon" />
        <link href="<?php echo e(url(mix('site/css/app.css'))); ?>" type="text/css" rel="stylesheet" >

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(url('home')); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fas fa-user-clock'></i><?php echo e(Auth::user()->name); ?>

                        </a>

                    <?php else: ?>

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(route('login')); ?>" role="button" data-toggle="dropdraw" aria-haspopup="true">
                            <i class='fas fa-user-lock'></i>Login
                        </a>
                        <!-- <a href="<?php echo e(route('register')); ?>">Registrar</a> -->
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <center><img width='100' src='imgs/sistema/forseti.png' alt='Logo Centro Advogados-Computatrum.Ius' /></center>
                <div class="azuis">
                    Forseti - Soluções
                </div>
                <br><br><br>
                <div class="links">
                    <a href="juridico/menu_jur">SERVIÇOS</a>
                    <a href="juridico/listatextos">NOTICIAS</a>
                </div>
            </div>
        </div>

    </body>
</html>
<?php /**PATH E:\xampp\htdocs\desenv\forseti-code-challenge\resources\views/welcome.blade.php ENDPATH**/ ?>