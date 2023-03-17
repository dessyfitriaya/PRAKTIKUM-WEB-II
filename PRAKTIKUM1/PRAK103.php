<?php 
    $GLOBALS['celcius'] = 37.871;
    define("CELCIUS", 5);
    define("FAHRENHEIT", 9);
    define("REAMUR", 4);
    define("KELVIN", 273);

    function celciusToFahrenheit() {
        $fahrenheit = ((FAHRENHEIT/CELCIUS)*$GLOBALS['celcius']) + 32;

        printf("Fahrenheit (F) = %.4f", $fahrenheit);
    }

    function celciusToReamur() {
        $reamur = ((REAMUR/CELCIUS)*$GLOBALS['celcius']);

        printf("<br>Reamur (R) = %.4f", $reamur);
    }

    function celciusToKelvin() {
        $kelvin = $GLOBALS['celcius'] + KELVIN;

        printf("<br>Kelvin (K) = %.4f", $kelvin);
    }

    celciusToFahrenheit();
    celciusToReamur();
    celciusToKelvin();
?>