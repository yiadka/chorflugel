<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
</head>

<body>
	<p>お問い合わせ内容</p>
	<div class="input_area">
		<form action="../index.html" method="post" id="contact_form">
			<dl class="name">
				<dt>お名前</dt>
				<dd><input type="text" name="name" value=""></dd>
			</dl>
			<dl class="belonging">
				<dt>所属団体（任意）</dt>
				<dd><input type="text" name="belonging" value=""></dd>
			</dl>
			<dl class="email">
				<dt>メールアドレス</dt>
				<dd><input type="text" name="email" value=""></dd>
			</dl>
			<dl class="body">
				<dt>お問い合わせ内容</dt>
				<dd><textarea name="body"></textarea></dd>
			</dl>
			
			<input type="hidden" name="eventId" value="save">
			<input type="submit" value="送信">
		</form>
	</div>
</body>
</html>
