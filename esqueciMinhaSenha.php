<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
         <title>Esquece minha senha - VZON</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="bootflat/css/bootflat.css">
        <link rel="stylesheet" href="css/logo-nav.css">        
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

            .btn-success{
                float: right;
            }

            .btn-danger{
                float: left;
            }
        </style>
    </head>
<body>

<div class="container" id="login">
    <div class="panel panel-danger">
      <div class="panel-heading" style="text-align: center">
          <img style="max-width: 15%" src="img/globo.png">
          <h3>Vzon</h3>
        <h4>Esqueceu a senha?</h4></div>
      <div class="panel-body">
        <label>E-mail</label>
        <input type="text" class="form-control" name="email">
        <br>
        <a href="login.php"><button type="button" class="btn btn-default col-xs-6" >Voltar</button>
        <a href="inicio.php"><button type="subimit" class="btn btn-default col-xs-6">Enviar</button>
      </div>
    </div>
</div>
        
        <!-- SCRIPTS -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
          <!-- Bootflat's JS files.-->
        <script src="bootflat/js/icheck.min.js"></script>
        <script src="bootflat/js/jquery.fs.selecter.min.js"></script>
        <script src="bootflat/js/jquery.fs.stepper.min.js"></script>

    </body>
</html>
