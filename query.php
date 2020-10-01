<?php 
$mysql_host = 'localhost'; 
$mysql_user = 'root'; 
if (!@mysql_connect ($mysql_host, $mysql_user)) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
    // database name is server 
    if (@mysql_select_db('collatio_pretium')) 
    { 
        echo "Connection Success"; 
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?>