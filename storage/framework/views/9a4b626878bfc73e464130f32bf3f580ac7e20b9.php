<?php $__env->startSection('content'); ?>

<!doctype html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />-->

    </head>

    <body>
    <!-- Modal -->
    <div id="caModal" class="modal" style="background-color: rgba(0, 0, 0, 0.3); opacity: 0.9;">
        <div class="container">
            <div class="card" style="z-index:1060; top:10px;">
                <div class="card-header" style='min-height: 40px !important; background-image: linear-gradient(to top, #0075be, #005a9c); color: rgb(255, 255, 255);'>
                    <img width='20px;' src="../imgs/sistema/forseti.png" id="ca"/>
                    <?php echo e(__('Editor de Texto')); ?>

                    <a href="javascript:history.back()"><button  type="button" class="close" data-dismiss="modal">&times;</button></a>
                </div>
                <div class="card-body form-group">
                    <?php echo csrf_field(); ?>
                    <form method="POST" action="<?php echo e(url('/editor/mostratextos')); ?>">
                        <div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="col-lg-12">

                                <label style='font-size: 10px;'>Nome da Parte</label>
                                <input type="text" id="nome" name="nome" class="form-control col-lg-6"/>

                                <label style='font-size: 10px;'>Doc. da Parte</label>
                                <input type="text" id="numbercpfcnpj name="numbercpfcnpj" class="form-control col-lg-4"/>
                            </div>
                            <BR>
                            <div>
                                <textarea id="descricao" name="descricao" rows="5" cols="40" class="form-control tinymce-editor">
                                    <?php //echo htmlspecialchars($descricao); ?>
                                </textarea>
                            </div>

                            <enter><button class="btn btn-primary" type="submit">Textos</button></center>
                        </div>
                    </form>


                    <div style='font-size: 9px;'>
                        <center>Computatrum.Ius - Centro Advogados <?php echo e(formatDateAndTime( date('Y-m-d H:i:s') )); ?></center>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </body>

    <script src="<?php echo e(asset('js/tinymce/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tinymce/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/ce21bj2jgsw6fvku8c6ygc3e1tu17kh274lrewx9ik04vp48/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            language: 'pt_BR',
            height  : 270,
            menubar : true,
            resize  : true,

            plugins : [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],

            toolbar : 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            theme_advanced_blockformats : "p,div,h1,h2,h3,h4,h5,h6,blockquote,dt,dd,code,samp",
            tinycomments_author: 'Edmilson.Joaquim'
        });
    </script>

    <!-- Script Modal -->
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script>
        jQuery(document).ready(function() {

            jQuery('#caModal').css('display','block');
            //alert('JQuery Versão :'+jQuery.fn.jquery);
        });
    </script>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\desenv\forseti-code-challenge\resources\views/auth/editor.blade.php ENDPATH**/ ?>