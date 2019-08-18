<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h1>Listado de Vehículos <h1>
        </center>
        <table class="table">
            <thead>
                @if (count($vehiculos) != 0)
                <trstyle="font-weight:bold; ">
                    <td scope="col">Marca</td>
                    <td scope="col">Placa</td>
                </tr>
                @endif
            </thead>
            <tbody>
                @forelse ($vehiculos as $vehiculo)
                <tr>
                    <td>{{$vehiculo->marca}}</td>
                    <td>
                        @if($vehiculo->marca == 'TOYOTA')
                        <p style="color:red; font-weight:bold; ">
                            {{$vehiculo->placa}}
                        </p>
                        @else
                        {{$vehiculo->placa}}
                        @endif
                        @if($vehiculo->marca == 'MAZDA')
                        <p style="color:green;">Los de Mazda son los mejores</p>
                        @endif
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning">
                    <h1>No se encontraron vehiculos registrados en el sistema</h1>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>