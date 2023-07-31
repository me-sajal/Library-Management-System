<?php 
// DB credentials.
// Write the Hostname at line 4 instead of #, Username in line 5, Password in line 6 and Database name in line 7
define('DB_HOST','#');
define('DB_USER','#');
define('DB_PASS','#');
define('DB_NAME','#');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>