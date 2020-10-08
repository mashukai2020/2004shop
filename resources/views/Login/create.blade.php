<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{('/login/login_do')}}" method="post">
    @csrf
    <center><h1>登入</h1></center>
        <center>
            <input type="text" name="email">邮箱<br>
            <input type="password" name="pwd">密码<br>
            <input type="submit">
        </center>
    </form>
</body>
</html>