<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
</head>
<body>
<?php require 'db_connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Buy values(null,?,?)');
    $sql->execute([
        $_POST['brand_name'],
        $_POST['category_id']
        ]);
 
        ?>
    <h2>登録完了</h2>
    登録が完了しました。
    <form action="home.php" method="post">
    <button type="submit">ホームへ</button>
    </form>
    
    <form action="toroku.php" method="post">
    <button type="submit">商品登録を続ける</button>
    </form>


</body>
</html>