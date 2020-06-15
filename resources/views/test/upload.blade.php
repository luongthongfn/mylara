<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test upload</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/72px color.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <form action="{{ route('postUpload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        file 1: <input type="file" name="test_file" id="test_file">
        <br/>
        {{-- files 2: <input type="file" name="test_file2[]" id="test_file2[]" multiple> --}}
        <br/>
        <div id="app"></div>
        <button type="submit">send</button>
    </form>
    <script src="{{asset('js/app.js')}}"></script>
    {{-- ============================================ --}}
    <hr>
    <div class="input-group">
        <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-picture-o"></i> Choose
            </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="filepath">
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>


</body>
</html>