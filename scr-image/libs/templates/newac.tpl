{* libs/template/newac.tpl *}

{* 新規登録ファイル *}
<!DOCTYPE html>
<html lang="ja">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {

}
.logoimg {
    width: 100px;
    height: 100px;
}
.form {
    margin: 0 auto;
}
.actitle {
    font-size: 20px;
    text-align: center;
    font-weight: bold;
}

input {
    width: 50%;
    height: 40px;
    text-align: center;
}

input:hover {
    border: 1px solid #da3c41;
	outline: none;
	box-shadow: 0 0 5px 1px rgba(218,60,65, .5);
}

.accbtn {
    color: white;
    height: 40px;
    background: #FF6666;
    border-radius: 30px;
    width: 50%;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.lglink {
    text-align: center;
}

footer {
    width: 100%;
    background-color: #b8daff;
    color: #fff;
    text-align: center;
    padding: 30px 0;
    height: 100px;
    position: absolute;
    bottom: 0;
}

</style>
</head>
<body>

<form action="newac.php" method="post" class="mt-5" style="text-align: center;">
<h1 class="actitle mb-3">アカウントを作成</h1>
<div>
    <label>お名前</label><br>
    <input type="text" name="username">
</div><br>

<div>
    <label>メールアドレス</label><br>
    <input type="email" name="email">
</div><br>

<div>
    <label>パスワード</label><br>
    <input type="password" name="password" placeholder="8~30字以内の半角英数字で入力してください">
</div><br>

<input type="submit" class="accbtn" name="signup" value="アカウントを作成する">
</form>

<div class="lglink mt-5">
<p>既にアカウントをお持ちの場合はこちらから</p>
<a href="login.php">ログインする</a>
</div>

<footer>

</footer>
</body>
</html>