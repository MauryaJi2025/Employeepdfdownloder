<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Basic HTML Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h1 class="text-center">{{$title}}</h1>
                <p class="text-end small text-muted mt-3">{{$date}}</p>
                <table class="table table-bordered">
                    <tr style="color:red">
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Designation</td>
                        <td>Salary</td>
                    </tr>
                    @foreach ($getReocrd as $value)
                        <tr>
                            <td style="color:red">{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->designation}}</td>
                            <td>{{$value->salary}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>    
    </div>
</body>
</html>
