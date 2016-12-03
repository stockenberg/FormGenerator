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
$form->headline = "&lt;h4&gt;Select&lt;/h4&gt;";
$form->name = "Register[anrede]";
$form->before = "<div class='row'>";
$form->classes = "icons";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Select with Icons left";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg",
        "classes" => "left"
    ],

];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "icons";
$form->label = "Select with Icons right and circle";
$form->wrapperClasses = "col s4 m4 l4";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg",
        "classes" => "circle"
    ],
];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Normal";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "validate";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Multiple";
$form->multiple = "multiple";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->classes = "validate";
$form->variant = "optgroup";
$form->label = "Optgroup";
$form->options = [
    "Anrede" => [
        "herr" => "Herr",
        "frau" => "Frau"
    ]
];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->label = "Browser Default";
$form->wrapperClasses = "col s4 m4 l4";
$form->variant = "browser-default";
$form->id = "default";
$form->after = "</div>";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];

$form->addElement("Input");
$form->headline = "&lt;h4&gt;Input&lt;/h4&gt;";
$form->type = "text";
$form->label = "Normal Textbox";
$form->classes = "validate";
$form->id = "normal";

$form->addElement("Input");
$form->type = "text";
$form->label = "Account Textbox";
$form->classes = "validate";
$form->iconPrefix = "account_circle";
$form->id = "normal";

$form->addElement("Input");
$form->type = "text";
$form->label = "Autocomplete";
$form->classes = "validate autocomplete";
$form->iconPrefix = "textsms";
$form->id = "autocomplete";

$form->addElement("Input");
$form->type = "text";
$form->label = "Phone Textbox";
$form->classes = "validate";
$form->iconPrefix = "phone";
$form->id = "normal";

$form->addElement("Input");
$form->before = "<p style='display: inline-block'>Das ist eine inline Textbox</p>";
$form->type = "text";
$form->label = "Inline Textbox";
$form->classes = "validate";
$form->wrapperClasses = "inline";
$form->id = "normal";

$form->addElement("Input");
$form->type = "email";
$form->label = "E-Mail";
$form->classes = "validate";
$form->error = "Falsch ausgefüllt";
$form->success = "Erfolg!";

$form->addElement("Input");
$form->type = "date";
$form->label = "Date";
$form->classes = "datepicker";

$form->addElement("Input");
$form->type = "text";
$form->label = "Text with Length Count";
$form->classes = "validate";
$form->length = "120";
$form->id = "length";

$form->addElement("Input");
$form->type = "password";
$form->label = "Password";
$form->classes = "validate";
$form->id = "password";

$form->addElement("Input");
$form->headline = "&lt;h4&gt;Radio / Checkbox&lt;/h4&gt;";
$form->type = "switch";
$form->labelBefore = "off";
$form->labelAfter = "on";

$form->addElement("Input");
$form->type = "radio";
$form->classes = "with-gap";
$form->label = "with-gap";
$form->id = "filled";

$form->addElement("Input");
$form->type = "radio";
$form->label = "radio";
$form->id = "asd";

$form->addElement("Input");
$form->type = "checkbox";
$form->classes = "filled-in";
$form->label = "filled-in";
$form->id = "my";

$form->addElement("Input");
$form->type = "checkbox";
$form->label = "checkbox";
$form->id = "check";

$form->addElement("Textarea");
$form->headline = "&lt;h4&gt;Textareas&lt;/h4&gt;";
$form->label = "Message";
$form->id = "message";

$form->addElement("Textarea");
$form->label = "Message with Icon and Counter";
$form->id = "message-length";
$form->iconPrefix = "mode_edit";
$form->classes = "validate";
$form->length = "120";

$form->addElement("Input");
$form->headline = "&lt;h4&gt;Buttons&lt;/h4&gt;";
$form->label = "File Upload";
$form->id = "file";
$form->type = "file";

$form->addElement("Input");
$form->value = "Submit";
$form->id = "reset";
$form->wrapperClasses = "row";
$form->classes = "btn col green m12 l12 s12";
$form->type = "reset";

$form->addElement("Input");
$form->value = "Reset";
$form->id = "submit";
$form->wrapperClasses = "row";
$form->classes = "btn col red m12 l12 s12";
$form->type = "submit";


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
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="syntax.css">
    <script src="syntaxhighlighter.js"></script>
    <title>Document</title>
</head>
<body onload="sh_highlightDocument();">
<div class="row">
    <div style="padding: 50px; width: 60%; position: fixed; right: 0; top: 0; height: 100%; overflow-y: scroll">
        <?= $form->Output(); ?>
    </div>

    <pre style="padding: 50px; width: 40%; position: fixed; left: 0; top: 0; height: 100%; overflow-y: scroll"
         class="sh_php">
