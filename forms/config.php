<?php

$pdo = new PDO('mysql:host=localhost;dbname=grantgre_aceinthehole', 'grantgre_form_creator', 'Euclid314@');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
?>