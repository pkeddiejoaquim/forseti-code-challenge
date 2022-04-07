<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url(mix('site/css/app.css')) }}" type="text/css">
        <link rel="stylesheet" href="{{ url(mix('site/css/tabela.css')) }}" type="text/css">
    </head>

      @section('content')

        <div>
            <section class="container impapp">
                <div style='padding-top:20px;'>
                    <img width='73px;' src="../imgs/sistema/forseti.png" id="ca"/>
                    <a href="javascript:history.back()">
                        <button  type="button" class="close" data-dismiss="modal">&times;</button>
                    </a>
                </div>
                <div>
                    <h3>{{ $titulo }}</h3>

                    <table id="tabela" class="table table-striped table-bordered">
                        <tr>
                            <th>descrição</th>
                            <th>link</th>
                        </tr>

                        @forelse($textos as $texto)
                        <tr>
                            <td> {{ $texto->descricao }} </td>
                            <td> {{ $texto->nm_arquivo }} </td>
                        </tr>
                        @empty
                            <p>Registro não encintrado...! </p>
                        @endforelse

                    </table>

                </div>
                <!-- Botão que irá abrir o modal -->
                <div style='padding-top:40px'>
                <a href="listatextos/mensagem">
                    <!--<button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="#caModal">Carrega Textos de Mensagens</button>-->
                    <button type="button" class="btn btn-success btn-lg mt-2 ml-2" data-toggle="modal" data-target="">Carrega Textos de Mensagens</button>
                </a>
                </div>
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </section>
        </div>

        <!-- Modal -->
        <div id="caModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Conteúdo do modal-->
            <div class="modal-content">

              <!-- Cabeçalho do modal -->
              <div class="modal-header">
                <h5 class="modal-title">Mensagem</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Corpo do modal -->
              <div class="modal-body">
                <p>Carregamento de Textos de  Menssagens do Endereço</p>
                <p>"https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias"</p>

              </div>

              <!-- Rodapé do modal
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <a href="construcao"><button type="button" class="btn btn-primary">Gerar Arquivo PDF</button></a>
              </div>
              -->
            </div>
          </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <!--<script src="{{ asset('site/slim.min.js') }}" type="text/css" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
        <script src="{{ url(mix('site/js/script.js')) }}"></script>
    <!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

        <script>
            $(document).ready( function () {
                $('#tabela').DataTable({
                processing: true,
                serverSide: true,
                "ajax"    : "{{url('listagem')}}",
                "columns" : [
                    {  "data" : "titulo"  },
                ]
                });
            });
        </script>
</html>

@stop

@yield('content')
