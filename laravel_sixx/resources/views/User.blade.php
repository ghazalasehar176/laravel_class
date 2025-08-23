<div>
    <h1>User login</h1>
    <form action="/user" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter name">
        <br>
        <br>
          <input type="password" name="password" placeholder="enter password">
          <br>
          <br>
          <button>submit</button>
    </form>
</div>
