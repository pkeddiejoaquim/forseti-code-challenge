<?php $__env->startSection('content'); ?>
<head>
    
    <link rel='stylesheet' href="<?php echo e(asset('/css/fontawesome/css/all.css')); ?>"><!-- load all styles -->
    <link rel='stylesheet' href="<?php echo e(asset('/css/app-menu.css')); ?>">
   
</head>
<nav class='navbar'>
    <div class='menu' style="float-left:100px;">
   
        <div id='nav-usuarios' class='nav-link' data-toggle='dropdown'>
            <h2 class='fas fa-users' style='color: #8B8989;'> administração</h2>
            <br><br>
            <h5>
                <a href=''><i class='fas fa-address-card'></i>&nbsp;&nbsp;Usuarios</a>
            </h5>
        </div>
        <div id='usuarios' class='dropdown-menu'>
       
                <div>&nbsp;&nbsp;
                        <a href='construcao'><i class='fas fa-address-book'></i>&nbsp;&nbsp;
                            Lista - Registros Usuarios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                </div>
                <div>&nbsp;&nbsp;
                        <a href='construcao'><i class='far fa-object-group'></i>&nbsp;&nbsp;&nbsp;
                            Lista - Registros Grupos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>   
                </div>
                <div>&nbsp;&nbsp;
                        <a href='register'><i class='fas fa-user-tie'></i>&nbsp;&nbsp;&nbsp;
                            Cadastro Usuário&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>   
                </div>
            
        </div> 
    </div>
</nav>
<nav class='navbar'>
    <div class='menu'>
        <div class='nav-link' data-toggle='dropdown'>
            <h5>                    
                <a href=''><i class='fas fa-sitemap'></i>&nbsp;&nbsp;Sistemas</a>
            </h5>
        </div> 
        <div id='sistemas' class='dropdown-menu'>
       
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href='construcao'><i class='fas fa-balance-scale' fill='block'></i>&nbsp;&nbsp;
                        Módulo 1 - Sistema
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                </div>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href='construcao'><i class='fas fa-warehouse'></i>&nbsp;&nbsp;
                        Módulo 2 - Sistema
                    </a>
                </div>
                       
        </div>    
    </div>
</nav>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\server-www\htdocs\desenv\gis\resources\views/auth/adm.blade.php ENDPATH**/ ?>