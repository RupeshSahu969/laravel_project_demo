<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

<h1> User Pages  </h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    @foreach ($users as $user )


    <tr>
        <td>{{$user->id}} </td>
        <td>{{$user->name}} </td>
        <td> {{$user->email}} </td>
        <td> {{$user->password}} </td>
    </tr>
    @endforeach
</table>


</div>
