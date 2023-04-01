<?php
session_start();
require_once('../funcs.php');
require_once('../common/head_parts.php');
require_once('../common/header_nav.php');
loginCheck();

$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_user_table');
$status = $stmt->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?= head_parts('Former Ruts') ?>
</head>

<body id="main">
    <?= $header_nav ?>
    
    <h1></h1>
</body>
</html>

</html>