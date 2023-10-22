<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once dirname(__FILE__,3).'/php/config/header.php';
    ?>
    <title>Recuperar Record</title>
</head>
<body>
<?php 
    require_once dirname(__FILE__,3).'/php/config/menu.php';
    ?>
    <div class="container-md">
        <?php 
        $saltolinea = "\n";
        $fichero = fopen("../datos.txt","a") or die ("Mbuleo");
        fputs($fichero, $_POST['nombre'].$saltolinea);
        fputs($fichero, $_POST['apellido'].$saltolinea);
        fputs($fichero, $_POST['telefono'].$saltolinea);
        fputs($fichero, $_POST['cedula'].$saltolinea);
        fputs($fichero, "--------------------------".$saltolinea);
        fputs($fichero, "");
        fclose($fichero);
        echo "Datos Guardados Correctamente!";
        ?>

        <h2>index de recuperacion</h2>
        <form action="create.php" method="post" id="formCreate"></form>
    </div>
</body>
<?php 
    require_once dirname(__FILE__,3).'/php/config/footer.php';
    ?>
</html>