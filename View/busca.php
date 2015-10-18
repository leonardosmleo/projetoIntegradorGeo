<?php
include 'menu.php';
?>


<script src="http://maps.googleapis.com/maps/api/js"></script>

<style type="text/css">
  #map{
    background-color: #ffaaff;
    width:  100%;
	height: 85%;
    position: absolute;
  }

  .controllerMap{
    background-color: #cacaca;
    z-index: 4;
    margin-top: 1%;
    margin-left: 1%;
  }

  #botaoController{
    margin-left: 3%;
    padding-top: 1%;
    margin-bottom: -4000px;
  }
</style>
</head>


<body>
<!--
<form name="myForm" action="" method="post">
    Latitude: <input type="text" id="lat" name="lat" value="-23.4388435" /> 
    Longitude: <input type="text" id="lng" name="lng" value="-51.9169781" /> 
    <input type="button" id="submitBtn" value="Adicionar" class="btn" /> 
    <div id="googleMap" style="width: 100%;height:85%;position: absolute"></div> 
</form>
-->
<div id="googleMap" style="width: 100%;height:85%;position: absolute"></div> 


<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="position: absolute; width: 250px; margin: 1% auto; left: 1%">
 <i class="fa fa-map-marker"></i> Procurar ERB's
</button>
<div class="collapse in" id="collapseExample">
  <div class="well">
   <div class="modal-dialog" style="position: absolute; width: 450px; margin: 3% auto; left: 1%">
                  <div class="modal-content">
				  <form name="myForm" action="" method="post">
                    <div class="modal-header">                      
                      
                    </div>
                    <div class="modal-body">
					
						<div class="row">
								<div class="col-md-6">
								  
									<label for="exampleInputEmail1">Longitude</label>
									<input class="form-control" placeholder="Longitude" type="text" id="lng" name="lng" value="-51.9169781" > <!-- -->
								  
							  </div>
							  <div class="col-md-6">
							   
									<label for="exampleInputEmail1">Latitude</label>
									<input class="form-control" placeholder="Latitude" type="text" id="lat" name="lat" value="-23.4388435"> <!--  -->
								  
								 </div>
						  </div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputEmail1">Azimute</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Azimute">
							</div>
							<div class="col-md-6">
								<label for="exampleInputEmail1">Raio (m)</label>
								<input type="text" maxlength="10" class="form-control" id="rad" name="rad" value="1000">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputEmail1">Nome da ERB</label>
								<input type="text" class="form-control" id="nome" placeholder="Nome da ERB" required>
							</div>							
						</div>		
                        
                         
                    </div>
                    <div class="modal-footer">                   
                      
                      <button type="button" class="btn btn-default" onclick="deleteMarkers()"> <i class="fa fa-trash"></i> Limpar ERB's</button>
                      <button style="margin-left: 1%; float: right"  type="button" class="btn btn-success"  id="submitBtn" value="Adicionar"><i class="fa fa-plus"></i> Inserir ERB</button>
                    </div>
					</form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
  </div>
</div>


<div class="modal-dialog" style="position: absolute; width: 380px; margin: 28% auto; right: 5%">
    <div class="modal-content" style="background-color: rgba(255, 255, 255, 0.38)">    
      
      <div class="modal-footer">
					<a href="../View/relatoriosPrint.php"><button type="button" class="btn btn-primary"><i class="fa fa-file-text"></i> Relatórios</button></a>
					
					<button type="button" class="btn btn-danger"><i class="fa fa-road"></i> Rotas de fuga</button>
					  
                      <button style="margin-left: 8%; float: right; width: 20%"  type="button" class="btn btn-success"  id="submitBtn" value="Salvar"><i class="fa fa-floppy-o fa-lg"></i></button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->


<script>

var map;
var markers = new Array();
//var rad_tam = parseFloat(document.getElementById("rad").value);

function initialize() { 
	nome = "Default";
	
	var lat=document.getElementById('lat').value;
	var lng=document.getElementById('lng').value;
	
	var myCenter = new google.maps.LatLng(lat, lng);
	
    var mapProp = { 
        center: myCenter, 
        zoom: 13, 
		mapTypeControl: false,
        streetViewControl: false,
        panControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    };
    map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

	createMarker(lat, lng);
}

function createMarker(lat, lng) {
	var myCenter = new google.maps.LatLng(lat, lng);
	
	var image = '../Libs/img/antena.png';
	var marker = new google.maps.Marker({ 
		position:myCenter, 
		animation:google.maps.Animation.DROP,
		icon: image
	});
	
    marker.setMap(map);
	markers.push(marker);
	
	
	var circle = new google.maps.Circle({
            map: map,
            clickable: false,
            // metres
            radius: 1000,
            fillColor: '#4fc1e9',
            fillOpacity: .6,
            strokeColor: '#313131',
            strokeOpacity: .4, 
            strokeWeight: .8
        });
	  
	circle.bindTo('center', marker, 'position');
	 
	var nome = document.getElementById("nome").value;
	var infowindow = new google.maps.InfoWindow({
		content: nome
	});
	  
	  marker.addListener('click', function() {
		infowindow.open(map, marker);
	  });
}
	  




function deleteMarkers() {
  clearMarkers();
  markers = [];
}

function update() {
    lat=document.getElementById('lat').value;
    lng=document.getElementById('lng').value;
	
	createMarker(lat, lng);
    return false;
}
document.getElementById('submitBtn').addEventListener('click', update);

google.maps.event.addDomListener(window, 'load', initialize);</script>		

<?php
include 'inferior.php';
?>    