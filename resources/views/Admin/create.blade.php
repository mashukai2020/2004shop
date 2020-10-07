<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{('/admin/store')}}" method="post">
    @csrf
        <input type="text" name="name">名称<br>
        <input type="text" name="email">邮箱<br>
        <input type="password" name="pwd">密码<br>
    <input type="submit">
    </form>
</body>
</html>