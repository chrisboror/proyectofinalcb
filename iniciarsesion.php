<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>INICIO</title>
    <link rel="stylesheet" href="css.css">
  
  </head>
  <body>
      <br><br>
      <div class="container">
        <div class="btn-group w-100" role="group" aria-label="Basic exaple">
          <a href="productos.php" class="btn btn-dark">Productos/Servicios</a>
          <a href="tiendas.php" class="btn btn-dark">Tiendas</a>
          <a href="contactenos.php" class="btn btn-dark">Contactenos</a>
        </div>
    </div>
    <br><br><br>
    <center>
      <div class="container">
        <div class="card" style="width: 18rem;">
          <img src="imagenes/s.png" class="card-img-top" alt="...">
          <div class="card-body">

      <form action="usucon.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="text" class="form-control" placeholder="&#Xf007;" name="usuario">
        </div>
        <br>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="password" class="form-control" placeholder="&#Xf023;" name="contraseña">
          </div>
          <div class="mb-3 form-check">
          </div>
          <center><div class="d-grip gap-2">
            <input type="submit" value="Aceptar" name="Enviar">
          </form>
          </div>
          </div>
        </center>

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