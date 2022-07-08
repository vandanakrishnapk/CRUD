<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center><br><br>
<form action="{{route('save.user')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" name="na">
  </div><br>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" name="ag">
  </div><br>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="email" class="form-control" name="us">
  </div><br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pa">
  </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</body>
</html>