<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../Libs/    img/favicon.png" type="image/x-icon">


        <link rel="stylesheet" href="../Libs/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Libs/bootflat/css/bootflat.css">
        <link rel="stylesheet" href="../Libs/css/logo-nav.css">
        <link rel="stylesheet" href="../Libs/css/font-awesome.min.css">
        
        <style type="text/css" media="screen">
            #login {
                width:500px; /* Tamanho da Largura da Div */
                height:200px; /* Tamanho da Altura da Div */
                position:absolute; 
                top:25%; 
                margin-top:-100px; /* ou seja ele pega 50% da altura tela e sobe metade do valor da altura no caso 100 */
                left:50%;
                margin-left:-250px;                
            }

            .btn{
                float: right;
            }
        </style>
    </head>
<body >

<div class="container" id="login">
    <div class="panel panel-danger">
      	<div class="panel-heading" style="text-align: center" >
         	<img style="max-width: 15%" src="../Libs/img/globo.png">
         	<h3>Vzon</h3>
        	<h4>Seja bem vindo!</h4>
        </div>
      <div class="panel-body">
        <label>Usuário</label>
        <input type="text" class="form-control" name="idUsuario" required>
        <label>Senha</label>
        <input type="password" class="form-control" name="senha" required>
        <br>
        <a href="inicio.php"><button type="subimit" class="btn btn-default col-xs-6">Entrar</button></a>
        <a href="esqueciMinhaSenha.php"><button type="subimit" class="btn btn-default col-xs-6">Esqueci minha senha</button></a>
      </div>
    </div>
</div>
    </body>
</html>

<?php
    include 'inferior.php';
?>
	
	
	
	
