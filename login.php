<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }


        .container-fluid{
            background-color:navy;
            }

        .navbar-brand{
            text-align: center;
        }

        .login-form{
            text-align: center;
            margin:100px 0 0 0;
        }

        input {
  
  background: transparent;
  border-bottom: solid 1px #7053c4;
  border-top: none;
  border-left: none;
  border-right: none;
  font-size: 1rem;
  padding: 0.5em 0.4em;
  transition: all 0.4s;
  color: #BDBDBD;;
  margin: 0.7rem 0;
}
input:focus {
  background: #7035c4;
  transform: scale3d(1.06,1.06,1.06);
}

button {
  background: transparent;
  width: 50%;
  margin-top: 2.5rem;
  font-size: 1rem;
  border: solid 1px #7053c4;
  padding: 1em 0;
  color: #bdc3c7;
  transition: all 0.6s;
}
button:hover {
  cursor:pointer;
  background: #7035c4;
}

    </style>
    <title>ログイン</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">登録画面に戻る</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post" class="login-form">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
