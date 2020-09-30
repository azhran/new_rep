<?php
require_once('connection.php');

mysql_select_db($database_connection, $connection);
if(isset($_POST["query"]))  
 {  
      $output = '';  
	$query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";
$result = mysql_query($query);
      $output = '<ul class="list-unstyled">';  
      if(mysql_num_rows($result) > 0)  
      {  
           while($row = mysql_fetch_array($result))  
           {  
                $output .= '<li>'.$row["country_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  