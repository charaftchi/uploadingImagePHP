<?php


//require_once 'createDB.php';
require_once 'cnxDB.php';

$sql = "CREATE TABLE IF NOT EXISTS imgs (
id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
uploaed_on datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

mysqli_query($con, $sql);
?> 
