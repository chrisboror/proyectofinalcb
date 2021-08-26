<?php include("base.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Productos/Servicios</title>
    <link rel="stylesheet" href="css.css">
  
  </head>
  <body>
 <br><br>

    </div>
    <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
        <a href="index.html" class="btn btn-dark">Inicio</a>
        <a href="tiendas.php" class="btn btn-dark">Tiendas</a>
        <a href="contactenos.php" class="btn btn-dark">Contactenos</a>
        <a href="vermensajes.php" class="btn btn-dark">Ver Mensajes</a>
        </div>
    </div>
    <br><br>
    <div class="container">
       <div style="color: antiquewhite;">
        <h3>Contactenos</h3>
     </div>
     <br><br>
    <form action="guardar.php" method="POST">
      <div class="container">
  <div class="row">
    <div class="col-12">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="nomensaje" name="nomensaje">
    <label for="floatingInput">No. mensaje</label>  
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="nombre" name="nombre">
    <label for="floatingPassword">Nombre</label>
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="telefono" name="telefono">
    <label for="floatingPassword">Telefono</label>
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="correo" name="correo">
    <label for="floatingPassword">Correo</label>
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="mensaje" name="mensaje">
    <label for="floatingPassword">Mensaje</label>
    </div>
    <br>
    <center>
    <input type="submit" class="btn btn-danger" name="enviar">
    </center>
    </div>
    <br><br><br>

        
<table class="table table-hover">
    <thead>
        <tr class="table-dark">
            <td>PBX:40321781         DIRECCION:FUENTES DEL VALLE 1,ZONA 7, SAN MIGUEL PETAPA</td>
            <td>CARNET:2019-40079   NOMBRE:CHRISTOPHER BOROR</td>
        </tr>
    </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>