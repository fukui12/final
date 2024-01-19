
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>更新画面</title>
</head>
<body>
<?php
echo '<form action="kousin_ok.php" method="post">';
echo '<table>';
echo '<tr><td>ブランド名</td><td>';
echo '<input type="text" name="brand_name" value="',$_GET["brand_name"],'">';
echo '</td></tr>';
echo '<tr><td>商品名</td><td>';
echo '<input type="text" name="category_id" value="',$_GET["category_id"],'">';
echo '</td></tr>';
echo '</table>';
echo '<input type="hidden" name="id" value=',$_GET["id"],'>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>
</body>
</html>