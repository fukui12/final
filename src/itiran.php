
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>一覧画面</title>
</head>
<body>
    <h2>購入品一覧</h2>
    <form action="toroku.php" method="post">
    <button type="submit">新規登録</button>
    </form>
    
    <?php require 'db_connect.php'; ?>
    <?php
        echo '<table border=2 align="center">';
        echo '<tr><th>商品番号</th><th>ブランド名</th><th>商品名</th></tr>';
        $pdo = new PDO($connect, USER, PASS);
        $sql=$pdo->query('select * from Buy');
        foreach($sql as $row){
            $id=$row['buy_id'];
            echo '<tr>';
            echo '<td>',$id,'</td>';
            echo '<td>',$row['brand_name'],'</td>';
            echo '<td>',$row['category_id'],'</td>';
            echo '<td><a href="kousin.php?id='.$id.'&brand_name='.$row['brand_name'].'&category_id='.$row['category_id'].'">更新</a></td>';
            echo '<td><a href="delete.php?id='.$id.'">削除</a></td>';
            echo '</tr>';
        }
            echo '</table>';
        ?>
    </body>
</html>
