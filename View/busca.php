<?php
include 'menu.php';
?>	
<style type="text/css">
  .map{
    background-color: #ffaaff;
    width:  100%;
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

<script type="text/javascript">
  var statusJanela= 1;

  redimencionaMapa();
  function redimencionaMapa(){
    $(document).ready(function() {
      $('.map').css('height',$(window).height()*0.87);
      $('.map').css('width',$(window).width());
    });
  }
  $(window).resize(function() {
   redimencionaMapa();
 });


  function esconderCampos(){

    if(statusJanela == 1){
      $('.camposCoorndenadas').hide();
      $('#botaoController').removeClass('glyphicon-chevron-up');
      $('#botaoController').addClass('glyphicon-chevron-down');
      //janela escondida
      statusJanela = 0;
    }else if(statusJanela == 0){
      $('.camposCoorndenadas').show();
      $('#botaoController').removeClass('glyphicon-chevron-down');
      $('#botaoController').addClass('glyphicon-chevron-up');
      //janela escondida
      statusJanela = 1;
    }
    
  }

</script>

<div class="map" >

</div>

<div class="col-md-3 controllerMap thumbnail">
  <div class="" id="dados">
    <div class="row">
      <div class="col-md-11">
        <big><i id="botaoController" class="glyphicon glyphicon-chevron-up" onclick="esconderCampos()"></i><i> Coordenadas</i></big> 
       
      </div>
      <div class="camposCoorndenadas">
      <div class="col-md-12">
       <hr>
       </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="latitudeForm">Latitude</label>
            <input type="email" class="form-control" id="latitudeForm" name="latitudeForm" placeholder="Latitude">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="longitudeForm">Longitude</label>
            <input type="email" class="form-control" id="longitudeForm" name="longitudeForm" placeholder="Longitude">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="azimuteForm">Azimute</label>
            <input type="email" class="form-control" id="azimuteForm" name="azimuteForm" placeholder="Azimute">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="raioForm">Raio</label>
            <input type="number" maxlength="3" class="form-control" id="raioForm" name="raioForm" placeholder="Raio">
          </div>
        </div>
        <div class="col-md-6">
          <div class="" id="action">
            <a onclick="adicionarTags()" class="btn">Adicionar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-12">
      <div id="infoErb" class="infoErb">


      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function adicionarTags(){
    $('.infoErb').append("<div class='alert alert-warning alert-dismissible' role='alert'><button onclick='excluirTag();' type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Longitude:</strong> "+$('#latitudeForm').val()+"  <strong>Longitude:</strong> "+$('#longitudeForm').val()+"<br><strong>Azimute:</strong> "+$('#azimuteForm').val()+"  <strong>Raio:</strong> "+$('#raioForm').val()+"</div>");
    $('#latitudeForm').val("");
    $('#longitudeForm').val("");
    $('#azimuteForm').val("");
    $('#raioForm').val("");

    //inserir códigos a partir daqui. Porque se deletar o que esta escrito a cima, você deletará os itens que for adicionando
 }

 function excluirTag(){
  // colocar aqui a programação da exclusão do mapa.
  //Essa função pode ser totalmente alterada
  alert('Deseja realmente excluir esta ERB?');
 }

</script>

<?php
include 'inferior.php';
?>    