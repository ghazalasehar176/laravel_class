<div>
     <h1>User profile page</h1>

     @if( session('username'))
     <h1>Welcome , {{ session('username') }}</h1>
     @else
     <h3>No user found in session   <a href="login">Login</a></h3>
     @endif

     <a href="logout">Logout</a>
</div>
