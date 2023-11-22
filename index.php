<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Crear cuenta</title>
</head>
<body>
    <form name="index.php" action="iniciarsesion.php" method="post">
        <h1>UNETE A LA PATRULLA ARAÑA!</h1>
        <hr>

        <?php
            if(isset($_GET['error'])){

        ?>

        <p id="error">
        <?php
            echo $_GET['error']

        ?>
        </p>
        <?php
            }
        ?>

        <br>
        <hr>
        <i class= "fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="nombre" placeholder="Nombre del Usuario">

        <i class= "fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="clave" placeholder="Clave">

            <button type="submit">Crear Cuenta</button>
            

    </form>

    
</body>
</html>