<?php

$password = 'test';

$hashed_pw = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_pw;

?>