<div>
 <h1>Users</h1>
 <table border="1">
    <tr>
          <td>id</td>
        <td>Name</td>
        <td>email</td>
        <td>phone</td>
    </tr>
    @foreach ($user as $users )
    <tr>
         <td>{{ $users->id }}</td>
         <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
         <td>{{ $users->phone }}</td>
        
    </tr>
    
    @endforeach
 </table>
</div>
