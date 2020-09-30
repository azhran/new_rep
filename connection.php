<?php
$hostname_connection = "localhost" ;
$database_connection = "test";
$username_connection = "rak";
$password_connection = "DBAfPRO:2009"  ;
$connection = mysql_pconnect($hostname_connection, $username_connection, $password_connection) or die(mysql_error());

?>