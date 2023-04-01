<?php
session_start();
require_once('../funcs.php');
require_once('../common/head_parts.php');
require_once('../common/header_nav.php');

$name = '';
$lid = '';

if (isset($_SESSION['post']['name'])) {
    $name = $_SESSION['post']['name'];
}

if (isset($_SESSION['post']['lid'])) {
    $lid = $_SESSION['post']['lid'];
}

if (isset($_SESSION['post']['lpw'])) {
    $lpw = $_SESSION['post']['lpw'];
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?= head_parts('Former Ruts') ?>
</head>

<body>
    <?=  $header_nav?>
    <?php if (isset($_GET['error'])) : ?>
        <p class='text-danger'>記入内容を確認してください。</p>
    <?php endif ?>

    <form method="POST" action="config.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">名前</label>
            <input type="text" class="form-control" name="name"
            id="name" aria-describedby="name"
            value="<?= $name ?>">
        </div>
        <div class="mb-3">
            <label for="lid" class="form-label">ID</label>
            <input type="text" class="form-control" name="lid"
            id="lid" aria-describedby="lid"
            value="<?= $lid ?>">
        </div>
        <div class="mb-3">
            <label for="lid" class="form-label">パスワード</label>
            <input type="text" class="form-control" name="lpw"
            id="lpw" aria-describedby="lpw"
            value="<?= $lpw ?>">
        </div>

        <button type="submit" class="btn btn-primary">確認する</button>
    </form>
</body>
</html>
