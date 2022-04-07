<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="imgs/ca.png" rel="shortcut icon" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url(mix('site/css/tabela.css')) }}" type="text/css">
        <link rel="stylesheet" href="{{ url(mix('site/css/app.css')) }}" type="text/css">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <title>Construcao-Modal em Bootstrap</title>

    </head>
    <section class="container impapp">
        <div style='padding-top:25px'>
            <a href="javascript:history.back()">
                <button  type="button" class="close" data-dismiss="modal">&times;</button>
            </a>
        </div>
        <!-- Botão que irá abrir o modal -->
        <div style='padding-top:40px'>
            <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#caModal">Abrir Modal</button>
        </div>

        <div style='padding-top:30px'>
            <a href="javascript:alert('Construindo!!!')"><center><img src='../imgs/sistema/trabalhando.gif'></center></a>
            <font face="arial" size="5" color="#ccc" >
                <br><center><tex> em Desenvolvimento !</tex></center>
            </font>

            <!-- Modal -->
            <div id="caModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Conteúdo do modal-->
                <div class="modal-content">

                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Título do modal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Corpo do modal -->
                <div class="modal-body">
                    <p>Conteúdo no corpo do modal</p>
                    <p>Aqui você pode inserir todo o conteúdo necessário.</p>
                </div>

                <!-- Rodapé do modal-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Alterações</button>
                </div>

                </div>
            </div>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>

    </section>
</html>
