$query = "INSERT INTO users (username, email, password) VALUES ( '$username', '$email', '$password')";
    if($pdo->query($query)) { ?>
    <div class="alert alert-success" role="alert">登録が完了しました</div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">エラーが発生しました</div>
    <?php
    }