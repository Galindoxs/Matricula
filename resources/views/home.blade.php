<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pagina Principal Matricula</title>
</head>
<body>
    <div>
        <h1>Registro Matricula</h1>
    </div>
    <br>
    <br>

    <a href="{{route('alumno.create')}}"> Agregar Registro</a>
    <br><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>CodigoAlumno</th>
                    <th>nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>telefono</th>
                    <th>Direccion</th>
                    <th>CodigoCarrera</th>
                    <th>FechaNac</th>
                    <th>Numero Cuenta</th>
                </tr>
            </thead>
            <body>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->codigoAlumno}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellido}}</td>
                        <td>{{$alumno->correo}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->direccion}}</td>
                        <td>{{$alumno->codigoCarrera}}</td>
                        <td>{{$alumno->fechaNac}}</td>
                        <td>{{$alumno->numeroCuenta}}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    
</body>
</html>