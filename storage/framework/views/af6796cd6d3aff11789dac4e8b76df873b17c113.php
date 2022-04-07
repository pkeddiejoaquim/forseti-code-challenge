    <?php $__env->startSection('content'); ?>

        <section class="container impapp">
            <div style='padding-top:20px'>
                <a href="javascript:history.back()"><button  type="button" class="close" data-dismiss="modal">&times;</button></a>
                <img width='73px;' src="../imgs/sistema/ca-branco.png" id="ca"/>
            </div>


                    <div class='box color1'>
                        <div class='img_menu'><img src= '../imgs/juridico/jur3.png' width='50' height='50'></div>
                        <fb1>Juridicos</fb1>
                            <div class='parametros'>
                                <a href='#'><fb1><center>Procuração Ad-Judicia</center></fb1></a>
                                <a href='#'><fb1><center>Petições</center></fb1></a>
                            </div>
                        </div>
                    </div>

                    <div class='box color2'>
                        <div class='img_menu'><img src= '../imgs/juridico/per1.png' width='50' height='50'></div>
                        <fb1>Pericia</fb1>
                            <div class='parametros'>
                                <a href='#'><fb1><center>Laudos</center></fb1></a>
                            </div>
                        </div>
                    </div>

                    <div class='box color3'>
                        <div class='img_menu'><img src= '../imgs/sistema/texto.png' width='50' height='50'></div>
                        <fb1>Módulo Texto</fb1>
                            <div class='parametros'>
                                <a href='editortexto'><fb1><center>Editor</center></fb1></a>

                            </div>
                        </div>
                    </div>

                    <div class='box color4'>
                        <div class='img_menu'><img src= '../imgs/sistema/trabalhando.gif' width='50' height='50'></div>
                        <fb1> . </fb1>
                            <div class='parametros'>
                                <a href='construcao'><fb1><center>Teste</center></fb1></a>
                            </div>
                        </div>
                    </div>


        </section>

    <?php $__env->startPush('scripts'); ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
--><!--
        <script src="<?php echo e(url(mix('site/js/script.js'))); ?>"></script>
-->
    <?php $__env->stopPush(); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desenv\computatrum.ca\resources\views/juridico/menu_jur.blade.php ENDPATH**/ ?>