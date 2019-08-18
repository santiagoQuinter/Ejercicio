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
        @if($aprobado == True)
        <center>
            <h1>Zona de inicio</h1>
        </center>

        <a href="{{route('registrarvehiculos')}}" style="text-decoration-line: none;">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Registrar Vehiculos</h5>
                    <p class="card-text">Permite el registro de los usuario(dueños) de los vehículos y sus
                        correspondientes vehiculos</p>
                </div>
            </div>
        </a>

        <a href="{{route('listarvehiculos')}}" style="text-decoration-line: none;">
            <div class="card text-white bg-secondary mb-3" style="max-width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">Listar vehículos</h5>
                    <p class="card-text">Listado de todos los vehículos registrados en el sistema</p>
                </div>
            </div>
        </a>

        <a href="{{route('estadisticasvehiculos')}}" style="text-decoration-line: none;">
            <div class="card text-white bg-success mb-3" style="max-width: 42rem;">
                <div class="card-body">
                    <h5 class="card-title">Estadisticas de Vehículos</h5>
                    <p class="card-text">Muestra los vehículos de cada tipo existentes en el sistema</p>
                </div>
            </div>
        </a>

        @else
        <div class="alert alert-warning" role="alert">
            <center>
                <h2>Zona Prohibida</h2>
            </center>
        </div>
        @endif
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