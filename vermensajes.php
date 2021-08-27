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
        </div>
    </div>
 <br><br><br><br>
 <div class="container">
     <div class="col-12">
         <table class="table table-dark table-hover">
         <thead>
         <tr>
         <th scope="col">nomensaje</th>
         <th scope="col">Nombre</th>
         <th scope="col">Telefono</th>
         <th scope="col">Correo</th>
         <th scope="col">Mensaje</th>
         </tr>
         </thead>
         <tbody>
         <?php
    $query="SELECT * FROM mensajes";
    $resultat=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($resultat)){ ?>
    <tr>
    <td><?php echo $row ['nomensaje'] ?> </td>
    <td><?php echo $row ['nombre'] ?> </td>
    <td><?php echo $row ['telefono'] ?> </td>
    <td><?php echo $row ['correo'] ?> </td>
    <td><?php echo $row ['mensaje'] ?> </td>
    </tr> 

    <?php } ?>

    </tbody>
    </table>
        </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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