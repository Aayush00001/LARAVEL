<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>

<form action="" method="post">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
<center>
<table border="20">
    <tr>
        <td>id</td>
        <td>fname</td>
        <td>lname</td>
    </tr>
    @foreach ($val as $req)
    <tr>
        <td>{{$req->id}}</td>
        <td>{{$req->fname}}</td>
        <td>{{$req->lname}}</td>
    </tr>
    @endforeach
</center>
</body>
</html>