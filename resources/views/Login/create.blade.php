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
            <input type="text" id="email" name="email">邮箱
            <br>
            <b style="color:red;display:none" class="email">空</b><br>
            <input type="password" id="pwd" name="pwd">密码<br>
            <b style="color:red;display:none" class="pwd">空</b><br>
            <input type="submit">
        </center>
    </form>
</body>
</html>
<script src="/static/js/jquery.min.js"></script>
<script>
    $(document).on("blur","#email",function(){
        var email = $("#email").val();
        if(email==""){
            $(this).siblings(".email").show();
        }else{
            $(this).siblings(".email").hide();
        }
    })
    $(document).on("blur","#pwd",function(){
        var pwd = $("#pwd").val();
        if(pwd==""){
            $(this).siblings(".pwd").show();
        }else{
            $(this).siblings(".pwd").hide();
        }
    })
</script>