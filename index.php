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
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "text"
    ],
    [
        "element" => "Input",
        "name" => "myName",
        "id" => "paypal",
        "label" => "Paypal",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "radio"
    ],
    [
        "element" => "Input",
        "name" => "myName",
        "id" => "sofort",
        "label" => "Sofort",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "sofort",
        "type" => "radio"
    ],
    [
        "element" => "Input",
        "name" => "myName",
        "id" => "prepaid",
        "label" => "Prepaid",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "value" => "",
        "type" => "radio"
    ],
    [
        "element" => "Textarea",
        "name" => "myName",
        "id" => "myID",
        "label" => "Vorname",
        "classes" => ["huhu", "haha", "hehe"],
        "wrapperClasses" => ["huhu", "haha", "hehe"],
        "text" => ""
    ],
[
        "element" => "Select",
        "name" => "myName",
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

];

$formFields->setConfig($config);
echo $formFields->Output();


?>







