<?php
//echo $_SERVER['HTTP_USER_AGENT']."<br>";
function CheckBrowser()
{
if (strpos($_SERVER['HTTP_USER_AGENT'], 'rv:11.0') !== false) {
//$browser="ie11";
$browser="ie11";
}
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')!== false) {
$browser="old_browser";
}
else{
$browser="not_ie";
}
return  $browser;
}
$browser=CheckBrowser();
echo $browser;
?>