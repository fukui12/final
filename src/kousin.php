<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新画面</title>
</head>
<body>
<?php
$brand_name=$category_id='';
if(isset($_SESSION['Buy'])){
    $brand_name=$_SESSION['Buy']['brand_name'];
    $category_id=$_SESSION['Buy']['category_id'];
   
}
echo '<form action="kousin_ok.php" method="post">';
echo '<table>';
echo '<tr><td>ブランド名</td><td>';
echo '<input type="text" name="brand_name" value="',$brand_name,'">';
echo '</td></tr>';
echo '<tr><td>商品名</td><td>';
echo '<input type="text" name="category_id" value="',$category_id,'">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>
</body>
</html>