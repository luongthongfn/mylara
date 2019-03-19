<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>

    <form action="{{route('postLogin')}}" method="POST">
        @csrf
        <label for="">user name</label>
        <input type="text" name="user">
        <span>{{$errors->first('user')}}</span>
        <br />

        <label for="">Pass</label>
        <input type="password" name="pass">
        <span>{{$errors->first('pass')}}</span>
        <br />

        <input type="submit" value="send">



    </form>
</body>

</html>
