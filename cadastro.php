<!DOCTYPE html>
<!--
Projeto integrador - sistema de geolocaliza��o de celulares
-->
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
        <?php include 'menu.php'; ?>

        <form>
            <div class="row">
                <div class="col-md-3">           

                </div>
                <div class="col-md-3">
                    <label for="patente" > Patente:</label>
                    <select class="form-control">

                        <option>Selecione sua patente</option>
                        <option>Soldado</option>
                        <option>Delegado</option>
                        <option>Capitão</option>
                        <option>Tenente</option>
                    </select>
                    <span class="help-block">Selecione sua patente.</span>
                </div>
                <div class="col-md-3">
                    <label for="distintivo" >Nº Distintivo:</label>
                    <input type="text" class=" form-control" id="N� Distintivo " placeholder="Nº Distintivo :"/>
                    <span class="help-block">Digite o número do seu Distintivo.</span>
                </div>
                <div class="col-md-3">

                </div>
            </div>    


            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                    <label for="nome">Nome :</label>
                    <input type="text" class="form-control" id="Nome " placeholder="Nome"/>
                    <span class="help-block">Digite seu nome.</span>
                </div>

                <div class=" col-md-3">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" id="Sobrenome " placeholder="Sobrenome"/>
                    <span class="help-block">Digite seu Sobrenome.</span>
                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>                 

            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                    <!-- CEP -->
                    <label for="CEP">CEP:</label>
                    <input type="text" class="form-control" id="CEP" placeholder="00000-000"/>
                    <span class="help-block">Digite o seu CEP.</span>
                </div>

                <div class=" col-md-3">
                    <label for="Bairro">Bairro: </label>
                    <input type="text" class=" form-control" id="Bairro" placeholder="Bairro"/>
                    <span class="help-block">Digite o seu Bairro.</span>
                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>    

            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                    <label for="Endereco">Endereço:</label>
                    <input type="text" class="form-control" id="Endereco" placeholder="Endereço"/>
                    <span class="help-block">Digite o seu endereço.</span>
                </div>

                <div class=" col-md-1">
                    <label for="Numero">Número: </label>
                    <input type="text" class=" form-control" id="numero" placeholder="Número"/>
                    <span class="help-block">Digite o seu número.</span> 
                </div>

                <div class=" col-md-2">
                     <label for="UF" > UF:</label>
                    <select class="form-control">
                        <option>AC - Acre</option>
                        <option>AL - Alagoas</option>
                        <option>AP - Amapá</option>
                        <option>AM - Amazonas</option>
                        <option>BA - Bahia</option>
                        <option>CE - Ceará</option>
                        <option>DF - Distrito Federal</option>
                        <option>ES - Espírito Santo</option>
                        <option>GO - Goiás</option>
                        <option>MA - Maranhão</option>
                        <option>MT - Mato Grosso</option>
                        <option>MS - Mato Grosso do Sul</option>
                        <option>MG - Minas Gerais</option>
                        <option>PA - Pará</option>
                        <option>PB - Paraíba</option>
                        <option>PR - Paraná</option>
                        <option>PE - Pernambuco</option>
                        <option>PI - Piauí</option>
                        <option>RJ - Rio de Janeiro</option>
                        <option>RN - Rio Grande do Norte</option>
                        <option>RS - Rio Grande do Sul</option>
                        <option>RO - Rondônia</option>
                        <option>RR - Roraima</option>
                        <option>SC - Santa Catarina</option>
                        <option>SP - São Paulo</option>
                        <option>SE - Sergipe</option>
                        <option>TO - Tocantins</option>
                    </select>
                    <span class="help-block">Complemento do endereço.</span>
                </div>
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>                

            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>


                <div class="form-group col-md-3">
                    <label for="Numero">Complemento: </label>
                    <input type="text" class=" form-control" id="complemento" placeholder="Complemento"/>
                    <span class="help-block">Complemento do endereço.</span>
                </div>


                <div class="col-md-3">
                   <label for="Cidade">Cidade: </label>
                    <input type="text" class=" form-control" id="Cidade" placeholder="Cidade"/>
                    <span class="help-block">Digite sua cidade.</span>
                </div>
            </div>


            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                     
                </div>

                <div class=" col-md-3">

                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>    
            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                     <label for="Telefone">Telefone:</label>
                    <input type="text" class="form-control" id="Telefone" placeholder="(00) 0000-0000"/>
                    <span class="help-block">Digite o seu Telefone.</span>
                </div>

                <div class=" col-md-3">
                       <label for="celular">Celular: </label>
                    <input type="text" class=" form-control" id="celular" placeholder="Celular"/>
                    <span class="help-block">Digite o seu celular.</span>
                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>    
            
            <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                      <!-- Email-->
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" id="Email" placeholder="email@xxxx.com"/>
                    <span class="help-block">Digite o seu Email.</span>
                </div>

                <div class=" col-md-3">
                     <label for="confirmacaoEmail">Confirme seu email:</label>
                     <input type="text" class="form-control" id="ConfirmacaoEmail" placeholder="email@xxxx.com"/>
                     <span class="help-block">Redigite seu email.</span>
                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>
            
               <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">
                    <p>* A senha será encaminhada no email registrado.</p>
                </div>

                <div class=" col-md-3">

                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>  
            
            
               <div class="row">
                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>

                <div class=" col-md-3">

                </div>

                <div class=" col-md-3">

                </div>

                <div class=" col-md-3">
                    <!-- Em branco -->
                </div>
            </div>  


        </div>

        <!--    ###########################################  -->





        <hr />

        <div class="row">
            <div class="col-md-12 col-md-offset-7 ">
                <button type="submit" class="btn btn-primary ">Salvar</button>
                <a href="template.html" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>



    <!-- SCRIPTS -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootflat's JS files.-->
    <script src="bootflat/js/icheck.min.js"></script>
    <script src="bootflat/js/jquery.fs.selecter.min.js"></script>
    <script src="bootflat/js/jquery.fs.stepper.min.js"></script>

</body>
</html>





