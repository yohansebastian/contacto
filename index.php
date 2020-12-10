<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6LeXmvEZAAAAAPztHBqY9OV0YYJW4aroryy6uVFQ"></script>

</head>
<main>

  <body>

    <form action="index.php" method="POST" id="formulario">

      <div class="col">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="requered">
      </div>
      <div class="col">
        <label for="telefono">Número Telefonico</label>
        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono"
          required="requered">
      </div>
      <div class="col">
        <label for="email">Correo Electronico</label>
        <input type="mail" class="form-control" name="email" id="email" placeholder="Correo Electronico"
          required1="requered">
      </div>
      <div class="col">
        <label for="mensaje">Mensaje : </label>
      </div>
      <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje aqui" id="mensaje" cols="30"
        rows="10"></textarea>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">Acepto Terminos y condiciones</label>
        </div>
        <br>
        <div class="form-group">
          <button type="submit">Enviar </button>
        </div>


    </form>
</main>
<script>
  $('#form').submit(function (event) {
    event.preventDefault();

    grecaptcha.ready(function () {
      grecaptcha.execute('6LeXmvEZAAAAAPztHBqY9OV0YYJW4aroryy6uVFQ', {
        action: 'registro'
      }).then(function (token) {
        $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
        $('#form').prepend('<input type="hidden" name="action" value="registro">');
        $('#form').unbind('submit').submit();
      });;
    });
  });
</script>



<script src="js/formulario.js"></script>
</body>

</html>