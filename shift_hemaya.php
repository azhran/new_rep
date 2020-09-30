<?php require_once('Connections/conn.php'); ?>
<?php
mysql_select_db($database_conn, $conn);
/*
function get_sub_projects($conn,$projectid)
{
mysql_select_db($database_conn, $conn);
$query_rs1 = "SELECT * FROM project WHERE parentid='".$projectid."'";
$rs1 = mysql_query($query_rs1, $conn) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($rs1);
$totalRows_rs1 = mysql_num_rows($rs1);
$project_arr=-100;
if($totalRows_rs1>0)
	{
	do{
	$project_arr=$project_arr.",".$row_rs1['projectid'];
	$project_arr=$project_arr.",".get_sub_projects($conn,$row_rs1['projectid']);
	}while($row_rs1 = mysql_fetch_assoc($rs1));
	}
	return $project_arr;
}
$projectid=61803;
$project_arr=$projectid.",".get_sub_projects($conn,$projectid);
*/
$xx="SELECT * FROM zahran_test.project_attach1";
echo $xx."<br>";
$insert_user= @ "INSERT INTO project (SELECT * FROM zahran_test.project1)" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_conn, $conn);
				//mysql_query($insert_user,$conn) ;

$insert_user= "INSERT INTO project_attach  (SELECT * FROM zahran_test.project_attach1 )" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_conn, $conn);
				//mysql_query($insert_user,$conn) ;
				
$insert_user= "INSERT INTO project_completion   (SELECT * FROM zahran_test.project_completion1)" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_conn, $conn);
				//mysql_query($insert_user,$conn) ;
				
$insert_user= "INSERT INTO project_dangers    (SELECT * FROM zahran_test.project_dangers1)" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_conn, $conn);
				//mysql_query($insert_user,$conn) ;
				
$insert_user= "INSERT INTO project_target      (SELECT * FROM zahran_test.project_target1)" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_conn, $conn);
				//mysql_query($insert_user,$conn) ;
?>