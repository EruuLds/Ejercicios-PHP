<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hugo Erhubey Quintana Ledesma">
    <title>Ejercicio 2</title>
</head>
<body>
    <div style="display: flex; align-items: center; flex-direction: column; padding: 3rem; margin: 3rem; border: 2px solid black">
        <h1 style="margin-bottom: 1.5rem">Ejercicio 2</h1>
        <p>Introduce una palabra en el siguiente campo, y te mostraré si es un palíndromo:</p>
        <form action="" method="post">
            <input type="text" name="txtWord" id="">
            <input type="submit" value="Listo">
        </form>
        <?php
            
            if(isset($_POST['txtWord']) && $_POST['txtWord'] != "") {
                $inputWord = trim($_POST['txtWord']);
                $finalWord = str_replace(
                    array('A', 'Á', 'á', 'B', 'C', 'D', 'E', 'É','é', 'F', 'G', 'H', 'I', 'í','í', 'J', 'K', 'L', 'M', 'N', 'Ñ','O', 'Ó', 'ó', 'P', 'Q', 'R', 'S', 'T','U', 'Ú', 'Ü','ü','ú', 'V', 'W', 'X', 'Y', 'Z'),
                    array('a', 'a', 'a', 'b', 'c', 'd', 'e', 'e','e', 'f', 'g', 'h', 'i', 'i','i', 'j', 'k', 'l', 'm', 'n', 'ñ','o', 'o', 'o', 'p', 'q', 'r', 's', 't','u', 'u', 'u','u','u', 'v', 'w', 'x', 'y', 'z'),
                    $inputWord
                );
                $reverseWord = strrev($finalWord);

                if($finalWord == $reverseWord){
                    echo "<h3> La palabra '".$inputWord."'"."<b style='color: green'> es un palíndromo</b>.";
                }
                else {
                    echo "<h3> La palabra '".$inputWord."'"."<b style='color: red'> no es un palíndromo</b>.";
                }
            }
        ?>
    </div>
</body>
</html>