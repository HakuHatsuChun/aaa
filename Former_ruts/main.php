<?php
session_start();
require_once('funcs.php');


$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_content_table');
$status = $stmt->execute();

$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    $contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<head>
<html lang="ja">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<script src='JS/index.js'></script>
<title>Former Ruts</title>
</head>

<body id="main">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/post.php">投稿する</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.php">投稿一覧</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/login.php">ログイン</a>
                </li>                
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/search.php">検索</a>
                </li>                
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/mypage.php">マイページ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($contents as $content): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                    <a class="touch" href="admin/detail.php?id=<?=$content['id']?>">
                            <div class="card-body">
                                <h3><?= $content['title'] ?></h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">登録日:<?= $content['date'] ?></small>
                                </div>
                                <?php if (!is_null($content['yoyaku'])): ?>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">内容:<?= $content['yoyaku'] ?></small>
                                </div>
                                <?php endif ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?= $footer ?>
</body>
</html>
