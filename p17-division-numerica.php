<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División de números</title>
</head>
<body>
     <div style="padding: 30px;">
        <h1 style="font-size: 20px;">División de números</h1>
        <form action="" method="post">
            <label for="dividend">
                <input id="dividend" name="dividend" type="number" min="0" value="<?php echo isset($_POST["dividend"]) ? $_POST["dividend"] : ""; ?>" required >
            </label>
            /
            <label for="divider">
                <input id="divider" name="divider" type="number" min="1" value="<?php echo isset($_POST["divider"]) ? $_POST["divider"] : ""; ?>" required >
            </label>

            <?php 
                if (isset($_POST["dividend"]) AND isset($_POST["divider"])) { /** Comprobar existencia de parametros. */
                    echo " = " . ($_POST["dividend"] / $_POST["divider"]); /** Division de numeros y escritura del resutado. */
                }
            ?>

            <div style="padding-top: 20px;">
                <input type="submit" value="Dividir">
            </div>
        </form>
     </div>
</body>
</html>