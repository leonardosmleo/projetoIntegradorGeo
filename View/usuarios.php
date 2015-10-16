<?php
  include 'menu.php';
    include '../Model/Usuario.php';
    $usuarioObj = new Usuario();
    $usuarios = $usuarioObj->listar();
?>

<body>
    <div class="container">
        <label>
            <h1>
                <button type="submit" class="btn btn-primary" onclick="location.href= 'adicionarUsuario.php' ">
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
                            <th style="width: 5%;">Código</th>
                            <th style="width: 10%;">Patente</th>
                            <th style="width: 45%;">Nome</th>
                            <th style="width: 20%;">E-mail</th>
                            <th style="width: 5%;">Ativo</th>
                            <th style="width: 10%;">Opções</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Verifica se há usuários cadastros
                        if(mysql_num_rows($usuarios)>0){
                          for($l=0; $l<mysql_num_rows($usuarios); $l++){
                        ?>
                        <tr role="row" class="odd" align="center">
                            <td><i class="glyphicon glyphicon-user" ></i></td>
                            <td class="sorting_1"><?=$idUsuario = mysql_result($usuarios, $l, 'id');?></td>
                            <td><?=mysql_result($usuarios, $l, 'patente');?></td>
                            <td><?=mysql_result($usuarios, $l, 'nome');?></td>
                            <td><?=mysql_result($usuarios, $l, 'email');?></td>
                            <td><?=(mysql_result($usuarios, $l, 'ativo')) ? "SIM" : "NÃO";?></td>
                            <td nowrap>
                                <button type="button" class="btn btn-primary" onclick="location.href='editarUsuario.php?id=<?=$idUsuario?>'">
                                    <i class="glyphicon glyphicon-pencil"> Editar</i>
                                </button>
                                <button type="button" class="btn btn-primary" onclick="excluirUsuario(<?php echo $idUsuario; ?>);">
                                    <i class="glyphicon glyphicon-trash" > Excluir</i>
                                </button>
                            </td>
                        </tr>
                        <?php 
                          }//Fim do Foreach
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">

function excluirUsuario(idUsuario){
    //codigo de exclusao aqui
    var name = confirm("Deseja realmente excluir este usuário?");
    if(name==true){
      $.ajax({
      url: '../Controller/controllerUsuario.php',
      type: 'POST',
      dataType: 'json',
      data: {idUsuario:idUsuario,
           action:'excluir'},
      success: function(retorno){
        alert(retorno.msg);
      },
      error: function(){
        alert(retorno.msg);
      }
    });
    }
}
  

    function buscarUsuario(idUsuario){

    $.ajax({
      url: 'Controller/controllerUsuario.php',
      type: 'POST',
      dataType: 'json',
      data: {idUsuario:idUsuario,
           action:'buscar'},
      success: function(retorno){
        $('#action').val('alterar');
        $('#idUsuario').val(retorno.idUsuario);
        $('#nomeUsuario').val(retorno.nome);
        $('#cadastroProfessor').modal();
      },
      error: function(){
        alert("Falha ao buscar dados!");
      }
    });
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

  
  
  
