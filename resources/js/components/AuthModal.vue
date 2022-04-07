<template>
   <link  href="<?php echo asset('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
   <script src="<?php echo asset('js/bootstrap.min.js');?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <div class="container">    
        <div id="app"></div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  

</template>

<script>

    new Vue({
        el:'#app',
        template: '
        <!-- Modal -->
            <div id="caModal" class="modal show fade" role="dialog" style='display:block' v-if="visible">
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
              <div class="modal-backdrop fade show" v-if="visible"></div>  

            </div>
        '
})
</script>

