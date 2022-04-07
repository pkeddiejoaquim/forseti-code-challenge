<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(url(mix('site/css/app.css'))); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url(mix('site/css/quemsomos.css'))); ?>" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

      <?php $__env->startSection('content'); ?>

        <div>
            <section class="container impapp">
                <img width='73px;' src="../imgs/sistema/ca-branco.png" id="ca"/>
                <a href="javascript:history.back()"><button  type="button" class="close" data-dismiss="modal">&times;</button></a>

                <div class="img-responsive">
                    <h1 style='color: rgb(0,0,139); font-size:20px; padding-left: 10px;'>PERICIA FORENSE</h1>
                    <a href="<?php echo e(asset('/site/curriculum/100')); ?>"><img class='image1' src='../imgs/ej/eddie.png' width="150"></a>
                </div>

                <div class="justificar pericia1">
                    <fonte class="cor3">Analista Desenvolvedor Técnico Jurídico</fonte> é um profissional especializado em tecnologia da informação, voltada ao universo jurídico; pessoa que presta assessoria jurídica no âmbito
                    administrativo e jurisdicional, as pessoas físicas, jurídicas (empresas) e órgãos governamentais, nas questões afetas à Lei e ao Direito.
                    O papel da <fonte class="cor1">Pericia Forense Digital</fonte> é essencial na investigação de todos os crimes que acontecem dentro
                    do ambiente digital.
                </div>
                <div class="justificar pericia2">
                    Fraudes, invasões, roubos de dados ou quaisquer tipos de atos ilícitos, de acordo com o
                    estudo do FBI, todas as instituições são alvos de ataques, em momento de incerteza estar preparado com sua segurança
                    é fundamental. Mesmo sendo relativamente nova no Brasil, a <fonte class="cor3">Perícia Forense Digital</fonte> é uma área que se originou
                    juntamente com a história do <fonte class="cor5"> direito e da computação moderna.</fonte>
                </div>
                <div class="justificar pericia3">
                    Com o advento da <a href=""><fonte class="cor2">LGPD,</fonte> <fonte class="cor3">Lei Geral de Proteção de Dados </fonte></a>,  através de
                    seus profissionais, <fonte class="cor4">O CENTRO ADVOGADOS</fonte>, propõe todos esses tópicos e consequentemente a troca
                    de informações e experiências, reune profissionais e expõe de forma <a href="<?php echo e(url('')); ?>" data-toggle="modal" data-target="#caModal"><fonte class="cor1">CURRICULAR</fonte> ,</a>  suas qualificações e habilidades.

                </div>
                <BR><tex><center>Computatrum.Ius - DIREITO ELETRÔNICO</center></tex>
            </section>
            <BR><BR>
        </div>

        <div>
            <section class="container impapp">
                <div class="img-responsive">
                    <h1 style='color: rgb(0,0,139); font-size:20px; padding-left: 10px;'>DIREITO IMOBILIÁRIO</h1>
                    <a href="" data-toggle="modal" data-target="#caModal"><img src="../imgs/jm/jm.png" width="150" float="rigth" margin="0  0 1em 1em;"></a>
                </div>

                <div class="justificar contenc1">
                    <fonte class="cor3">Operador do Direito, Técnico Jurídico</fonte>
                    , o contencioso é um processo que alude a tudo o que possa ser passível de contestação,
                    de disputa ou de conflito de interesses.
                    Neste Sentido a <fonte class="cor4">CENTRO ADVOGADOS</fonte>, atenta ao momento, capacita
                    seus tecnicos e profissionais no sentido unico do direito contencioso ser adequado as necessidades propostas em face a tecnologia,
                    processos digitais, Midias digitais, <fonte class="cor4">direito Administrativo</fonte>, direito Tributário, direito do Trabalho,
                    direito Previdenciário, leis ambientais, <fonte class="cor5"> Lei Geral de Proteção de Dados - LGPD</fonte>,
                </div>
                <div class="justificar contenc2">
                    <fonte class="cor3">direito Imobiliário</fonte>, a primeira <fonte class="cor1">Legislação Brasileira</fonte> sobre a matéria, foi saudada como desdobramento de uma tendência
                    que vem se consolidando globalmente desde que, há mais de quatro décadas, normativas começaram a surgir na Europa e nos Estados Unidos para regular a utilização de <fonte class="cor2">dados pessoais</fonte> por empresas
                    e governos e proporcionar garantias e transparência ao cidadão acerca de sua utilização.
                </div>

            </section>
            <BR><BR>
        </div>

        <!-- Modal -->
        <div id="caModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Conteúdo do modal-->
            <div class="modal-content">

              <!-- Cabeçalho do modal -->
              <div class="modal-header">
                <h5 class="modal-title">Curriculum</h5>
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
<?php /**PATH C:\xampp\htdocs\desenv\computatrum.ca\resources\views/site/quemsomos.blade.php ENDPATH**/ ?>