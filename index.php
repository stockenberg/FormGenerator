<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 00:27
 */
require "vendor/autoload.php";

$formFields = new \FormGenerator\Views\FormCustom("Register");

$config = [
    [
        "element" => "Form",
        "action" => "#",
        "method" => "post",
    ],
    [
        "element" => "Input",
        "name" => "firstname",
        "id" => "firstname",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "text"
    ],
    [
        "element" => "Input",
        "name" => "payment",
        "id" => "paypal",
        "label" => "Paypal",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "radio"
    ],
    [
        "element" => "Input",
        "name" => "payment",
        "id" => "sofort",
        "label" => "Sofort",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "sofort",
        "type" => "radio"
    ],
    [
        "element" => "Input",
        "name" => "payment",
        "id" => "prepaid",
        "label" => "Prepaid",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "radio"
    ],
    [
        "element" => "Textarea",
        "name" => "message",
        "id" => "message",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => ""
    ],
    [
        "element" => "Select",
        "name" => "selection",
        "id" => "selection",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "options" => [
            "huhu" => "haha",
            "gege" => "haha",
            "hahaha" => "haha",
            "hihih" => "haha",
        ],
    ],
    [
        "element" => "Input",
        "name" => "submit",
        "value" => "Abschicken",
        "type" => "submit"
    ]

];

$formFields->setConfig($config);
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $formFields->Output(); ?>
</body>
</html>







