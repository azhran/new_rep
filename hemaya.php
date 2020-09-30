<?php require_once('Connections/test.php'); ?>
<?php require_once('Connections/conn.php'); ?>
<?php
mysql_select_db($database_conn, $conn);
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

$insert_user= @ "INSERT INTO project1 (SELECT * FROM gra_performance.project WHERE projectid IN(".$project_arr."))" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_test, $test);
				mysql_query($insert_user,$test) ;

$insert_user= "INSERT INTO project_attach1  (SELECT * FROM gra_performance.project_attach WHERE projectid  IN(".$project_arr."))" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_test, $test);
				mysql_query($insert_user,$test) ;
				
$insert_user= "INSERT INTO project_completion1   (SELECT * FROM gra_performance.project_completion WHERE projectid  IN(".$project_arr."))" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_test, $test);
				mysql_query($insert_user,$test) ;
				
$insert_user= "INSERT INTO project_dangers1    (SELECT * FROM gra_performance.project_dangers WHERE projectid  IN(".$project_arr."))" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_test, $test);
				mysql_query($insert_user,$test) ;
				
$insert_user= "INSERT INTO project_target1      (SELECT * FROM gra_performance.project_target WHERE projectid  IN(".$project_arr."))" ;
				echo 	$insert_user."<br>" ;
				mysql_select_db($database_test, $test);
				mysql_query($insert_user,$test) ;
?>