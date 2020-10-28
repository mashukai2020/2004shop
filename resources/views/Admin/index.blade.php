<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<h2><a href="{{('/admin/tui')}}">退出</a></h2> 
    <tr>
        <td>id</td>
        <td>用户名字</td>
        <td>用户邮箱</td>
        <td>注册时间</td>
        <td>ip</td>
        <td>操作</td>
    </tr>
    @foreach($res as $k => $v)
    <tr>
        <td>{{$v->uid}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>{{ date( "Y-m-d H : i : s", $v->time)}}</td>
        <td>{{$v->ip}}</td>
        <td><a class="li" id="{{$v->uid}}">删除</a><a href="">修改</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>
<script src="/static/js/jquery.min.js"></script>
<script>
    $('.li').click(function(res){
        // alert(111);exit;
        var id = $(this).attr('id');
        if(confirm('您确定要删除吗')){
        $.get('/admin/destory/'+id,function(res){
            if(res.code=='00000'){
                location.href="/admin";
            }
        },'json');
        }
    });
</script>