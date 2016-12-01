<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 00:27
 */
require "vendor/autoload.php";

$formFields = new \FormGenerator\Views\FormCustom();

$config = [
    [
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "type" => "radio",
        "value" => "MyValue",
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "element" => "Input",
    ],
    [
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "type" => "checkbox",
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "element" => "Input",
    ],
    [
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => "das ist mein Text",
        "element" => "Textarea",
    ],
    [
        "name" => "myName",
        "id" => "myID",
        "label" => "Message",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => "das ist mein Text",
        "element" => "Textarea",
    ],
    [
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => "das ist mein Text",
        "element" => "Textarea",
    ]

];

$formFields->setConfig($config);
echo "<form>";
echo $formFields->Output();
echo "</form>";


?>







