<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title> HTML pdf</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1>{{$title}}</h1>
            <p>{{$date}}</p>
        </div>
        <div class="col-sm-2"></div>
    </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
        </div>
        <div class="col-sm-2"></div>
    </div>
     <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            @yield('content')
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
</body>
</html>