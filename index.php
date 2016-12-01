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
echo "<form>";
echo $formFields->Output();
echo "</form>";


?>







