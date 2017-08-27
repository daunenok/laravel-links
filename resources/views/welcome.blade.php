<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1>Links</h1>
        <ul class="links">
            @foreach ($links as $link)
            <li>
                <a href=" {{ $link->url }}">
                    {{ $link->title }}
                </a>
                <p>{{ $link->description }}</p>
            </li>
            @endforeach
        </ul>
        <hr>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Attention! Something went wrong!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/submit" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" name="description" id="description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-default">Submit a link</button>
        </form>
    </div>
</div>

</body>
</html>