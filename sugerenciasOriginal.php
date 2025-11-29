<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'?>
<body>
<?php include_once 'nav.php';?>
<div class='container'>
        <div class='recuadro'>
        <form action='https://laordeniberica.free.nf' method='POST'>
        <label>Nombre</label><input type='text' id='name' minlength="3" maxLength="20"> <br>
        <label>Texto</label> <br>
          <textarea id="comentario" name="text" rows="4" style='width:100%;' placeholder="Escribe aquí tu sugerencia" minlength="10" maxlength="400"></textarea>
        <input type='submit'>
        </form>
        </div>
    </div>
    <script>mostrarModal("SECCIÓN EN PROCESO DE CREACIÓN");</script>
</body>
</html>