<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link rel="stylesheet" href="<?=$url?>/web/assets/styles/login.css">
</head>
<body>
<form method="POST" action="<?=$url?>/login">
    <section>
        <div class="box">
            <div class="form">
                <h2>login page</h2>
                <form action="">
                    <div class="inputBx">
                        <input  id="email" placeholder="user name" class="form-control is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                        <img src="<?=$url?>/web/assets/images/user.png" style="width:30px;" alt="">
                    </div>
                    <span class="invalid-feedback" role="alert" style="color:red;font-weight:bold;"><?=$errorLogin;?></span><br/>
                    <div class="inputBx">
                        <input id="password" type="password" placeholder="password" class="form-control is-invalid @enderror" name="password" required autocomplete="current-password">
                        <img src="<?=$url?>/web/assets/images/padlock.png" style="width:30px;" alt="">
                    </div>
                    <span class="invalid-feedback" role="alert" style="color:red;font-weight:bold;"><?=$errorPass;?></span><br/>
                    <div class="inputBx">
                        <input type="submit" value="login">
                    </div>
                </form>
            </div>
        </div>
    </section>
</form>
</body>
</html>