<h4>Get Right Library</h4>
$form = new \FormGenerator\Views\FormMaterialize();
<h4>Start Form</h4>
$form->addElement("Form");
$form->form = "start";
$form->action = "#";
$form->method = "post";
$form->id = "Register";
<h4>Selectlists</h4>
$form->addElement("Select");
$form->headline = "&lt;h4&gt;Select&lt;/h4&gt;";
$form->name = "Register[anrede]";
$form->before = "&lt;div class='row'&gt;";
$form->classes = "icons";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Select with Icons left";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "picture-95970-1460131169.png",
        "classes" => "circle left"
    ],

];
<hr>
$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "icons";
$form->label = "Select with Icons right";
$form->wrapperClasses = "col s4 m4 l4";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "picture-95970-1460131169.png",
        "classes" => "circle"
    ],
];
<hr>
$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Normal";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];
<hr>
$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "validate";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Multiple";
$form->multiple = "multiple";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];
<hr>
$form->addElement("Select");
$form->name = "Register[anrede]";
$form->wrapperClasses = "col s4 m4 l4";
$form->classes = "validate";
$form->variant = "optgroup";
$form->label = "Optgroup";
$form->options = [
    "Anrede" => [
        "herr" => "Herr",
        "frau" => "Frau"
    ]
];
<hr>
$form->addElement("Select");
$form->name = "Register[anrede]";
$form->label = "Browser Default";
$form->wrapperClasses = "col s4 m4 l4";
$form->variant = "browser-default";
$form->id = "default";
$form->after = "&lt;/div&gt;";
$form->options = [
    "herr" => "Herr",
    "frau" => "Frau"
];
<h4>Input</h4>
$form->addElement("Input");
$form->headline = "&lt;h4&gt;Input&lt;/h4&gt;";
$form->type = "text";
$form->label = "Normal Textbox";
$form->classes = "validate";
$form->id = "normal";
<hr>
$form->addElement("Input");
$form->type = "text";
$form->label = "Account Textbox";
$form->classes = "validate";
$form->iconPrefix = "account_circle";
$form->id = "normal";
<hr>
$form->addElement("Input");
$form->type = "text";
$form->label = "Autocomplete";
$form->classes = "validate autocomplete";
$form->iconPrefix = "textsms";
$form->id = "autocomplete";
<hr>
$form->addElement("Input");
$form->type = "text";
$form->label = "Phone Textbox";
$form->classes = "validate";
$form->iconPrefix = "phone";
$form->id = "normal";
<hr>
$form->addElement("Input");
$form->before = "&lt;p style='display: inline-block'>Das ist eine inline Textbox&lt;/p&gt;";
$form->type = "text";
$form->label = "Inline Textbox";
$form->classes = "validate";
$form->wrapperClasses = "inline";
$form->id = "normal";
<hr>
$form->addElement("Input");
$form->type = "email";
$form->label = "E-Mail";
$form->classes = "validate";
$form->error = "Falsch ausgefüllt";
$form->success = "Erfolg!";
<hr>
$form->addElement("Input");
$form->type = "date";
$form->label = "Date";
$form->classes = "datepicker";
<hr>
$form->addElement("Input");
$form->type = "text";
$form->label = "Text with Length Count";
$form->classes = "validate";
$form->length = "120";
$form->id = "length";
<hr>
$form->addElement("Input");
$form->type = "password";
$form->label = "Password";
$form->classes = "validate";
$form->id = "password";
<h4>Radio / Checkboxes</h4>
$form->addElement("Input");
$form->headline = "&lt;h4&gt;Radio / Checkbox&lt;/h4&gt;";
$form->type = "switch";
$form->labelBefore = "off";
$form->labelAfter = "on";
<hr>
$form->addElement("Input");
$form->type = "radio";
$form->classes = "with-gap";
$form->label = "with-gap";
$form->id = "filled";
<hr>
$form->addElement("Input");
$form->type = "radio";
$form->label = "radio";
$form->id = "asd";
<hr>
$form->addElement("Input");
$form->type = "checkbox";
$form->classes = "filled-in";
$form->label = "filled-in";
$form->id = "my";
<hr>
$form->addElement("Input");
$form->type = "checkbox";
$form->label = "checkbox";
$form->id = "check";
<h4>Textareas</h4>
$form->addElement("Textarea");
$form->headline = "&lt;h4&gt;Textareas&lt;/h4&gt;";
$form->label = "Message";
$form->id = "message";
<hr>
$form->addElement("Textarea");
$form->label = "Message";
$form->id = "message";
<hr>
$form->addElement("Textarea");
$form->label = "Message";
$form->id = "message-length";
$form->iconPrefix = "mode_edit";
$form->classes = "validate";
$form->length = "120";

<h4>Buttons</h4>

$form->addElement("Input");
$form->headline = "&lt;h4&gt;Buttons&lt;/h4&gt;";
$form->label = "File Upload";
$form->id = "file";
$form->type = "file";
<hr>
$form->addElement("Input");
$form->value = "Submit";
$form->id = "reset";
$form->wrapperClasses = "row";
$form->classes = "btn col green m12 l12 s12";
$form->type = "reset";
<hr>
$form->addElement("Input");
$form->value = "Reset";
$form->id = "submit";
$form->wrapperClasses = "row";
$form->classes = "btn col red m12 l12 s12";
$form->type = "submit";

<h4>Close Formtag</h4>
$form->addElement("Form");
$form->form = "end";

<h4>Rendering</h4>
$form->Output();
</pre>
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






