<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
    <h1>Login Page</h1>
    <form action="/log" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter name" class="form-control">
        <br>
        <br>
          <input type="password" name="password" placeholder="enter password" class="form-control">
          <br>
          <br>
          <button class="btn btn-dark">submit</button>
    </form>
 </div>
    </div>
</section>
