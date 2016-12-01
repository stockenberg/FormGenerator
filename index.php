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
        "id" => "myID",
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
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => ""
    ],
    [
        "element" => "Select",
        "name" => "selection",
        "id" => "myID",
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
echo $formFields->Output();

echo '<pre>';
print_r($_POST);
echo '</pre>';


?>







