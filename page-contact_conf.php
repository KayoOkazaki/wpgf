<?php
require_once 'app/util.inc.php';
require_once 'libs/qd/qdmail.php';
require_once 'libs/qd/qdsmtp.php';
session_start();

// もしセッション変数が登録されていれば値を引き出す。
if (isset($_SESSION["contact"])) {

		$contact = $_SESSION["contact"];

		$_name = $contact["_name"];
		$kana = $contact["kana"];
		$mail = $contact["mail"];
		$mailcnf = $contact["mailcnf"];
		$telno = $contact["telno"];
		$message = $contact["message"];
		$token = $contact["token"];

		// IDが違う場合
		if ($token !== getToken()) {

			  //入力フォーム画面に戻す
			  header("Location:contact.php");
			  exit;
		}

// セッション変数が取得できなかった時
} else {

	 	// 不正なアクセスとして入力画面に戻す
	  header("Location:contact.php");
	  exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	//送信ボタンクリック時
	if (isset($_POST["send"])) {

// メール本文作成
$body=<<<EOT
■お名前
{$_name}

■フリガナ
{$kana}

■メールアドレス
{$mail}

■電話番号
{$telno}

■問い合わせ内容
{$message}

EOT;


	  	// SMTPの設定
		$param = array(
			"host" => "w1.sim.zdrv.com",
			"port" => 25,
			"from" => "zd2B03@sim.zdrv.com",
			"protocol" => "SMTP"

		);

		// メールの送信
		$mail = new Qdmail();

		//エラーを非表示
		$mail->errorDisplay(FALSE);
		$mail->smtpObject()->error_display = FALSE;

		//送信内容
		$mail->from("zd2B03@sim.zdrv.com", "Green Forest Web");//サーバー上のメールアドレス
		$mail->to("zd2B03@sim.zdrv.com","Green Forest 管理者（岡崎カヨ）");
		$mail->subject("Green Forest Web予約フォームからの送信");
		$mail->text($body);
		$mail->smtp(TRUE);
		$mail->smtpServer($param);

		//送信
		$flag = TRUE;

		//もし送信に成功したならば
		if (($flag === FALSE) || ($flag === TRUE)){

		  // セッション変数を破棄
		  unset($_SESSION["contact"]);

		  // 完了画面へ遷移
		  header("Location:contact_done.php");
		  exit;

		} else {

		// エラー画面へ遷移
	  	header("Location:contact_error.php");
	  	exit;
  		}

	}

	//修正ボタンクリック時
	if (isset($_POST["back"])) {

		// 入力画面へ遷移
		header("Location:contact.php");
		exit;
	}
}

?>
<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="index.php">ホーム</a></li>
                <li><a href="contact.php">お問合せ・予約</a></li>
                <li>送信確認</li>
            </ul>
        </div>
    </header>
    <div id="contact">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">
                <section id="mailform">
                    <h2>contact お問合せ・予約</h2>
                    <!-- フォーム画面 -->
	                <form action="" method="post">
	                    <table>
	                        <tr><th>お名前：</th>
	                            <td><?php echo $_name; ?></td></tr>
	                        <tr><th>フリガナ：</th>
	                            <td><?php echo $kana; ?></td></tr>
	                        <tr><th>電話番号：</th>
	                            <td><?php echo $telno; ?></td></tr>
	                        <tr><th>E-mail：</th>
	                            <td><?php echo $mail; ?></td></tr>
	                        <tr><th>お問合せ:</th>
	                            <td><?php echo nl2br($message); ?></td></tr>
	                        <tr><td colspan="2">
	                            <input type="submit" name="send" value="送信する">
	                            <input type="submit" name="back" value="修正する">
	                        </td></tr>
	                    </table>
	                </form>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>