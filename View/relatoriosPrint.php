<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="bootflat/css/bootflat.css">
        <link rel="stylesheet" href="css/logo-nav.css">
    </head>
    <body>
	<?php include 'menu.php';?>
        <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid rgba(128, 128, 128, 0.39); border-radius: 5px">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div style="text-align: center; margin: 2%">                       
                        <h4>Imagem de cabeçalho</h4>
                        <input type="file" id="exampleInputFile">                       
                    </div>  
                </div>
                <div class="col-md-3"></div>
                
            </div>
            <div class="col-md-2"></div>            
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid rgba(128, 128, 128, 0.39); border-radius: 5px; text-align: center">
                <h4>Título do relatório</h4>
                <input style="margin-bottom: 2%" type="text" class=" form-control" placeholder="Título"/>
            </div>
            <div class="col-md-2"></div>
        </div>	
        <div class="row" style="margin-top: 2%">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid rgba(128, 128, 128, 0.39); border-radius: 5px; text-align: center">
                <img src="img/relatorio.PNG">
            </div>
            <div class="col-md-2"></div>
        </div>	
        <div class="row" style="margin-top: 2%">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid rgba(128, 128, 128, 0.39); border-radius: 5px; text-align: center">
                <h4>Descrição</h4>
                <textarea style="margin-bottom: 2%" class="form-control" rows="6"></textarea>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align: center; margin-bottom: 8%">
                <button type="button" class="btn btn-success btn-lg">
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Salvar
                  </button>
                <button type="button" onClick="window.print()" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir
                  </button>
            </div>
            <div class="col-md-4"></div>
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
	
	
	
	
	
