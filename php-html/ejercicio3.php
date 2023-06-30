<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hugo Erhubey Quintana Ledesma">
    <title>Ejercicio 3</title>
</head>
<body>
    <div style="display: flex; align-items: center; flex-direction: column; padding: 3rem; margin: 3rem; border: 2px solid black">
        <h1 style="margin-bottom: 1.5rem">Ejercicio 3</h1>
        <p>Introduce tu nombre en el siguiente campo:</p>
        <form method="post">
            <input type="text" name="txtUserName" id="">
            <input type="submit" value="Listo">
        </form>
        <?php
            if(isset($_POST['txtUserName']) && $_POST['txtUserName'] != "") {
                $userName = trim($_POST['txtUserName']);

                echo "<h3> Hola ".$userName.", bienvenido/a a mi proyecto.</h3>";
            }
        ?>
    </div>
</body>
</html>