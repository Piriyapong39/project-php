<?php
$serverName = "KLUI\SQLEXPRESS"; 
$connectionInfo = array( "Database"=>"LEARNING_DATABASE");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo $conn;
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>