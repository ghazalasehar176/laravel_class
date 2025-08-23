<div>
    <h1>User list</h1>
   
    <table border = "1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            
        </tr>
        @foreach($myKey as $key)
        <tr>
             <td>{{$key->id}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
        </tr>
        @endforeach
    </table>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
