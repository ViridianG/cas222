<?php

$host = "localhost";
$username = "grantgre_form_creator";
$password = "Euclid314@";
$db = "grantgre_aceinthehole";


$link = mysqli_connect($host, $username, $password, $db);
if(!$link){
	echo "database connected failed";
}





/*

$pdo = new PDO('mysql:host=localhost;dbname=grantgre_aceinthehole', 'grantgre_form_creator', 'Euclid314@');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
*/

?>