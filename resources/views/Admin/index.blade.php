<table>
    <tr>
        <td>管理员id</td>
        <td>管理员名称</td>
        <td>管理员邮箱</td>
        <td>添加时间</td>
    </tr> 
    @foreach($res as $v)
    <tr>
        <td>{{$v->uid}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->time}}</td>
    </tr>
    @endforeach
</table>