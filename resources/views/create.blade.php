<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Todo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container mt-3">
            <h2 class="text-center text-info mt-5">Fill out your details</h2>
        <!--<form method="post" action="submit">-->
                <!--@csrf-->

            {!! Form::open([
                'url' => 'submit',
                'method' => 'post',
                'style' => 'margin-top:50px;'
            ])  !!}
                <div class="mb-3">
                    <!--<input type="text" class="form-control" name="name" id="name" placeholder="Name">-->
                    {!! Form::text('name','',[
                        'class' => 'form-control',
                        'id' => 'name',
                        'placeholder' => 'Name'
                    ]) !!}
                </div>
                <div class="mb-3">
                    <!--<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">-->
                    {!! Form::text('email','',[
                        'class' => 'form-control',
                        'id' => 'email',
                        'placeholder' => 'Email'
                    ]) !!}
                </div>
                <div class="mb-3">
                    <!--<input type="number" class="form-control" id="age" name="age" placeholder="Age">-->
                    {!! Form::number('age','',[
                        'class' => 'form-control',
                        'id' => 'age',
                        'placeholder' => 'Age'
                    ]) !!}
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-info text-white" placeholder="Submit">
                </div>
            {!! Form::close() !!}
        <!--</form>-->
        </div>
    </body>
</html>
