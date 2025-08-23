<div>
  <h1>Student List</h1>
  <table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>phone</td>
    </tr>
    @foreach ($stud as $stu )
    <tr>
        <td>{{ $stu->id }}</td>
        <td>{{ $stu->name }}</td>
        <td>{{ $stu->email }}</td>
        <td>{{ $stu->phone }}</td>
    </tr>
    @endforeach
  </table>
</div>
