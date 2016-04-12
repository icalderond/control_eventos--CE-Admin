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
      <div id="page-wrapper">
        <div class="row">
         <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa"></i>Inscripciones </li>
            </ol>
          </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>No Control</label>
                        <input class="form-control" placeholder="########">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label>Descripcion</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                 </div>
            </div>
          <div class="row">
            <div class="col-lg-12">
                <div id="inscripcionesTablaContenedor" ></div>
            </div>
        </div><!--/.row -->
      </div><!-- /#page-wrapper -->

    </div><!--/#wrapper -->

  
   
  </body>
</html>