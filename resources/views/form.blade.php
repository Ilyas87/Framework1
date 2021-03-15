<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('store') }}" method="POST" class="row m-4">
            @csrf
            <div class="col-auto">
                <input type="text" name="name" value="{{ $name ?? null }}" class="form-control" placeholder="Enter your name...">
            </div>
            <div class="col-auto p-0">
                <button type="submit" class="btn btn-primary mb-3">Send</button>
            </div>
        </form>
    </div>
</body>
</html>
