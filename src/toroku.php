
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<body>
<h2>新規管理者登録</h2>
    
<form action="toroku_ok.php" method="post">
    ブランド名：<input type="text" name="brand_name" required><br>
    商品名：<input type="text" name="category_id" required> 
    <p><button type="submit">登録</button></p>
</form>
<form action="itiran.php" method="post">
    <button type="submit">購入品一覧へ</button>
</form>
</body>
</html>