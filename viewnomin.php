<?php
require "dbconnect.php";
/*
$users = R::dispense('users');

$users->login = "bns.com";
$users->password = "123456789"; 

R::store($users);
*/

$users = R::findAll('users');
foreach($users as $user){
	//echo "{$user[login]}</br>";
	echo $user->login. '</br>';
}
?>
