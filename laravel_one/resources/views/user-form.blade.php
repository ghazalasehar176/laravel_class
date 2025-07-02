<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- @if($errors ->any())
@foreach($errors->all() as $error)
<div>
    {{$error}}
</div>
@endforeach
@endif -->


<div>
     
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                 <h2 class = "text-center my-5">Add New User</h2>
                <form method="post" action="add">
                    @csrf
        <input type="text" name="username" placeholder = "enter name" class = "form-control mb-3 {{$errors->first('username')?'is-invalid input-error' : ''}}" value = "{{old('username')}}"> 
     
        <span style = "color:red;">@error('username'){{$message}}@enderror</span>
         <input type="text" name="email" placeholder = "enter email" class = "form-control mb-3 {{$errors->first('email')?'is-invalid input-error' : ''}}" value = "{{old('email')}}"> 
           <span style = "color:red;">@error('email'){{$message}}@enderror</span>
          <input type="text" name="city" placeholder = "enter city" class = "form-control mb-3 {{$errors->first('city')?'is-invalid input-error' : ''}}" value = "{{old('city')}}"> 
            <span style = "color:red;"> @error('city'){{$message}} @enderror</span>
          <button class = "btn btn-warning form-control mb-3" >add new user</button>
</form>
            </div>
        </div>
     </div>
</div>
 