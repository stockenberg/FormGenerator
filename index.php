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
        "before" => "<div class='row'>",
        "label" => "Firstname",
        "element" => "Input",
        "classes" => "validate",
        "wrapperClasses" => "col m5 l5 s5",
        "type" => "text"
    ],
    [
        "label" => "Firstname",
        "element" => "Input",
        "classes" => "validate",
        "wrapperClasses" => "col m5 l5 s5 push-m2",
        "type" => "text",
        "after" => "</div>",
    ],
    [
        "label" => "E-Mail-Adresse",
        "element" => "Input",
        "classes" => "validate",
        "wrapperClasses" => "col m12 l12 s12 ",
        "type" => "email",
    ],
    [
        "label" => "Message",
        "element" => "Textarea",
        "classes" => "",
        "wrapperClasses" => "row col m12 l12 s12"
    ],
    [
        "label" => "Ach akzeptiere die <a href='agb'>AGB</a>",
        "element" => "Input",
        "type" => "checkbox-switch",
        "ID" => "agb",
        "classes" => "",
        "wrapperClasses" => "row col push-m7 m5 l5 s5"
    ],
    [
        "element" => "Input",
        "value" => "submit",
        "type" => "submit",
        "classes" => "btn col m12 s12 l12"
    ],
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
<br/><br/><br/><br/>
<div class="row" style="width: 60%; margin: auto;">
    <form action="">
        <?= $formFields->Output(); ?>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>






