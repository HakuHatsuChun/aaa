<?php

session_start();
require_once('../funcs.php');

$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw  = password_hash($_POST['lpw'], PASSWORD_DEFAULT);

if (trim($name) === '' || trim($lpw) === '') {
    redirect('make.php?error');
}


$pdo = db_conn();

$stmt2 = $pdo->prepare('SELECT *
FROM gs_user_table
WHERE lid = :lid');

$stmt2->bindValue(':lid', $_POST['lid'] , PDO::PARAM_STR);
$status2 = $stmt2->execute(); 

if (!$status2) {
    sql_error($stmt2);
} else {
    $result = $stmt2->fetch();
}

if($result){
    redirect('make.php');
    exit();
    }

$stmt = $pdo->prepare('INSERT INTO gs_user_table(
                            name, lid, lpw
                        )VALUES(
                            :name, :lid, :lpw
                        )');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute(); 
var_dump($name,$lid,$lpw,$status);

if (!$status) {
    sql_error($stmt);
} else {
    $_SESSION['post'] = [] ;
    redirect('login.php');
}
