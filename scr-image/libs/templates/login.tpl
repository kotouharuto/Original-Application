{* Smarty_html/login.tpl *}

{* ログインファイル *}
<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@media (max-width: 1000px) {
.logintitle {
    font-size: 20px;
    text-align: center;
    font-weight: bold;
}
input {
    width: 60%;
    
}
input:hover {
    border: 1px solid #da3c41;
	outline: none;
	box-shadow: 0 0 5px 1px rgba(218,60,65, .5);
}

span {
}

form {
    text-align: center;
}



.forminfo {
    margin: 0;
    font-size: 12px;
}
.loginbtn {
    color: white;
    height: 40px;
    background: #FF6666;
    border-radius: 30px;
    width: 50%;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    text-decoration: none;
}



.loginbtn:hover {
    opacity: 0.9;
}
.newacbox {
    text-align: center;
}

.newacbox {
    position: relative;
    olor: white;
    height: 40px;
    background: #FF6666;
    border-radius: 30px;
    width: 50%;
    display: table-cell;
    vertical-align: middle;
    margin: 0 auto;
    text-decoration: none;
    
}

.newacbox p {
    color: white;
    
}
.newacbox a {
    position: absolute;
    top: 0;
    left: 0;
    height:100%;
    width: 100%;
}

.newacbox:hover {
    opacity: 0.9;
}


}
</style>

<head>
<title>ログインページ</title>
</head>
<body>
<h1 class="logintitle mt-5">新しいフィットネス生活を始めましょう</h1><br>

<form action="AuthCheck" method="POST">
    <div class="emailbox">
        <p class="forminfo">メールアドレス</p>
        <input type="email">
    </div><br><br>
    <div class="passbox">
        <p class="forminfo">メールアドレス</p>
        <input type="password">
    </div><br><br>

    <button class="loginbtn">
        　ログインする　　
    </button><br><br>
</form>

<button class="newacbox">
  <p>アカウントを作成する</p>
  <a href="newac.php"></a>
</button>

</body>
</html>