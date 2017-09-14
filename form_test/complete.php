<?php
session_start();

$_SESSION = [];

session_destroy();
?>
<!--セッション削除 -->

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>お問い合わせフォーム</title>
	<link rel="stylesheet" href="stylesheet_form.css">
</head>
<body>
	<section>
	<h1 style="
    font-size: 30px;
    text-align: center;
   ">
    お問い合わせを受け付けました。</h1>
	</seciton>

	<section>
		<p>お問い合わせ内容のご登録が完了しました。</p>
    <p>貴重なご意見をありがとうございます。</p>
    <p>お問い合わせ内容によっては、お返事を差し上げるまでにお時間をいただく場合や、<br>
      メールではなく、お電話やお手紙でご連絡させていただく場合もございます。</p>
    <p> また、弊社からお返事させていただくことが適当でない場合には、<br>
      お返事を差し上げられない場合もございます。あらかじめご了承ください。</p>

    <a href="inputpage.php" class="btn">戻る</a>
	</section>
</body>
</html>
