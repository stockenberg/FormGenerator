<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 00:27
 */
require "vendor/autoload.php";

$formFields = new \FormGenerator\Views\FormMaterialize("Register");

$config = [
    [
        "label" => "Vorname",
        "name" => "firstname",
        "id" => "firstname",
        "type" => "checkbox",
        "element" => "Input"
    ],
    [
        "label" => "PayPal",
        "name" => "payment",
        "id" => "paypal",
        "type" => "radio",
        "element" => "Input"
    ],
    [
        "label" => "Sofort",
        "name" => "payment",
        "id" => "sofort",
        "type" => "radio",
        "element" => "Input"
    ]

];

$formFields->setConfig($config);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <title>Document</title>
</head>
<body>

<?= $formFields->Output(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>






