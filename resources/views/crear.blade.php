<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear nuevo Registro alumno</title>
</head>
<body>
    <h1>Crear nuevo Registro</h1><br>

    <form action='{{route('alumno.store')}}' method="POST"></form>    
    
    <div><label>nombre</label>          <input type="text" name="nombre"></div>
    <div><label>apellido</label>        <input type="text" name="apellido"></div>
    <div><label>Correo</label>          <input type="text" name="correo"></div>
    <div><label>telefono</label>        <input type="text" name="telefono"></div>
    <div><label>Direccion</label>       <input type="text" name="direccion"></div>
    <div><label>Codigo Carrera</label>  <input type="text" name="codigoCarrera"></div>
    <div><label>Fecha de nacimiento</label><input type="text" name="fechaNac"></div>
    <div><label>numero Cuenta</label>   <input type="text" name="numeroCuenta"></div>

    <div><button type="submit" class="btn btn-success">Guardar</button></div>
    
    
</body>
</html>