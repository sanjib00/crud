<?php

$batch = $_POST['batch_name'];

//echo $batch;

mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');

$data = mysql_query("INSERT into student_info (batch) values ('$batch')");

if($data)
{
    echo "data inserted";
}

 else {
     echo "error";
}
?>