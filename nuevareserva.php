<?php
	
$con = mysql_connect("mysql.hostinger.es","u715337862_admin","qwerty123");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

        $datos = $_POST;
		
        mysql_select_db("u715337862_coche") or die(mysql_error());	$datos = $_POST;
		
	$myQuery = "INSERT INTO  reservas (`Fecha`, `Periodo`, `Persona`, `Motivo`) VALUES ('" . $datos['fecha'] . "','" . $datos['periodo'] . "','" . $datos['persona'] . "','" . $datos['motivo'] . "')";
	$result = mysql_query($myQuery) or die($myQuery."<br/><br/>".mysql_error());

	/*$response = "[";
	while($row = mysql_fetch_array($result))
	  {
		//  {"date":"11/22","title":"victor","periodo":"tarde","motivo":"porque me apetece"}
	  $response =  $response . "{\"date\":\"" . $row['Fecha'] . "\",\"title\":\"" . $row['Persona'] . "\",\"periodo\":\"" . $row['Periodo'] . "\",\"motivo\":\"" . $row['Motivo'] . "\"}";
	  $response =  $response . ",";
	  }
	$response = substr($response,0,-1);
	$response =  $response . "]";
*/
	$response = $datos['fecha'] . "','" . $datos['periodo'] . "','" . $datos['persona'] . "','" . $datos['motivo']; 
	echo $response;

	mysql_close($con);
?>