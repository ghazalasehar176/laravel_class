<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-6 text-center">
            <h3>Create Table</h3>
            <form action="add" method="post">
                @csrf
                <input type="text" name="name" placeholder="enter name" class="form-control">
                <br>
                <input type="text" name="email" placeholder="enter email" class="form-control">
                <br>
                <input type="int" name="phone" placeholder="enter phone" class="form-control">
                <br>
                <button class="btn-dark form-control">Create</button>
            </form>
        </div>
    </div>
</div>