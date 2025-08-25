<div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-6 text-center">
                <h3>Edit student data</h3>
                <form action="/edit-student/{{ $data->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">

                    <input type="text" name="name" placeholder="enter name" class="form-control" value="{{$data->name }}">
                    <br>
                    <input type="text" name="email" placeholder="enter email" class="form-control" value="{{$data->email }}">
                    <br>
                    <input type="int" name="phone" placeholder="enter phone" class="form-control" value="{{$data->phone }}">
                    <br>
                    <button class="btn-dark form-control">update</button>

                    <a href="{{ url('list-student') }}" class="btn btn-secondary form-control">Cancel</a>

                </form>
            </div>
        </div>
    </div>