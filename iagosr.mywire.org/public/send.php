<?php

function start()
{
    $error = true;
    //asegurar petición post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_GET as $field => $var) {
            // Make sure each one exists and is not empty, is set and is numeric 
            if (!empty($var) || !isset($var) || !is_numeric($var)) {
                $error = TRUE;
                break;
            }
        }
    }
    return $error;
}

function init()
{        // Cargando las variables desde el formulario
    $campo1 = validate($_POST["campo1"]) ? $_POST["campo1"] : null;
    $campo2 = validate($_POST["campo2"]) ? $_POST["campo2"] : null;
    $campo3 = validate($_POST["campo3"]) ? $_POST["campo3"] : null;
    $campo4 = validate($_POST["campo4"]) ? $_POST["campo4"] : null;
    $arr = compact($campo1, $campo2, $campo3, $campo4);
    global $arr;
}
function showNumbers()
{
    $message = "</br>Numeros recibidos por metodo POST: ";
    foreach ($arr as $value => $number) {
        $message .= " " . $number;
    }
    echo $message;
}

function sum()
{
    $message = "El resultado de la suma de los campos es: ";
    $sum = 0;
    foreach ($GLOBALS['required'] as $r) {
        $sum += intval($_POST[$r]);
    }
    $message += strval($sum);
    echo $message;
}
function multiplication()
{
    $message = "El resultado de la multiplicacion de los campos es: ";
    $mult = 1;
    foreach ($GLOBALS['required'] as $r) {
        $mult *= intval($_POST[$r]);
    }
    $message += strval($mult);
    echo $message;
}
function div()
{
    $message = "El resultado de la division del primer campo entre el tercero es: ";
    $div = $_POST['campo1'] / $_POST['campo3'];
    $message += strval($div);
    echo $message;
}
function res()
{
    $message = "El resultado del residuo del primer entre el segundo campo es: ";
    $res = $_POST['campo1'] % $_POST['campo2'];
    $message += strval($res);
}
function isGreater()
{
    $message = "¿El primer numero es mayor que el tercero? ";
    $res = $_POST['campo1'] > $_POST['campo2'] ? "Sí" : "No";
    return $res;
}

function main()
{
    if (start()) {
        echo "Proceed...";
        showNumbers();
        //sum();
        //multiplication();
        //div();
        //res();
        //isGreater();
    } else {
        echo "All fields are required.";
    }
}
main();
