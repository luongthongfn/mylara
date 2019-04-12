<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test upload</title>
</head>
<body>
    <form action="{{ route('postUpload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        file 1: <input type="file" name="test_file" id="test_file">
        <br/>
        files 2: <input type="file" name="test_file2[]" id="test_file2[]" multiple>
        <br/>
        <div id="app"></div>
        <button type="submit">send</button>
    </form>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>