<?php $__env->startSection('content'); ?>
			
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-ellipsis-v"></i>&nbsp;<b><?php echo e(__('Menu Administrativo')); ?></b>
                    <a href="javascript:history.back()"><img src='imgs/sistema/remove.png' alt='Fecha Janela' class="top-right links" align="right"/></a>
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php echo $__env->make('auth.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\desenv\gis\resources\views/home.blade.php ENDPATH**/ ?>