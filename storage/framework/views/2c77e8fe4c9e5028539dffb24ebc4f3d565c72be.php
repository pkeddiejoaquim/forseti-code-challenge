

<?php $__env->startSection('content'); ?>
<!-- Modal -->
<div id="caModal" class="modal" style="background-color: rgba(0, 0, 0, 0.3); 
                                       opacity: 0.9; 
">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="z-index:1060; top:100px;">
                        <div class="card-header" style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); color: rgb(255, 255, 255);'>
                            <?php echo e(__('Login')); ?>

                            <a href="javascript:history.back()"><img src='imgs/sistema/remove1.png' alt='Fecha Janela' class="top-right links" align="right"/></a>    
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('login')); ?>">

                                <?php echo csrf_field(); ?>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Endereço E-Mail')); ?></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Senha')); ?></label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                            <label class="form-check-label" for="remember">
                                                <?php echo e(__('Lembrar')); ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Login')); ?>

                                        </button>

                                        <?php if(Route::has('password.request')): ?>
                                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__("Esqueceu sua Senha?")); ?>

                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script>
    jQuery(document).ready(function() {
       jQuery('#caModal').css('display','block');
          
    });                      
</script>
<script>
    new Vue({
    el:'#app',
    template: `
                  
    `
    })
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\server-www\htdocs\desenv\gis\resources\views/auth/login.blade.php ENDPATH**/ ?>