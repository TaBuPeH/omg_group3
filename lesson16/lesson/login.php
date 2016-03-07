<?php

// database Handle

require_once "db.class.php";



$db = new database();

$users = $db->fetchArray("SELECT * FROM `users` where username='".$_POST['user']."' ");

echo "<pre>";
print_r($users);
exit;
