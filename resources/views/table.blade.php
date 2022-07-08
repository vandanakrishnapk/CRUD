<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table,th,td
        {
            border:2px solid black;
            border-collapse: collapse;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <center>
        <br>
        <br>
    <table>
        <tr>
            <th>Slno:</th>
        <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Age
            </th>
            <th>
                Username
            </th>
            <th>
                Password
            </th>
            <th colspan="2">
                Action
            </th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$users->firstitem()+$loop->index}}</td>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>  
            <td><a href="{{route('delete.user',encrypt($user->id))}}" class="btn btn-primary">Delete</a></td>
            <td><a href="{{route('edit.user',encrypt($user->id))}}" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <div>
        {{$users->links()}}
    </div>
    </center>
</body>
</html>