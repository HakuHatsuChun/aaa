<?php

session_start();
require_once('../funcs.php');
loginCheck();

$title = $_POST['title'];
$yoyaku = $_POST['yoyaku'];
$content  = $_POST['content'];
$img = '';

if (trim($title) === '' || trim($content) === '') {
    redirect('post.php?error');
}

if ($_SESSION['post']['image_data'] !== "") {
    $img = date('YmdHis') . '_' . $_SESSION['post']['file_name'];
    file_put_contents("../images/$img", $_SESSION['post']['image_data']);
}

$pdo = db_conn();
$stmt = $pdo->prepare('INSERT INTO gs_content_table(
                            title, yoyaku, content, img, date
                        )VALUES(
                            :title, :yoyaku, :content, :img, sysdate()
                        )');
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':yoyaku', $yoyaku, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':img', $img, PDO::PARAM_STR);
$status = $stmt->execute(); 
if (!$status) {
    sql_error($stmt);
} else {
    $_SESSION['post'] = [] ;
    redirect('main.php');
}
