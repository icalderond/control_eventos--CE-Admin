<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Constrol Eventos-CE Admin</title>
  </head>

  <body>

    <div id="wrapper">
<?php 
include("/tools/javascripts.php");
include("/tools/header.php");
?>

      <form>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa"></i>Datos Eventos </li>
            </ol>
            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Titulo</label>
                            <input class="form-control" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input class="form-control" placeholder="Descripcion">
                        </div>
                        <div class="form-group">
                            <label>Responsable</label>
                            <input class="form-control" placeholder="Responsable">
                        </div>
                        <div class="form-group">
                            <label>Costo Persona</label>
                            <input class="form-control" placeholder="Costo Persona">
                        </div>
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input class="form-control" placeholder="Fecha Inicio">
                        </div>
                        <div class="form-group">
                            <label>Fecha Final</label>
                            <input class="form-control" placeholder="Fecha Final">
                        </div>
                      </div>
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label>Costo Extemp</label>
                            <input class="form-control" placeholder="Costo Extemp">
                        </div>
                        <div class="form-group">
                            <label>Fecha Limite Pago</label>
                            <input class="form-control" placeholder="Fecha Limite Pago">
                        </div>

                        <div class="form-group">
                        <div style="float: left" >
	            	        <img src="images/31795.png" width="180" height="120px">
	    	            </div>
    	    	        <div>
        	    	        <div class="form-group">
                                <label>Logotipo</label>
                                <input type="file">
                            </div>
                        </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                        <div style="float: left">
	            	        <img src="images/31795.png" width="180" height="120px">
	    	            </div>
    	    	        <div>
        	    	        <div class="form-group">
                                <label>Foto</label>
                                <input type="file">
                            </div>
                        </div>
                        </div>
                 </div>
            
            	
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /#page-wrapper -->
	  </form>
    </div><!-- /#wrapper -->

   
  
  </body>
</html>
