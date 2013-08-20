<?
//This file puts the attendance query given below in a MS excel( What! proprietary?) file for download 
include("conn.php");
include "session.php";
$subj=$_SESSION['sub'];
$date=$_SESSION['date'];
$query_string = "SELECT * FROM att WHERE att_dt='$date' and sub_code='$subj' ORDER BY stu_roll";
$export = conn($query_string);
$count = mysql_num_fields($export);
/************
Extract field names and write them to the $header variable
/***********/
for ($i = 0; $i < $count; $i++) {
$header .= mysql_field_name($export, $i)."t";
}
/***********
Extract all data, format it, and assign to the $data variable
/**********/
while($row = mysql_fetch_row($export)) {
$line = '';
foreach($row as $value) {
if ((!isset($value)) OR ($value == "")) {
$value = "\t";
} else {
$value = str_replace('"', '""', $value);
$value = '"' . $value . '"' . "\t";
}
$line .= $value;
}
$data .= trim($line)."\n";
}
/************
Set the default message for zero records
/************/
if ($data == "") {
$data = "n(0) Records Found!n";
}
/************
Set the automatic download section
/************/
header("Pragma: public");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$date.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$headern$data";
?>
