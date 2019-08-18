<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
    @if(session('mensaje'))
    <div class="alert alert-success"> {{session('mensaje')}}</div>
    @endif
</div>

<div class="container panel-body">
    <div class="user">
        <header class="user__header">
            <h1 class="user__title">Registro de Usuarios y Vehículos</h1>
        </header>

        <form class="form" action="{{route('duenos.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="number" placeholder="cedula" class="form-input" name="cedula" />
                {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <input type="text" placeholder="nombre" class="form-input" name="nombre" />
                {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <input type="text" placeholder="placa" class="form-input" name="placa" />
                {!! $errors->first('placa', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <select name="marca">
                    <option value="MAZDA">Mazda</option>
                    <option value="TOYOTA">Toyota</option>
                    <option value="CHEVROLET">Chevrolet</option>
                </select>
                {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
            </div>
            <button class="btn btn-primary" type="submit">Registrar</button>
        </form>
    </div>

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