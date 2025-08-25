 <div>

<h1>Student list</h1>


 <!-- search -->
 <form action="{{ url('search') }}" method="get">
<input type="text" name="search" placeholder="search with name" value="{{@$search }}">  
<button>Search</button>  
</form>


<!-- delete multiple record  -->
 <form action="delete-multi" method="post">
    @csrf
    <button>delete</button>
    
 <table border="1">
     <tr>
        <td>Section</td>
         <td>id</td>
         <td>Name</td>
         <td>Email</td>
         <td>Phone</td>
         <td>Created</td>
         <td>deleted</td>
         <td>edit</td>
     </tr>



     @foreach ($student as $students)
     <tr>
        <td><input type="checkbox" name = "ids[]" value ="{{ $students->id }}" ></td>
         <td>{{ $students->id}}</td>
         <td>{{ $students->name }}</td>
         <td>{{ $students->email }}</td>
         <td>{{ $students->phone }}</td>
         <td>{{ $students->created_at }}</td>
         <td>
             <a href="{{ 'delete/'.$students->id}}">Delete</a>
         </td>

         <td>
             <a href="{{ 'edit/'.$students->id}}">edited</a>
         </td>
     </tr>

     @endforeach
 </table>
 </form>
 <br>
 <br>

 <!-- pagination -->
    {{$student->links()}}

</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>