<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>PRESIDENTE</title>
</head>

<body>
    <h1>listar presidente</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">fecha_nac</th>
                <th scope="col">año</th>
                <th scope="col">dni</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presidentes as $presidente)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $presidente->nombre }}</td>{{--la variable que cree en el controlador y le paso los atributos  --}}
                    <td>{{ $presidente->apellido }}</td>
                    <td>{{ $presidente->fecha_nac }}</td> 
                    <td>{{ $presidente->año }}</td>       
                    <td>{{ $presidente->dni }}</td>             
                    <td><a href="{{ route('presidente.edit', $presidente->id) }}">Editar</a></td>{{--aca le coloco donde el controlador ese teacher.edit  --}}
                    <td>
                        <form action="{{ route('presidente.destroy', $presidente->id) }}" method="POST">{{--aca le coloco donde el controlador ese teacher.edit--}}
                            @csrf
                            @method('delete')
                            <button type="submit"  class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
