<div>
    <h1>User data</h1>
    <!-- {{ print_r($data) }} -->
      
    <ul>
        <li>
            <span>Name:</span><span><b>{{$data[0]->name}}</b></span>
        </li>
         <li>
            <span>User:</span><span><b>{{$data[0]->username}}</b></span>
        </li>
         <li>
            <span>Email:</span><span><b>{{$data[0]->email}}</b></span>
        </li>
         <li>
            <span>Website:</span><span><b>{{$data[0]->website}}</b></span>
        </li>
         <li>
            <span>Phone:</span><span><b>{{$data[0]->phone}}</b></span>
        </li>
    </ul>
</div>
