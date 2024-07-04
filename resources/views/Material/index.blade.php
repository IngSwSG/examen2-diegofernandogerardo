<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiales</title>
    <!-- Estilos de Bootstrap (incluir desde CDN o descargar e incluir localmente) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos CSS personalizados -->
    <style>
        /* Estilo para centrar verticalmente el contenido */
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 40px;
            /* Espacio superior */
            padding-bottom: 40px;
            /* Espacio inferior */
            background-color: #f5f5f5;
            /* Color de fondo */
        }

        .card {
            width: 100%;
            margin-top: 0;
            /* Elimina el margen superior para ajustar la tarjeta */
            margin-bottom: auto;
            /* Ajusta el margen inferior para centrar verticalmente */
        }
    </style>
</head>

<body class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Lista de Materiales
                        <a href="{{ route('materials.create') }}" class="btn btn-primary btn-sm float-right">Agregar
                            Material</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('materials.index') }}" method="GET">
                            <input type="text" name="search" value="{{ $search }}" placeholder="Buscar...">
                            <select name="categoria_id" id="categoria_id">
                                <option value="">Todas las categorías</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ $categoria->id == request('categoria_id') ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                        </form>
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Unidad de Medida</th>
                                    <th>Ubicación</th>
                                    <th>Categoría</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materiales as $material)
                                    <tr>
                                        <td>{{ $material->codigo }}</td>
                                        <td>{{ $material->descripcion }}</td>
                                        <td>{{ $material->unidadMedida }}</td>
                                        <td>{{ $material->ubicacion }}</td>
                                        <td>{{ $material->categoria->nombre }}</td>
                                        <td>
                                            <a href="{{ route('materials.edit', $material->codigo) }}"
                                                class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('materials.destroy', $material->codigo) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>