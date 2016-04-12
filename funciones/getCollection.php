<?php
    

    include("cn_usuarios.php"); 
if($_GET['action']=="TipoEvento"){
     $sql = "SELECT tipo_evento.id_TipoEvento AS 'Value', 
                tipo_evento.Descripcion AS 'DisplayText' 
                FROM tipo_evento";
    //$consulta = $sql;
        $result = mysql_query($sql);
        $rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[]=array(
            "DisplayText" => $row['DisplayText'],
             "Value" => $row['Value']
            ); 
		}
        $jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Options'] = $rows;
		print json_encode($jTableResult);
}
?>
