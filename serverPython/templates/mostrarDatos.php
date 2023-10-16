<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Tipo de usuario</th>
                <!-- Agrega más columnas según tu base de datos -->
            </tr>
        </thead>
        <tbody>
            {% for dato in datos %}
            
            <tr>
                <td scope="row">{{ dato[0] }}</td>
                <td>{{ dato[1] }}</td>
                <td>{{ dato[9] }}</td>
                <td>{{ dato[10] }}</td>
                <td>{{ dato[12] }}</td>
                <!-- Agrega más celdas según tu base de datos -->
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
