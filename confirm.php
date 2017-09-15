<?php
session_start();

$_SESSION["post"] = $_POST;

$comment = "";
$name = "";
$kana = "";
$email = "";
$tel = "";

if ( isset( $_POST["comment"] ) == true ) {
	$comment = htmlspecialchars( $_POST["comment"], ENT_QUOTES );
}

if ( isset( $_POST["name"] ) == true ) {
	$name = htmlspecialchars( $_POST["name"], ENT_QUOTES );
}

if ( isset( $_POST["kana"] ) == true ) {
	$kana = htmlspecialchars( $_POST["kana"], ENT_QUOTES );
}

if ( isset( $_POST["email"] ) == true ) {
	$email = htmlspecialchars( $_POST["email"], ENT_QUOTES );
}

if ( isset( $_POST["tel"] ) == true ) {
	$tel = htmlspecialchars( $_POST["tel"], ENT_QUOTES );
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="description" content="お問い合わせフォーム">
<link rel="stylesheet" href="stylesheet_from.css">
<title> お問い合わせフォーム </title>
</head>

<body>
	<section>
	<h1 style="
	    font-size: 30px;
	    text-align: center;
	">お問い合わせ確認画面</h1>
</section>

<section>
	<table>
　<tbody>
    <tr>
      <th>
        お問い合わせの内容
      </th>
      <td>
        <?php echo $comment; ?>
      </td>
    </tr>
    <tr>
      <th>
        お名前(漢字)
      </th>
      <td>
        <?php echo $name; ?>
      </td>
    </tr>
    <tr>
      <th>
        フリガナ(全角カナ)
      </th>
      <td>
        <?php echo $kana; ?>
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス(半角英数)
      </th>
      <td>
        <?php echo $email; ?>
      </td>
    </tr>
    <tr>
      <th>
        お電話番号(半角数字)
      </th>
      <td>
        <?php echo $tel; ?>
      </td>
    </tr>
  </tbody>
</table>


</body>

<a href="inputpage.php" class="btn">入力画面に戻る</a>
<a href="complete.php" class="btn">登録する</a>
</section>

</body>
</html>
