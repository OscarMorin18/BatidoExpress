<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<meta name="author" content="Batido Express" />
    <meta http-equiv="Description" content="Batido Express" />
    <meta http-equiv="Keywords" content="Batidos, Jugos, Frutas, Verduras, Detox, Juice, Fruit" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/fontello.css">
    <link rel="stylesheet" type="text/css" href="CSS/display-g.css" media="screen and (min-width:981px)"/>
    <link rel="stylesheet" type="text/css" href="CSS/display-m.css" media="screen and (min-width: 481px) and (max-width:980px)"/>
    <link rel="stylesheet" type="text/css" href="CSS/display-p.css" media="screen and (max-width:480px)"/>
    <script type="text/javascript" src="Js/Validacion.js"></script>

	<title>Batido Express - Registrate</title>

</head>

<body id="Rgt">


    <?php 

        $conex = mysqli_connect("localhost","Oscar","","BatidoExpress");

        if(!$conex){

        die ("No se pudo establecer la conexión con el servidor ni seleccionar la Base de Datos ");
        }

        if (isset($_POST['btnSend'])) {

            if (strlen($_POST['Nom']) < 1 || 
                strlen($_POST['Ape']) < 1 || 
                strlen($_POST['Cor']) < 1 || 
                strlen($_POST['Tel']) < 1 || 
                strlen($_POST['Dir']) < 1  ) {

                header("Location: Registrate.php");

            } else {

        $nombre   = $_POST["Nom"];
        $apellido = $_POST["Ape"];
        $mail     = $_POST["Cor"];
        $phone    = $_POST["Tel"];
        $address  = $_POST["Dir"];
        $msj      = $_POST["msj"];

        $insertar = "INSERT INTO Registro(nomRe,apeRe,mailRe,telRe,dirRe,msjRe) VALUES ('$nombre','$apellido','$mail','$phone','$address','$msj')";
        
        $resultado= mysqli_query($conex,$insertar);

        if (!$resultado){

            die ("Error en la línea de SQL");
        } else {

            echo "alert('Te registraste correctamente')";
        }

        header("Location: Home.html");

        }

    }


    ?>

    <input type="checkbox" id="bmenu"/>
    <label for="bmenu" class="icon-menu"></label>

    <ul>

        <li class="log"><a href="Home.html"><img src="Imagenes/LC.png" height="140px" width="140"/></a></li>
        <li><a id="Rgte" href="Registrate.php">Regístrate</a></li>
        <li><a href="Contactanos.html">Contáctanos</a></li>
        <li><a href="Beneficios.html">Beneficios</a></li>
        <li><a href="Recetas.html">Recetas</a></li>
        <li><a href="Nosotros.html">Nosotros</a></li>
        <li><a href="Productos.html">Productos</a></li>

    </ul>

    <section id="Formulario">

    <form id="Registro" name="Registrarse" method="POST">

        <div id="form">

        <label for="name">Nombre *</label>
        <input type="text" id="name" name="Nom" placeholder="Nombre" required>

        <label for="lastname">Apellidos *</label>
        <input type="text" id="lastname" name="Ape" placeholder="Apellidos" required>

        <label for="email">Correo Electrónico *</label>
        <input type="text" id="email" name="Cor" placeholder="Correo Electrónico" required>

        <label for="names">Teléfono *</label>
        <input type="number" id="phone" name="Tel" placeholder="Teléfono" required>

        <label for="address">Dirección *</label>
        <input type="text" id="address" name="Dir" placeholder="Dirección" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="msj" placeholder="Escribir Mensaje"></textarea>
        <input type="submit" value="Enviar Mensaje" id="btnSend" name="btnSend" onclick="CheckForm();">

    </div>
    </form>

    <div id="Pub2"> 
        <img src="Imagenes/B2.gif">
    </div>
    <div id="Pub3">
         <img src="Imagenes/B10.png">
    </div>
    </section>
    <footer>
        <ul>
            <li><p>Batido Express | 092 478 923 | batidoexpress@gmail.com | Montevideo, Uruguay</p></li>
        </ul>
    </footer>

</body>
</html>