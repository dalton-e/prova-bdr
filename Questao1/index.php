<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 1</title>
    </head>
    <body>
        <?php
        
        const FIZZ = "Fizz";
        const BUZZ = "Buzz";

        for ($i = 1; $i <= 100; $i++) {
            imprimirResultado($i);
        }

        function imprimirResultado($numero) 
        {
            $multiplicidadeEncontrada = false;

            if (isMultiploDe($numero, 3)) {
                $multiplicidadeEncontrada = true;
                echo FIZZ;
            }
            if (isMultiploDe($numero, 5)) {
                $multiplicidadeEncontrada = true;
                echo BUZZ;
            }
            if(!$multiplicidadeEncontrada) {
                echo $numero;
            }

            echo '<br>';
        }

        function isMultiploDe($numero, $coeficiente)
        {
            return $numero % $coeficiente == 0;
        }

        ?>
    </body>
</html>
