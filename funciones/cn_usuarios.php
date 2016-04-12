<?php
    /*
$mysql_host = "us-cdbr-azure-west-b.cleardb.com";
$mysql_database = "icalderond";
$mysql_username = "bc12bdca0291f9";
$mysql_password = "9ba93fe0";

*/
if(gethostname()=="amoralesu-pc"){
    $mysql_host = "amoralesu-pc";
}else{
    $mysql_host = "127.0.0.1";
}

$mysql_database = "controleventos";
$mysql_username = "root";
$mysql_password = "root";
//error_reporting(0);

$dbconn = @mysql_connect($mysql_host, $mysql_username, $mysql_password);
if (!$dbconn) {
	//echo '<script language="javascript"> alert (\'No se estableció conexión con el servidor de MySQL. Favor de consultar con el departamento de Global PCNet. \')</script>';
    die();
}

$dbselect = @mysql_select_db($mysql_database, $dbconn);
if (!$dbselect) {
   //echo '<script language="javascript"> alert (\'No se estableció conexión con la base de datos. Favor de consultar con el departamento de Global PCNet. \')</script>';
   echo '<script language="javascript"> alert (\'Global PCNet está subiendo una nueva versión del sistema. Favor de intentar conectarse más tarde.\')</script>';
}
?>