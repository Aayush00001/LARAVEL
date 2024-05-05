<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>
<form action=""method="post">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
<table>
    <tr>
        <th>id</th>
        <th>fname</th>
        <th>lname</th>
    </tr>
    @foreach($val as $req)
    <tr>
        <td>{{$req->id}}</td>
        <td>{{$req->fname}}</td>
        <td>{{$req->lname}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>