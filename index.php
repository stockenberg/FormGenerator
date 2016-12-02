<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 00:27
 */
require "vendor/autoload.php";

$form = new \FormGenerator\Views\FormMaterialize();

$form->addElement("Form");
$form->form = "start";
$form->action = "#";
$form->method = "post";
$form->id = "Register";

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "validate";
$form->multiple = "multiple";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];

$form->addElement("Input");
$form->before = "<div class='row'>";
$form->label = "Firstname";
$form->classes = "validate";
$form->placeholder = "myMessage";
$form->wrapperClasses = "col m5 l5 s5";
$form->type = "text";

$form->addElement("Input");
$form->after = "</div>";
$form->label = "Lastname";
$form->classes = "validate";
$form->placeholder = "type in your Lastname";
$form->wrapperClasses = "col m5 l5 s5 push-l2 push-m2";
$form->type = "text";

$form->addElement("Input");
$form->label = "E-Mail-Adresse";
$form->element = "Input";
$form->classes = "validate";
$form->wrapperClasses = "row m12 l12 s12 ";
$form->type = "email";

$form->addElement("Textarea");
$form->label = "Nachricht";
$form->classes = "validate";
$form->wrapperClasses = "row m12 l12 s12 ";

$form->addElement("Input");
$form->type = "checkbox-switch";
$form->ID = "agb";
$form->classes = "";
$form->wrapperClasses = "row m12 l12 s12";
$form->label = "Ich akzeptiere die <a href='agb'>AGB</a>";

$form->addElement("Input");
$form->type = "input";
$form->value = "submit";
$form->classes = "btn m12 l12 s12";
$form->wrapperClasses = "row m12 s12 l12";


$form->addElement("Form");
$form->form = "end";

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
    <?= $form->Output(); ?>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>






