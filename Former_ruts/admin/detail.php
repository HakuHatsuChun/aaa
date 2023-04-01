<?php
session_start();
require_once('../funcs.php');
require_once('../common/head_parts.php');
require_once('../common/header_nav.php');

$id = $_GET['id'];
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_content_table WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?= head_parts('Former Ruts') ?>
</head>
<body class="honbun">
    <?=  $header_nav?>
        <div class="mb-3 w-25">
            <label for="title" class="form-label">タイトル</label>
            <br>
            <div class="moji card">
            <?= $row["title"] ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">本文</label>
            <br>
            <div class="moji card">
            <?= $row["content"] ?>
            </div>
        </div>

        <button>いいね</button>
</body>

</html>
