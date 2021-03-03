<h1>Upload File</h1>
<form action="fileupload" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="myfile" id="">
<button type="submit">Upload file</button>
</form>