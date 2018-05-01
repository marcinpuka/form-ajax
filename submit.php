<?php
$user = $_REQUEST["user"];

$obj = json_decode($user, true);

print_r($obj);


$filename = 'data.csv';
$file = fopen($filename, 'a');
$num = count($obj);

$output2 = "";
foreach($obj as $key => $value){
    $output2 .=  $value . ",";
}
$output2 .= "\n";
fwrite($file, $output2);
fclose($file);

echo $user;

