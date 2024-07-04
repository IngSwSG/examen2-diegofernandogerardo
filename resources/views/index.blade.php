<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiales</title>
    <!-- Estilos de Bootstrap (incluir desde CDN o descargar e incluir localmente) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos CSS personalizados -->
    <style>
        /* Estilo para centrar verticalmente el contenido */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 40px; /* Espacio superior */
            padding-bottom: 40px; /* Espacio inferior */
            background-color: #f5f5f5; /* Color de fondo */
        }
        .card {
            width: 100%;
            margin-top: 0; /* Elimina el margen superior para ajustar la tarjeta */
            margin-bottom: auto; /* Ajusta el margen inferior para centrar verticalmente */
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
                        <a href="/materiales/create" class="btn btn-primary btn-sm float-right">Agregar Material</a>
                    </div>

                    <div class="card-body">
                        <!-- Mensaje de éxito (si hay uno) -->
                        <?php if(isset($_SESSION['success'])): ?>
                            <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                        <?php endif; ?>

                        <table class="table table-striped">
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
                                <!-- Iteración sobre los materiales (sustituir por PHP si es necesario) -->
                                <tr>
                                    <td>1</td>
                                    <td>Ejemplo Material</td>
                                    <td>Unidad</td>
                                    <td>Ubicación Ejemplo</td>
                                    <td>Categoría Ejemplo</td>
                                    <td>
                                        <a href="/materiales/edit/1" class="btn btn-sm btn-primary">Editar</a>
                                        <!-- Formulario para eliminar (opcional) -->
                                        <!--
                                        <form action="/materiales/delete/1" method="POST" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                        -->
                                    </td>
                                </tr>
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
