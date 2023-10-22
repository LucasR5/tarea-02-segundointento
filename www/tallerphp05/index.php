<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Arreglos con PHP</h3>
        <?php 
            $nombres[] = "Juan";
            $nombres[] = "Rosa";
            $nombres[] = "Julio";
            $nombres[] = "Araceli";
            $nombres[] = "Sofia";
            //listar
            for ($indice=0; $indice < count($nombres); $indice++) { 
                echo "Nombre: " . $nombres[$indice]."<br>";
            }
        ?>
        <table class="table">
            <thead>
                <th>Nombre</th>
            </thead>
            <tbody>
                <?php 
                for ($i=0; $i < count($nombres); $i++) { 
                ?>
                <tr>
                    <td>
                        <?=$nombres[$i]?>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>


        <table class="table">
            <thead>
        <th>Forma de Pago</th>
            </thead>
            <tbody>
                <?php 
                $fpagos = array("Efectivo","Tarjeta","Transferencia","Paypal");
                for ($i=0; $i < count($fpagos); $i++) { 
                ?>
                <tr>
                    <td>
                        <?=$fpagos[$i]?>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>

    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</html>