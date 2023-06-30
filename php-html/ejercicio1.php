<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hugo Erhubey Quintana Ledesma">
    <title>Ejercicio 1</title>
</head>
<body>
    <div style="display: flex; align-items: center; flex-direction: column; padding: 3rem; margin: 3rem; border: 2px solid black">
        <h1 style="margin-bottom: 1.5rem">Ejercicio 1</h1>
        <p>Introduce 10 números en los siguientes campos para ordenarlos de menor a mayor:</p>
        <form action="" method="post" style="text-align: center;">
            <input type="number" placeholder="Dato #1" name="n1"/><br>
            <input type="number" placeholder="Dato #2" name="n2"/><br>
            <input type="number" placeholder="Dato #3" name="n3"/><br>
            <input type="number" placeholder="Dato #4" name="n4"/><br>
            <input type="number" placeholder="Dato #5" name="n5"/><br>
            <input type="number" placeholder="Dato #6" name="n6"/><br>
            <input type="number" placeholder="Dato #7" name="n7"/><br>
            <input type="number" placeholder="Dato #8" name="n8"/><br>
            <input type="number" placeholder="Dato #9" name="n9"/><br>
            <input type="number" placeholder="Dato #10" name="n10"/><br>
            <input type="submit" name="numbers" value="Ordenar Números" style="margin: 1.5rem 0;">
        </form>
        <?php
            if (isset($_POST['numbers']) && $_POST['numbers'] != "") {
                $numbers = array(
                    0 => $_REQUEST['n1'],
                    1 => $_REQUEST['n2'],
                    2 => $_REQUEST['n3'],
                    3 => $_REQUEST['n4'],
                    4 => $_REQUEST['n5'],
                    5 => $_REQUEST['n6'],
                    6 => $_REQUEST['n7'],
                    7 => $_REQUEST['n8'],
                    8 => $_REQUEST['n9'],
                    9 => $_REQUEST['n10'],
                );
                
                echo "<h3>Los números ingresados sin ordenar son:</h3>";
                foreach ($numbers as $number) {
                    echo "| ".$number." |";
                }

                sort($numbers, SORT_NUMERIC);

                echo "<h3>Los números ingresados, ordenados de forma ascendente, son:</h3>";
                foreach ($numbers as $number) {
                    echo "| ".$number." |";
                }
            }
        ?>
    </div>
</body>
</html>