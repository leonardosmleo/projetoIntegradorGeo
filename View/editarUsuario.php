<?php 
    include 'menu.php';
?>

<!DOCTYPE html>

    <body>
        <form>
            <div class="row">
                <div class="col-md-3">           

                </div>
                <div class="col-md-3">
                    <label>Patente:</label>
                    <select class="form-control">
                        <option>Soldado</option>                        
                        <option>Delegado</option>
                        <option>Capitão</option>
                        <option>Tenente</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Nº Distintivo:</label>
                    <input type="text" class=" form-control" id="codigoDoUsuario" placeholder="Digite o número do seu distintivo aqui."/>
                </div>
                <div class="col-md-3">

                </div>
            </div>    


            <div class="row">
                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome aqui."/>
                </div>

                <div class="col-md-3">
                    <label>Sobrenome:</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="Digite o seu sobrenome aqui."/>
                </div>

                <div class="col-md-3">
                    
                </div>
            </div>                 

            <div class="row">
                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">
                    <label>Instituição:</label>
                    <input type="text" class="form-control" id="instituicao" placeholder="Digite o nome da instituição aqui. Ex.: GAECO"/>
                </div>

                <div class="col-md-3">
                     <label>UF:</label>
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
                </div>
                <div class="col-md-3">
                    
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-3">
                    <label>Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite o seu e-mail aqui."/>
                </div>
                <div class="col-md-3">
                     <label>Confirme seu email:</label>
                     <input type="email" class="form-control" id="confirmacaoEmail" placeholder="Digite o seu e-mail aqui."/>
                </div>
                <div class="col-md-3">
                    
                </div>           
            </div>  


        </div>
        <!--    ###########################################  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-block" onclick="location.href='usuarios.php'">Cancelar</button>    
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-default btn-block">Salvar</button>    
                </div>
                <div class="com-md-3">
                    
                </div>
            </div>
        </div>

    </form>

</body>

<?php
    include 'inferior.php';
?>





