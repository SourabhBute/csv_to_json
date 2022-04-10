<?php 
// Read the JSON file 
$json = file_get_contents('users.json');
  
// Decode the JSON file

$users = json_decode($json,true);  
$csv = 'users.csv';
$file = fopen($csv, 'w');
$count =0;
$keys = [];
$values = [];

foreach($users as $row) {  
   if($count == 0) {
    $keys = array_keys($row); 
    fputcsv($file, $keys);
   }
    $values = array_values($row); 
    fputcsv($file, $values);  
    $count++;
}
fclose($file);  
?>

