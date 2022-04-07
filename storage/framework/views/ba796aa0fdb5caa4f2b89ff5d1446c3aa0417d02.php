<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('site/css/corporativo.css')); ?>" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

      <?php $__env->startSection('content'); ?>

        <div>
            <section class="container impapp">
                <img width='73px;' src="../imgs/sistema/ca-branco.png" id="ca"/>
                <a href="javascript:history.back()"><button  type="button" class="close" data-dismiss="modal">&times;</button></a>

                <div class="superior1">
                    <fonte class="cor3">superior1 DIV</fonte>
                </div>

                <div class="inferior1">
                    <fonte class="cor3">inferior1 DIV</fonte>
                </div>

            </section>
        </div>

        <!-- Modal -->
        <div id="caModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Conteúdo do modal-->
            <div class="modal-content">

              <!-- Cabeçalho do modal -->
              <div class="modal-header">
                <h5 class="modal-title">Juridico</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Corpo do modal -->
              <div class="modal-body">
                <p><?php echo '$nome'; ?></p>
                <div><p>CPF:<?php echo '$cpf'; ?> - RG:<?php echo '$cpf'; ?></p></div>
                <p>Endereço:<?php echo '$end'; ?> , <?php echo '$num'; ?></p>
                <p>Município:<?php echo '$mun'; ?> Estado:<?php echo '$est'; ?></p>
                <p>CEP:<?php echo '$cep'; ?> e-Mail:<?php echo '$ema'; ?></p>
                <p>Nascimento:<?php echo '$nas'; ?> OAB:<?php echo '$oab'; ?></p>
                <p>Fone:<?php echo '$fo1'.' / '; ?><?php echo '$fo2'.' / '; ?><?php echo '$fo3'; ?></p>
                <p>Objetivo:<?php echo '$obj'; ?></p>
                <p><?php echo '$descritivo'; ?></p>

              </div>

              <!-- Rodapé do modal-->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <a href="<?php echo e(url('construcao')); ?>"><button type="button" class="btn btn-primary">Gerar Arquivo PDF</button></a>
              </div>

            </div>
          </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php /**PATH E:\xampp\htdocs\desenv\computatrum\resources\views//juridico/juridico.blade.php ENDPATH**/ ?>