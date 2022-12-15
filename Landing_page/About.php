<?php
$host='localhost'; 
$user='root'; 
$pass='';
$db='test';
$conn = new mysqli($host, $user, $pass,$db);
mysqli_select_db($conn, $db);
$setSql = "SELECT * FROM registeration";
$setRec = mysqli_query($conn, $setSql);
$columnHeader ='';
$columnHeader = "Id"."\t"."firstmane". "\t"."Middlename". "\t" . "lastname"."\t"."gender"."\t"."course"."\t"."email"."\t"."password"."\t"."number";
$setData=''; 
while ($rec = mysqli_fetch_row($setRec))

{
	$rowData = '';
	foreach ($rec as $value)
{
   $value = '"'.$value.'"'."\t";

   $rowData.=$value;
}

$setData.=trim($rowData)."\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=report.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader)."\n".$setData."\n";
?>
