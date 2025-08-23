<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- print user added successfull message -->
@if (session('message'))
 <span class = "success-message">{{ session('message') }}</span>
@endif


<!-- print username
@if (session('message'))
 <span class = "success-message">{{ session('username') }}</span>
@endif -->



<!-- -permenant show username
{{ session()->keep(['username']) }} -->

<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
    <h1>ADD NEW USER</h1>
    <form action="/add" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter name" class="form-control">
        <br>
        <br>
        <input type="text" name="email" placeholder="enter email" class="form-control">
        <br>
        <br>
         <input type="text" name="phone" placeholder="enter phone" class="form-control">
        <br>
        <br>
          <button class="btn btn-dark">submit</button>
    </form>
 </div>
    </div>
</section>

<style>
    .success-message{
    background-color:lightgreen;
    border-radius:2px;
    padding:2px 20px;
    margin-bottom:10px;
    display:inline-block;

}
</style>