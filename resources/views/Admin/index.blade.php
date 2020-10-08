<table border="1"> 
    <tr>
        <td>id</td>
        <td>管理员名字</td>
        <td>管理员邮箱</td>
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
        <td><a href="{{}}">删除</a><a href="">修改</a></td>
    </tr>
    @endforeach
</table>