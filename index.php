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
        "label" => "Vorname",
        "name" => "firstname",
        "id" => "firstname",
        "type" => "text",
        "element" => "Input"
    ]

];

$formFields->setConfig($config);
echo $formFields->Output();

echo '<pre>';
print_r($_POST);
echo '</pre>';







