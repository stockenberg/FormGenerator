<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 23:35
 */


$form = new \FormGenerator\Views\FormMaterialize();

$form->addElement("Form");
$form->form = "start";
$form->action = "<h5>";
$form->method = "post";
$form->id = "Register";

$form->addElement("Select");
$form->headline = "<h4>Select</h4>";
$form->name = "Register[anrede]";
$form->before = "<div class='row'>";
$form->classes = "icons";
$form->wrapperClasses = "col s4 m4 l4";
$form->label = "Select with Icons left";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "icon.png",
        "classes" => "left"
    ],

];

$form->addElement("Select");
$form->name = "Register[anrede]";
$form->classes = "icons";
$form->label = "Select with Icons right";
$form->wrapperClasses = "col s4 m4 l4";
$form->options = [
    "key" => [
        "value" => "Text",
        "icon" => "icon.png",
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
$form->headline = "<h4>Input</h4>";
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
$form->before = "<p style='display: inline-block'>Das ist 
    eine inline Textbox</p>";
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
$form->headline = "<h4>Radio / Checkbox</h4>";
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
$form->headline = "<h4>Teaxtarea</h4>";
$form->label = "Message";
$form->id = "message";

$form->addElement("Textarea");
$form->label = "Message with Icon and Counter";
$form->id = "message-length";
$form->iconPrefix = "mode_edit";
$form->classes = "validate";
$form->length = "120";

$form->addElement("Input");
$form->headline = "<h4>Buttons</h4>";
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