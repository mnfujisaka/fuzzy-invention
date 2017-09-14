<?php
session_start();

$comment = "";
$name = "";
$kana = "";
$email = "";
$tel = "";

//issetの意味がよく分かっていない

if ( isset($_SESSION["post"]) == true ) {
	$post = $_SESSION["post"];

  if ( isset( $post["comment"] ) == true ) {
		$name = $post["comment"];
	}

  if ( isset( $post["name"] ) == true ) {
    $name = $post["name"];
  }

  if ( isset( $post["kana"] ) == true ) {
    $name = $post["kana"];
  }

	if ( isset( $post["email"] ) == true ) {
		$trigger = $post["email"];
	}

  if ( isset( $post["tel"] ) == true ) {
		$name = $post["tel"];
	}
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="description" content="お問い合わせフォーム">
<link rel="stylesheet" href="stylesheet_form.css">
<title> お問い合わせフォーム </title>
</head>

<body>
  <article>
    <section>

			<h1 style="
	    font-size: 30px;
	    text-align: center;
	    ">お問い合わせフォーム</h1>

			<!--　お問い合わせについての注意事項を箇条書き　-->
    <ul>
      <li>お客さまの個人情報、お寄せいただいた相談内容は厳重に取扱い、プライバシー保護に努めます。</li>
      <li>お問い合わせには、受付時間内に対応させていただきます。</li>
      <li>受付時間：9:00～17:00（土・日・祝日・年末年始・夏季休暇を除く）</li>
    </ul>
  </section>

  <section>
    <!-- お問い合わせ内容入力 -->
    <!-- お問い合わせ内容、名前、フリガナ、メールアドレス、電話番号-->
    <form action="confirm.php" method="post">

      <p><label for="comment">お問い合わせの内容
				<span class="required"
				style="
    			padding: 0.5em;
    			font-size: 0.75em;
    			color: #ff0000;
					">*必須</span>
				</label><br>
				<input type="text" name="comment" required>
				</p>

			<p><label for="name">お名前(漢字)
				<span class="required"
			 style="
    		 padding: 0.5em;
    		 font-size: 0.75em;
    		 color: #ff0000;
				 ">*必須</span>
			 </label><br>
			 <input type="text" name="name" required>
			 </p>


      <p><label for="kana">フリガナ(全角カナ)
				<span class="required"
			style="
    		padding: 0.5em;
    		font-size: 0.75em;
    		color: #ff0000;
				">*必須</span>
			</label><br>
			<input type="text" name="kana" required>
			</p>

      <p><label for="email">メールアドレス(半角英数)
				<span class="required"
			style="
				 padding: 0.5em;
				 font-size: 0.75em;
				 color: #ff0000;
				">*必須</span>
			</label><br>
			<input type="text" name="email" required>
			</p>

      <p><label for="tel">お電話番号(半角数字)</label><br>
      <input type="tel" name="tel" ></p>

      <p><input type="submit" name="submit" value="確認画面へ"></p>
    </form>

  </section>
</body>
</html>
