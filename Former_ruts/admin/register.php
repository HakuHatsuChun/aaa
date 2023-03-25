<?php

session_start();
require_once('../funcs.php');
loginCheck();

$title = $_POST['title'];
$yoyaku = $_POST['yoyaku'];
$content  = $_POST['content'];
$tag  = $_POST['tag'];
$category  = $_POST['category'];

if (trim($title) === '' || trim($content) === '') {
    redirect('post.php?error');
}


$pdo = db_conn();
$stmt = $pdo->prepare('INSERT INTO gs_content_table(
                            title, yoyaku, content, date, tag, category
                        )VALUES(
                            :title, :yoyaku, :content, sysdate(), :tag, :category
                        )');
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':yoyaku', $yoyaku, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':tag', $content, PDO::PARAM_STR);
$stmt->bindValue(':category', $content, PDO::PARAM_STR);
$status = $stmt->execute(); 
var_dump($title,$yoyaku,$content,$tag,$category,$status);

if (!$status) {
    sql_error($stmt);
} else {
    $_SESSION['post'] = [] ;
    redirect('main.php');
}
