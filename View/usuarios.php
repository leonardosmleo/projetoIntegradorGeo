<?php
    include 'menu.php';
?>

<body>
    <div class="container">
        <label>
            <h1>
                <button type="submit" class="btn btn-primary" onclick="location.href= 'editarUsuario.php' ">
                    <i class="glyphicon glyphicon-plus"> Adicionar</i>
                </button>
            </h1>
        </label>
        <div class="row">
            <div class="col-sm-12">
                <table id="tabelaDeUsuarios" class="table table-striped table-bordered" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th style="width:  5%;">Status</th>
                            <th style="width: 10%;">Código</th>
                            <th style="width: 10%;">Patente</th>
                            <th style="width: 45%;">Nome</th>
                            <th style="width: 20%;">E-mail</th>
                            <th style="width: 10%;">Opções</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd" align="center">
                            <td><i class="glyphicon glyphicon-user" ></i></td>
                            <td class="sorting_1">00001</td>
                            <td>Capitão</td>
                            <td>José da Silva</td>
                            <td>jose.silva@email.com</td>
                            <td nowrap>
                                <button type="button" class="btn btn-primary" onclick="location.href='editarUsuario.php'">
                                    <i class="glyphicon glyphicon-pencil"> Editar</i>
                                </button>
                                <button type="button" class="btn btn-primary" onclick="excluirUsuario();">
                                    <i class="glyphicon glyphicon-trash" > Excluir</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">

function excluirUsuario(){
    //codigo de exclusao aqui
    alert("Deseja realmente excluir este usuáario?");
}

    $(document).ready( function () {
        $('#tabelaDeUsuarios').DataTable(
            {
               "aaSorting": [[ 2, "asc" ]],
               "oLanguage": { 
                   "sLengthMenu": "Mostrar _MENU_ itens por página", 
                   "sZeroRecords": "<i>Não há itens neste modo de exibição.</i>",
                   "sInfo": "_TOTAL_ itens encontrados (exibindo de _START_ a _END_)", 
                   "sInfoEmpty": "Não há itens para o filtro selecionado.", 
                   "sInfoFiltered": " - total de _MAX_ registros", 
                   "sSearch": "<b>Filtrar: </b>",
                   "oPaginate": { 
                       "sFirst": "Início", 
                       "sPrevious": "&lt;", 
                       "sNext": "&gt;", 
                       "sLast": "Último" 
                  }
              },
              "iDisplayLength" : 10,
            }
        );
    });
</script>

<?php
    include 'inferior.php';
?>

	
	
	
