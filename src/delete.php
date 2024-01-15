<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除</title>
</head>
<body>
    <?php require 'db_connect.php'; ?>
    <?php
        $pdo = new PDO($connect, USER, PASS);
        $sql=$pdo->prepare(
            'delete from Buy where buy_id=?');
        $sql->execute([$_GET['id']]);
        echo '商品を削除しました。';
    
    ?>
    <form action="itiran.php" method="post">
    <button type="submit">一覧画面へ</button>
    </form>

</body>
</html>