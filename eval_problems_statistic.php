<?php require_once('Connections/problems.php'); ?>
<?php
mysql_select_db($database_problems, $problems);
function GetProblemsEval($conn,$problems_arr,$levelid/*درجة التقييم 50-51-52-53*/)
{
//اجمالي الضعيف
$q_level0=0;
//اجمالي المقبول
$q_level1=0;
//اجمالي الجيد
$q_level2=0;
//اجمالي الجيد جدا
$q_level3=0;
//اجمالي الممتاز
$q_level4=0;
mysql_select_db($database_conn, $conn);
//جدول الاسئلة
$question_table="stage";

$query_rs = "SELECT * FROM ".$question_table." WHERE deleted=0";
$rs = mysql_query($query_rs, $conn) or die(mysql_error());
$row_rs = mysql_fetch_assoc($rs);
$totalRows_rs = mysql_num_rows($rs);
echo $query_rs."<br>";

//جدول الاجابات على الاسئلة
$eval_question_table="problem_stage";


//اسم الحقل الخاص بالسؤال من جدول الاجابات
$qu_id="stage_id";

do{
//اسم الحقل الخاص بالسؤال من جدول الاجابات على الاسئلة
$quid=$row_rs['stageid'];
$query_rs2 = "SELECT * FROM ".$eval_question_table." WHERE deleted=0 AND problem_id IN(".$problems_arr.") AND ".$qu_id."=".$quid."";
echo $query_rs2."<br>";
$rs2 = mysql_query($query_rs2, $conn) or die(mysql_error());
$row_rs2 = mysql_fetch_assoc($rs2);
$totalRows_rs2= mysql_num_rows($rs2);

}while($row_rs = mysql_fetch_assoc($rs));

return array($q_level0,$q_level1,$q_level2,$q_level3,$q_level4);
}
mysql_select_db($database_problems, $problems);
$query_rs = "SELECT problemID FROM problem WHERE deleted=0";
$rs = mysql_query($query_rs, $problems) or die(mysql_error());
$row_rs = mysql_fetch_assoc($rs);
$totalRows_rs = mysql_num_rows($rs);

//اجمالي الضعيف
$ProblemsEval0=GetProblemsEval($problems,$query_rs,$levelid);

//اجمالي المقبول
//$ProblemsEval1=GetProblemsEval($problems,$problems_arr,$levelid);
?>