<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de base</title>
</head>
<body>
    <div style="padding: 30px;">
        <h1 style="font-size: 20px;">Conversión de base</h1>
        <form action="" method="post">
            <label for="quantity" style="display: block;">
                <span style="display: inline-block;width: 60px;margin-bottom: 15px;">Cantidad:</span>
                <input type="number" name="quantity" id="quantity" min="1" required  value="<?php echo isset($_POST["quantity"]) ? $_POST["quantity"] : ""; ?>">
            </label>
            <label for="base" style="display: block;">
                <span style="display: inline-block;width: 60px;margin-bottom: 15px;">Base:</span>
                <input type="number" name="base" id="base" min="2" required value="<?php echo isset($_POST["base"]) ? $_POST["base"] : ""; ?>">
            </label>

            <input type="submit" value="Conversión">
        </form>

        <?php 
            if (isset($_POST["quantity"]) AND isset($_POST["base"])) { /** Comprobar existencia de parametros. */
                $quantity = $_POST["quantity"];
                $base = $_POST["base"];
                $conversion = array();/** Arreglo donde se guardan los residuos y el último cociente. . */

                while ($quantity >= $base) { /**  Si el número a dividir es menor que la base, saldrá del bucle. */
                    $conversion[] = $quantity % $base; /** Se guarda el residuo. */
                    $quantity = $quantity / $base; /** Se divide el número y se conserva el cociente. */

                    if ($quantity < $base) { /** Se evalua si el cociente actual es menor a la base si es el caso seria el ultimo cociente. */
                        $conversion[] = floor($quantity); /** Se redondea el cociente al número inferior y se guarda. */
                    }
                }
                
                $res = ""; /** Variable con donde se organizará el número resultante. */
                for ($i=(count($conversion) - 1); $i >= 0; $i--) { /** Se invierte el orden del arreglo. */
                    $res .= $conversion[$i];
                }

                echo '<p>'. $_POST["quantity"] . '<sub><small>10</small></sub> = '. $res . '<sub><small>'. $_POST["base"] . '</small></sub></p>';
            }
        ?>
    </div>
</body>
</html>