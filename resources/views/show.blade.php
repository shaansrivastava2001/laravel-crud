<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Todo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <h2 class="text-center text-info mt-5">Table of Users</h2>
            <hr>
            <h3 class="text-success">{{session('msg')}}</h3>
            <br>
            <a href="create"><button class="btn btn-success">Add Record</button></a>
            <table class="table mt-4">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($todoArr as $todo)
                    <tr>
                        <td>{{$todo->id}}</td>
                        <td>{{$todo->name}}</td>
                        <td>{{$todo->email}}</td>
                        <td>{{$todo->age}}</td>
                        <td>{{$todo->created_at}}</td>
                        <td><a href="delete/{{$todo->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
