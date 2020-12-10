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

<body>

    

     <main>
        <form action="enviar.php" method="POST" id="formulario" >
        <!-- Grupo: Nombre -->
            <div class="" id="nombre">
                <label for="nombre">Nombre</label>
                <div>
                     <input type="text" name="nombre" id="nombre" placeholder="John Doe" required="requered">
                </div>
                <p>El nombre tiene que ser de 3 a 58 digitos </p>
            </div>
        
        <!-- Grupo: Telefono -->
            <div class="" id="telefono">
                <label for="telefono">Número telefono</label>
                <div>
                     <input type="number" name="telefono" id="telefono" placeholder="4454849" required="requered">
                </div>
                <p></p>
            </div>
        
        <!-- Grupo: Correo Electronico -->
            <div class="" id="email">
                <label for="email">Correo Electrónico</label>
                <div>
                     <input type="email" name="email" id="email" placeholder="correo@correo.com" required="requered">
                </div>
                <p>El correo solo puede contener letras,números,puntos,guiones y guion bajo.</p>
            </div>
        
        <!-- Grupo: Mensaje -->
            <div class="" id="mensaje">
                 <label for="mensaje">Mensaje : </label>
                <div>
                    <textarea name="mensaje" id="mensaje" placeholder="Escribe tu mensaje aqui" cols="30"rows="10" required="requered"></textarea>
                </div>
                <p></p>
            </div>

        <!-- Grupo: Terminos y Condiciones -->

        <div clas="" id="terminos">
            <label>
                <input type="checkbox" name="terminos" id="terminos" required="requered">
                Acepto los Terminos y Condiciones
            </label>      
        
        </div>    

        <!-- Grupo: boton -->

        <div clas="">
            <button type="submit" name="enviar"> Enviar</button>
            <p id="Mensaje"> Mensaje enviado con exito</p>        
        </div>         
        
        
        
        
        
        
        
        
        </form>




    </main>

<script src="js/formulario.js"></script>
</body>

</html>