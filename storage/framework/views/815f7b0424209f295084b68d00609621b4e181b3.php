<head>
    <link rel='stylesheet' href="<?php echo e(asset('/css/fontawesome/css/all.css')); ?>"><!-- load all styles -->
    <link rel='stylesheet' href="<?php echo e(asset('/css/app-menu.css')); ?>">
</head>
<nav class='navbar'>
    <div class='menu'>
        <div class='nav-link' data-toggle='dropdown'>
            <h4>                    
                <a href=''><i class='fas fa-sitemap'></i>&nbsp;&nbsp;Sistemas</a>
            <h4>
        </div> 
        <div id='sistemas' class='dropdown-menu'>
       
                <div><h5>&nbsp;&nbsp;&nbsp;&nbsp;<a href='construcao'><i class='fas fa-balance-scale'></i>&nbsp;&nbsp;
                            Direito Pericial
                         </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     </h5>   
                </div>
                <div><h5>&nbsp;&nbsp;&nbsp;&nbsp;<a href='construcao'><i class='fas fa-warehouse'></i>&nbsp;&nbsp;
                            Direito Imobiliário
                         </a>
                     </h5>
                </div>
                <div><h5>&nbsp;&nbsp;&nbsp;&nbsp;<a href='construcao'><i class='fas fa-gavel'></i>&nbsp;&nbsp;
                            Direito Contencioso
                         </a>
                     </h5>
                </div>
       
        </div>    
    </div>
</nav>
<nav class='navbar'>
    <div class='menu'>
   
        <div id='nav-usuarios' class='nav-link' data-toggle='dropdown'>
            <h4>
                <a href=''><i class='fas fa-address-card'></i>&nbsp;&nbsp;Usuarios</a>
            </h4>
        </div>
        <div id='usuarios' class='dropdown-menu'>
       
                <div><h5>&nbsp;&nbsp;
                        <a href='construcao'><i class='fas fa-users'></i>&nbsp;&nbsp;
                            Registros Usuarios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                     </h5>   
                </div>
                <div><h5>&nbsp;&nbsp;
                        <a href='construcao'><i class='far fa-object-group'></i>&nbsp;&nbsp;&nbsp;
                            Registros Grupos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                     </h5>   
                </div>
        </div> 
    </div>
</nav>
<?php /**PATH /var/www/html/desenv/gis/resources/views/auth/admin.blade.php ENDPATH**/ ?>