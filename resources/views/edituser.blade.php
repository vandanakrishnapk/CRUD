<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center><br><br>
<form action="{{route('update.user')}}" method="post">
@csrf
<input type="hidden" name="u_id" value="{{$users->id}}">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="na" value="{{$users->name}}">
  </div><br>
  <div class="form-group">
    <label for="age">Age:</label>
  <div class="form-group">
    <input type="number" class="form-control" name="ag" value="{{$users->age}}">
  </div><br>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="email" class="form-control"name="us"  value="{{$users->username}}">
  </div><br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"name="pa" value="{{$users->password}}">
  </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</body>
</html>