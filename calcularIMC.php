<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //obtenemos los valores del formulario y los guardamos en una variable respectivamente
        $altura = floatval($_POST["altura"]);
        $peso = floatval($_POST["peso"]);

        //hacemos el calculo
        // imc = peso / altura^2
        $imc = $peso / ($altura * $altura);


        //la categoria o rango del imc en donde te encontrarias dependiendo del resultado imc
        if ($imc < 18.5) {
            $categoria = "Bajo peso";
        } elseif ($imc < 25) {
            $categoria = "Saludable";
        } elseif ($imc < 30) {
            $categoria = "Sobrepeso";
        } elseif ($imc < 40) {
            $categoria = "Obesidad";
        } else {
            $categoria = "Obesidad grave";
        }

        //mostramos los resultados.
        echo "<h2>RESULTADO<h2>";
        echo "<p>Tu IMC es: ".number_format($imc, 2)."<p>";
        echo "<p>Categoria: ".$categoria."<p>";
    }


?>