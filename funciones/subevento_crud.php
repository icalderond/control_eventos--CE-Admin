<?php
    session_start();
$_SESSION['idEvento']=1;
try
{
	//Open database connection
	include("cn_usuarios.php"); 

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
        $sql = "SELECT sub_evento.Id_SubEvento AS 'IdSubEvento',
                    tipo_evento_id_TipoEvento AS 'IdTipoEvento', 
                    sub_evento.Id_Evento AS 'IdEvento', 
                    tipo_evento.Descripcion AS 'Tipo',
                    sub_evento.Titulo AS 'Titulo',
                    sub_evento.Descripcion AS 'Descripcion',
                    sub_evento.Ponente AS 'Ponente',
                    sub_evento.Semestre AS 'Semestre', 
                    sub_evento.Requisitos AS 'Requisitos',
                    sub_evento.CupoPersonas AS 'Cupo',
                    sub_evento.PersonasInscritas, 
                    sub_evento.Costo AS 'Costo'
                FROM sub_evento
                INNER JOIN tipo_evento ON tipo_evento.id_TipoEvento=sub_evento.tipo_evento_id_TipoEvento  ";

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
		$sql="INSERT INTO sub_evento 
        (sub_evento.Id_Evento,
        sub_evento.tipo_evento_id_TipoEvento,
        sub_evento.Titulo,
        sub_evento.Descripcion,
        sub_evento.Ponente,
        sub_evento.Semestre,
        sub_evento.Requisitos,
        sub_evento.CupoPersonas,
        sub_evento.Costo)

        VALUES
        ('".$_SESSION['idEvento']."',
        '".$_POST['IdTipoEvento']."',
        '".$_POST['Titulo']."',
        '".$_POST['Descripcion']."',
        '".$_POST['Ponente']."',
        '".$_POST['Semestre']."',
        '".$_POST['Requisitos']."',
        '".$_POST['Cupo']."',
        '".$_POST['Costo']."')";
        
       // echo $sql;
         //Insert record into database
         
        $result = mysql_query($sql);
 
        //Get last inserted record (to return to jTable)
        $getLastField="SELECT sub_evento.Id_SubEvento AS 'IdSubEvento',
                    tipo_evento_id_TipoEvento AS 'IdTipoEvento', 
                    sub_evento.Id_Evento AS 'IdEvento', 
                    tipo_evento.Descripcion AS 'Tipo',
                    sub_evento.Titulo AS 'Titulo',
                    sub_evento.Descripcion AS 'Descripcion',
                    sub_evento.Ponente AS 'Ponente',
                    sub_evento.Semestre AS 'Semestre', 
                    sub_evento.Requisitos AS 'Requisitos',
                    sub_evento.CupoPersonas AS 'Cupo',
                    sub_evento.PersonasInscritas, 
                    sub_evento.Costo AS 'Costo'
                FROM sub_evento
                INNER JOIN tipo_evento ON tipo_evento.id_TipoEvento=sub_evento.tipo_evento_id_TipoEvento 
        WHERE sub_evento.Id_SubEvento = '".mysql_insert_id()."';";

        //echo $getLastField;
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
		$sql="UPDATE sub_evento SET 
                    sub_evento.tipo_evento_id_TipoEvento='".$_POST['IdTipoEvento']."',
                    sub_evento.Id_Evento='".$_SESSION['idEvento']."',
                    sub_evento.Titulo='".$_POST['Titulo']."',
                    sub_evento.Descripcion='".$_POST['Descripcion']."',
                    sub_evento.Ponente='".$_POST['Ponente']."',
                    sub_evento.Semestre='".$_POST['Semestre']."',
                    sub_evento.Requisitos='".$_POST['Requisitos']."',
                    sub_evento.CupoPersonas='".$_POST['Cupo']."', 
                    sub_evento.Costo='".$_POST['Costo']."' 
                WHERE sub_evento.Id_SubEvento='".$_POST['IdSubEvento']."';";
                
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
		$sql="DELETE FROM sub_evento WHERE sub_evento.Id_SubEvento='".$_POST['IdSubEvento']."';";
        
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