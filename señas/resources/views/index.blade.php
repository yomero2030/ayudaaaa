<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palabras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom:10px !important;">
                <h1>Listado de palabras</h1>
                <a href="{{asset('palabras/create')}}" class="btn btn-success">Agregar Imagen</a>
            </div>
            @foreach($palabras as $palabra)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{$palabra->palabra}}
                        </div>
                        <div class="card-body">
                            <img src="{{asset('img/'.$palabra->imagen)}}" style="width:100%; height:240px !important;" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>