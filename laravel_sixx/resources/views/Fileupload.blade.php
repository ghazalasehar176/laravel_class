<div>
    
<h1>File upload</h1>
<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id=""/>
    <button>Upload file</button>
</form>
</div>
