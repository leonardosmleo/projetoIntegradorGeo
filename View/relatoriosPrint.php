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

        <style type="text/css">
            table tr td:last-child {
    white-space: nowrap;
    width: 1px;
    text-align:right;
}

/* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}

        </style>
    </head>
    <body>
	<?php include 'menu.php';?>
        <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid rgba(128, 128, 128, 0.39); border-radius: 5px">
                <!-- <div class="col-md-3"></div> -->
                <div class="col-md-12">                    
                    <h4>1. Imagem de cabeçalho</h4>
                    <div class="input-group image-preview">
                        <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                        <!-- don't give a name === doesn't send on POST/GET --> 
                        <span class="input-group-btn"> 
                        <!-- image-preview-clear button -->
                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                        <!-- image-preview-input -->
                        <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                            <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview">
                            <!-- rename it --> 
                        </div>
                        <button type="button" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                        </span> </div>                       
                </div>
                
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
	
	
	
        <div class="container"> <br />
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                <div class="panel-body">
                    <div class="input-group image-preview">
                        <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                        <!-- don't give a name === doesn't send on POST/GET --> 
                        <span class="input-group-btn"> 
                        <!-- image-preview-clear button -->
                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                        <!-- image-preview-input -->
                        <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                            <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                            <!-- rename it --> 
                        </div>
                        <button type="button" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                        </span> </div>
                    <!-- /input-group image-preview [TO HERE]--> 
                    
                    <br />
                    
                    <!-- Drop Zone -->
                    <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                    <br />
                    <!-- Progress Bar -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    <br />
                    <!-- Upload Finished -->
                    <div class="js-upload-finished">
                        <h4>Upload history</h4>
                        <div class="list-group"> <a href="#" class="list-group-item list-group-item-danger"><span class="badge alert-danger pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue.xls</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Download files</strong> <small> </small></div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">From</label>
                            <input type="date" class="form-control" id="fromDate" placeholder="DD/MM/YYYY">
                            <label for="exampleInputEmail1">to</label>
                            <input type="date" class="form-control" id="toDate" placeholder="DD/MM/YYYY">
                        </div>
                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th data-sortable="true" class="column-01">File </th>
                                <th data-sortable="true" class="column-02">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column-01"><a data-toggle="tooltip" title="Download <FileName>" href="#">Catalogue</a></td>
                                <td class="column-02"><button type="button" class="btn btn-labeled btn-primary" data-toggle="tooltip" title="Download <FileName>"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span> </button></td>
                            </tr>
                            <tr>
                                <td class="column-01"><a data-toggle="tooltip" title="Download <FileName>" href="#">Delta</a></td>
                                <td class="column-02"><button type="button" class="btn btn-labeled btn-primary" data-toggle="tooltip" title="Download <FileName>"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span> </button></td>
                            </tr>
                            <tr>
                                <td class="column-01"><a data-toggle="tooltip" title="Download <FileName>" href="#">Another file</a></td>
                                <td class="column-02"><button type="button" class="btn btn-labeled btn-primary" data-toggle="tooltip" title="Download <FileName>"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span> </button></td>
                            </tr>
                            <tr>
                                <td class="column-01"><a data-toggle="tooltip" title="Download <FileName>" href="#">Another file</a></td>
                                <td class="column-02"><button type="button" class="btn btn-labeled btn-primary" data-toggle="tooltip" title="Download <FileName>"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span> </button></td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /container --> 


	
	
