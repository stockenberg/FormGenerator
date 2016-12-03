<?php

$logo = "<div>
            <pre style=\"font-family: 'Courier New'; margin-bottom: 0px; font-size: 40px; font-weight: bold;\">
m.S(t)
 {<span style=\"font-size: 0.9em;\">{web.</span><span style=\"color: darkorange; font-size: 0.9em;\">Development</span><span
            style=\"font-size: 0.9em;\">}</span>}
            </pre>
        </div>";


require "vendor/autoload.php";

include "formconfig.php";


$lazy = new \FormGenerator\Views\FormMaterialize();

$lazy->addElement("Form");
$lazy->form = "start";
$lazy->method = "post";
$lazy->action = "#";
$lazy->id = "myForm";

$lazy->addElement("Input", "firstname");
$lazy->addElement("Input", "lastname");
$lazy->addElement("Input", "phone");
$lazy->addElement("Input", "street");
$lazy->addElement("Input", "postcode");
$lazy->addElement("Input", "city");
$lazy->addElement("Input", "email");
$lazy->addElement("Textarea", "message");
$lazy->addElement("Input", "paypal");
$lazy->addElement("Input", "sofort");
$lazy->addElement("Input", "prepaid");
$lazy->addElement("Input", "agb");
$lazy->addElement("Input", "submit");

$lazy->addElement("Form");
$lazy->form = "end";

?>

<!doctype html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="mgZvmS2G0aSVrvK4y0dbsZuI1jL6hLkvwJyTUZNzBUE" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="syntax.css">
    <script src="syntaxhighlighter.js"></script>
    <style>
        pre{
            padding: 20px;
        }
        .padding{
            width: 80%;
            margin: auto;
        }
        .settings{
            position: fixed;
            top: 58px;
            left: 40px;
        }
        h4{
            font-size: 16px;
            text-align: center;
            padding: 10px;
            color: white;
            background: #f44336;
            border-radius: 20px;
        }
        hr.big{
            border: 5px solid #f44336;
            border-radius: 20px;
        }
    </style>
    <title>FormGen Materialize CSS - Formular Example</title>
</head>

<body onload="sh_highlightDocument();">


<ul id="slide-out" class="side-nav">
    <a href="https://www.github.com/stockenberg/FormGenerator" style="padding: 10px; text-align: center; border-bottom: thin solid black;" target="_blank"><h5>FormGenerator auf Github</h5></a>
    <pre class="sh_php">
        <?= file_get_contents("readme.md") ?>
    </pre>
</ul>

<div class="settings">
     <a href="#" data-activates="slide-out" class="toggle valign"><i class="material-icons red-text medium">settings</i></a>
</div>

<div class="row padding">
    <?= $logo ?>
    <hr class="big">
    <br/>
    <div class="col m6 l6 s6">
        <h3>Full Setup</h3>

        <?= $form->Output(); ?>
    </div>
    <div class="col right m5 l5 s5">
        <h3>Lazy Setup</h3>

        <?= $lazy->Output(); ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('select').material_select();

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });

        $('.toggle').sideNav({
                menuWidth: 600, // Default is 240
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );


        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'http://placehold.it/250x250'
            }
        });

    });
</script>
</body>
</html>






