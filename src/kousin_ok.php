<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>更新完了</title>
</head>
<body>
<?php require 'db_connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('update Buy set brand_name=?,category_id=? where buy_id=?');
    $sql->execute([$_POST['brand_name'],$_POST['category_id'],$_POST['id']]);
 
?>
    <h2>更新完了</h2>
    商品情報を更新しました。
    <form action="itiran.php" method="post">
    <button type="submit">一覧画面へ</button>
    </form>
    
    <form action="toroku.php" method="post">
    <button type="submit">商品登録を続ける</button>
    </form>


</body>
</html>
