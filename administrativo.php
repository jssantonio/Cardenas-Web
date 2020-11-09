<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0458944bda.js" crossorigin="anonymous"></script>
    <title>Dragones Cárdenas</title>
</head>
<body>
    <header class="header">
        <div class="container logo-nav-container">
            <img src="imagenes/logo-blanco.png" alt="logo" class="logo">
            <span class="menu-icon">Ver menú</span>
            <nav class="navigation">
                <ul class="show">
                    <li><a href="index.php">Noticias</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Confimaciones</a></li>
                    <li><a href="contacto.php">Seguridad</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="main">
        <?php
            $usuario=$_GET["varUser"];
            // $pruebausuario = "JIC-678302";
            $mysqli = new mysqli("localhost", 'root', '','CardenasDB');
            if($mysqli->connect_errno){
                echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
            }
            $sqlNombre = "SELECT first_name FROM manager WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlNombre);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Nombre = $row['first_name'];
                }
                echo '<h1>Bienvenido  '.$Nombre.'</h1></div>';
            }
            else{ echo '<h1>Falló</h1>';}

            $sqlNacimiento = "SELECT birthdate FROM manager WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlNacimiento);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Nacimiento = $row['birthdate'];
                }
            }
            else{ echo '<h1>Falló</h1>';}

            $sqlNumero = "SELECT phone_num FROM manager WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlNumero);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Numero = $row['phone_num'];
                }
            }
            else{ echo '<h1>Falló</h1>';}
            $sqlCorreo = "SELECT email FROM manager WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlCorreo);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Correo = $row['email'];
                }
            }
            else{ echo '<h1>Falló</h1>';}

            $sqlPuesto = "SELECT occupation FROM manager WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlPuesto);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Puesto = $row['occupation'];
                }
            }
            else{ echo '<h1>Falló</h1>';}

            $sqlGrado = "SELECT color FROM manager INNER JOIN belt on manager.belt_id3 = belt.belt_id WHERE reg_code = '".$usuario."'";
            $resultado = $mysqli->query($sqlGrado);
            if($resultado->num_rows >0){
                while($row = $resultado->fetch_assoc()){
                    $Grado = $row['color'];
                }
            }
            else{ echo '<h1>Falló</h1>';}
            
            echo '<div> <p>Puesto: '.$Puesto.'</p>
                        <p>Grado: '.$Grado.'</p>
                        <p>Fecha de nacimiento: '.$Nacimiento.'</p>
                        <p>Correo electrónico: '.$Correo.'</p>
                        <P>Número telefónico: '.$Numero.'</p>
                        '
        ?>

    </main>

    <footer class="footer">
        <div class="contanier-img">
          <img class="contanier_img" src="imagenes/codeme.jpg" alt="contanier_img">
          <img class="contanier_img"src="imagenes/conade.png" alt="contanier_img">
          <img class="contanier_img"src="imagenes/wbc.png" alt="contanier_img">
          <img class="contanier_img"src="imagenes/whusu.jpg" alt="contanier_img">
          <p align=center href="#" class="bob"> <b> © Dragones Cárdenas® Todos los Derechos Reservados. </p>
          <p align=center href="#" class="bobi"> Términos y Condiciones </p>
          <p align=center href="#" class="bobs"> Política de Privacidad </p> </b>
        </div>
    </footer>
    
</body>
</html>