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
    <body style="overflow: hidden; background-color: rgba(59, 175, 218, 0.74)">
    <?php include 'menu.php';?>		
	<script>
		$(document).ready(function() {
		    $(".dropdown-toggle").dropdown();
        });</script>
        <div class="container" style="width: 100%">                
                <div class="modal-dialog" style="position: absolute; width: 250px; margin: 9% auto; left: 2%">
                  <div class="modal-content">
                    <div class="modal-header">                      
                      <h4 class="modal-title">Procurar ERB's</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Longitude">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Latitude">
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">Azimute</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Azimute">
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">Raio de abertura</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Raio">
                      </div>
                    </div>
                    <div class="modal-footer">                      
                      
                      <button type="button" class="btn btn-danger">Rotas de fuga</button>
                      <button style="margin-left: 1%"  type="button" class="btn btn-primary">Inserir ERB</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                     

                 <!-- Button trigger modal -->
                   
                 
                 <div style="position: absolute; right: 2%; margin-top: 1%">
                 
                 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                      Salvar Busca
                    </button>
                 </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    
                        
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Salvar Busca</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nome</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                            </div>
                            <label>Salvar imagem como:</label>
                            <select class="form-control">

                                <option>JPG</option>                        
                                <option>PNG</option>                                
                            </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
 <iframe width='100%' height='550px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/yanguilherme.f2eeb163/attribution,zoompan,zoomwheel,geocoder.html?access_token=pk.eyJ1IjoieWFuZ3VpbGhlcm1lIiwiYSI6ImZiNDJlN2RmMDFjMWZlZGI4YzliYTQzZWQwOWQxZDZkIn0.hd-jPX6y-lOboeZ52qk-LQ'></iframe>       
        
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
	
	
	
	
	
