<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');

$query =  mysql_query("SELECT * from student_info");
echo "<table border='1'>";

while($data = mysql_fetch_object($query)){
    
    echo "<tr><td>";
    echo $data->batch;
    echo "</tr></td>";
}
echo "</table>";