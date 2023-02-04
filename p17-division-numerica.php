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
        <form action="" method="post">
            <p>
                <input name="dividendo" type="number" min="0" value="<?php echo isset($_POST["dividendo"]) ? $_POST["dividendo"] : ""; ?>" required >
                /
                <input  name="divisor" type="number" min="1" value="<?php echo isset($_POST["divisor"]) ? $_POST["divisor"] : ""; ?>" required >
                <?php echo (isset($_POST["dividendo"]) AND isset($_POST["divisor"])) ? " = " . ($_POST["dividendo"] / $_POST["divisor"]) : ""; ?>
            </p>

            <input  type="submit" value="Dividir">
        </form>
     </div>
</body>
</html>