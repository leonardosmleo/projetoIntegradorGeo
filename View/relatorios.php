<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
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
			<div class="col-md-6">
			</div>
			
			
			<div class="col-md-6">
				<div class="form-search search-only" style="width: 98%">
                  <i class="search-icon glyphicon glyphicon-search"></i>
                  <input type="text" class="form-control search-query">
                </div>		
			</div>
		</div>		
		
				
				
        <div class="row" style="margin-top: 1%">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>                           
                            <th>Imprimir</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Busca 1</th>
                            <td style="width: 15%">10/10/2010</td>                            
                            <td style="width: 10%">
                                <a href="relatoriosPrint.php"> <button type="button" class="btn btn-primary" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    </button>
                                </a>
                                
                            
                            </td>
                        </tr> 
                        <tr>
                            <th scope="row">Busca 2</th>
                            <td style="width: 15%">10/10/2010</td>                            
                            <td style="width: 10%">
                                <a href="relatoriosPrint.php"> <button type="button" class="btn btn-primary" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    </button>
                                </a>
                                
                            
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Busca 3</th>
                            <td style="width: 15%">10/10/2010</td>                            
                            <td style="width: 10%">
                                <a href="relatoriosPrint.php"> <button type="button" class="btn btn-primary" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    </button>
                                </a>
                                
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
	
            
            
            
         <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Remover usuário</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Deseja excluir esse usuário?</h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Excluir</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
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
	
	
	
	
	
