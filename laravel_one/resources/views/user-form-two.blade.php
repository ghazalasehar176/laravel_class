<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div>
     
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                 <h2>add new user number two</h2>
               <form action="usertwo" method = "post">
                @csrf
                <h5>USER SKILLS</h5>
                <input type="checkbox" name="skill[]" value = "php" id="php">
                <label for="php">PHP</label>
                <input type="checkbox" name="skill[]" value = "react" id="react">
                <label for="react">React JS</label>
                <input type="checkbox" name="skill[]" value = "java" id="java">
                <label for="java">JAVA</label>
           
            </div>

             <div class="col-3">
                 <h5>USER SKILLS</h5>
                <input type="radio" name="gender" value = "male" id="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" value = "female" id="female">
                <label for="female">Female</label>
          
            </div>

            <div class="col-3">
            <h5>City</h5>
            <select name="city" id="">
                <option value="karachi">karachi</option>
                <option value="mumbai">mumbai</option>
                <option value="lahore">lahore</option>
                <option value="iran">iran</option>
            </select>
            </div>

            <div class="col-3">
                <h5>Age</h5>
                <input type="range" name="age" min="18" max ="100">
            </div>
            <button class = "btn btn-warning form-control mb-3" type = "submit">Add new user</button>
</form>
        </div>
     </div>
</div>
