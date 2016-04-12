<?php

try
{
	//Open database connection
	include("cn_usuarios.php"); 

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
        $sql = "SELECT evento.Id_Evento AS IdEvento,
         evento.Titulo AS 'Titulo',
        evento.Responsable AS 'Responsable',
        evento.Fecha_Inicio AS 'FechaInicial',
        evento.Fecha_Final AS 'FechaFinal',
        evento.Costo_Persona_Ext AS 'PagoExtemp',
        evento.Fecha_Limite_Pago AS 'FechaLimitePago',
        evento.Costo_x_Persona AS 'CostoPersona',
        evento.Costo_Persona_Ext AS 'CostoPersonaExterna'
        FROM evento";

        //$consulta = $sql;
        $result = mysql_query($sql);
        $rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		$sql="INSERT INTO evento 
        (evento.Titulo,
        evento.Responsable,
        evento.Fecha_Inicio,
        evento.Fecha_Final,
        evento.Pago_x_Cargo,
        evento.Fecha_Limite_Pago,
        evento.Costo_x_Persona,
        evento.Costo_Persona_Ext)

        VALUES
        ('".$_POST['Titulo']."','".$_POST['Responsable']."','".$_POST['FechaInicial']."','".$_POST['FechaFinal']."','".$_POST['PagoExtemp']."','".$_POST['FechaLimitePago']."','".$_POST['CostoPersona']."','".$_POST['CostoPersonaExterna']."')";
        
       // echo $sql;
         //Insert record into database
         
        $result = mysql_query($sql);
 
        //Get last inserted record (to return to jTable)
        $getLastField="SELECT SELECT evento.Id_Evento AS IdEvento,
         evento.Titulo AS 'Titulo',
        evento.Responsable AS 'Responsable',
        evento.Fecha_Inicio AS 'FechaInicial',
        evento.Fecha_Final AS 'FechaFinal',
        evento.Costo_Persona_Ext AS 'PagoExtemp',
        evento.Fecha_Limite_Pago AS 'FechaLimitePago'
        evento.Costo_x_Persona AS 'CostoPersona',
        evento.Costo_Persona_Ext AS 'CostoPersonaExterna' 
        FROM evento WHERE evento.Id_Evento = LAST_INSERT_ID();";
        $result = mysql_query($getLastField);
        $row = mysql_fetch_array($result);
 
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		$sql="UPDATE evento SET 
                    evento.Titulo='".$_POST['Titulo']."',
                    evento.Responsable='".$_POST['Responsable']."',
                    evento.Fecha_Inicio='".$_POST['FechaInicial']."',
                    evento.Fecha_Final='".$_POST['FechaFinal']."',
                    evento.Pago_x_Cargo='".$_POST['PagoExtemp']."',
                    evento.Fecha_Limite_Pago='".$_POST['FechaLimitePago']."',
                    evento.Costo_x_Persona='".$_POST['CostoPersona']."',
                    evento.Costo_Persona_Ext='".$_POST['CostoPersonaExterna']."' 
                WHERE evento.Id_Evento='".$_POST['IdEvento']."';";
                
         $result=mysql_query($sql);

             
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$sql="DELETE FROM evento WHERE evento.Id_Evento = '" . $_POST["IdEvento"] . "';";
        
        //Delete from database
        $result = mysql_query($sql);
  
        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>