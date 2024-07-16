<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/profesor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>PRESIDENTE</title>
</head>

<body>
    {{--  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="POST" action="{{route('presidente.store')}}" enctype="multipart/form-data">{{-- aca coloco la ruta para que me guarde en la base de datos --}}
                        @csrf
                        <fieldset>
                            <legend class="text-center header">FORMULARIO PRESIDENTE</legend>
    
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="nombre" type="text" placeholder="nombre" class="form-control">{{-- donde dice ****name="nombre"****es necesario que sea igual como le colocaron en la migracion los atributos --}}
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="apellido" type="text" placeholder="apellido" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="fecha_nac" type="text" placeholder="fecha_nac" class="form-control">
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="año" type="text" placeholder="año" class="form-control">
                                </div>
                            </div>
                            <div class="form-group py-3">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="dni" type="text" placeholder="dni" class="form-control">
                                </div>
                            </div>
    
                           
                            <div class="form-group py-3">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
</body>

</html>
