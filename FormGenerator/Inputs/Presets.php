<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 12:11
 */

namespace FormGenerator\Inputs;


class Presets implements \FormGenerator\Interfaces\Presets
{

    protected $config = array();
    protected $count = -1;

    protected $presets = [
        "firstname" => [
            "type" => "text",
            "label" => "Name",
        ],
        "lastname" => [
            "type" => "text",
            "label" => "Nachname"
        ],
        "postcode" => [
            "type" => "text",
            "label" => "Postleitzahl"
        ],
        "steet" => [
            "type" => "text",
            "label" => "Straße"
        ],
        "city" => [
            "type" => "text",
            "label" => "Stadt"
        ],
        "phone" => [
            "type" => "text",
            "label" => "Telefonnummer"
        ],
        "agb" => [
            "type" => "checkbox",
            "label" => "Bitte bestätigen Sie die AGB"
        ],
        "email" =>  [
            "type" => "email",
            "label" => "E-Mail-Adresse"
        ],
        "password" => [
            "type" => "password",
            "label" => "Passwort"
        ],
        "gender" => [
            "label" => "Anrede",
            "options" => [
                "male" => "Herr",
                "female" => "Frau"
            ]
        ],
        "sofort" => [
            "label" => "Sofortüberweisung",
            "type" => "radio",
            "value" => "sofort",
            "name" => "payment"
        ],
        "paypal" => [
            "label" => "PayPal",
            "type" => "radio",
            "value" => "paypal",
            "name" => "payment"
        ],
        "prepaid" => [
            "label" => "Vorkasse",
            "type" => "radio",
            "value" => "prepaid",
            "name" => "payment"
        ],
        "message" => [
            "label" => "Ihre Nachricht",
        ],
        "submit" => [
            "type" => "submit",
            "value" => "Absenden",
            "classes" => "btn"
        ]
    ];


    public function lazy(string $id){
        $this->config[$this->count]["name"] = (!isset($this->presets[$id]["name"])) ? $id : $this->presets[$id]["name"];
        $this->config[$this->count]["id"] = $id;
        switch($this->config[$this->count]["element"]){
            case "Input":
                $this->config[$this->count]["type"] = (!isset($this->presets[$id]["type"])) ? "text" : $this->presets[$id]["type"];
                switch ($this->presets[$id]["type"]){
                    case "submit":
                        $this->config[$this->count]["type"] = $this->presets[$id]["type"];
                        $this->config[$this->count]["value"] = $this->presets[$id]["value"];
                        $this->config[$this->count]["classes"] = $this->presets[$id]["classes"];

                        break;

                    case "radio":
                    case "checkbox":
                    case "switch":
                        $this->config[$this->count]["label"] = (!isset($this->presets[$id]["label"])) ? $id : $this->presets[$id]["label"];
                        $this->config[$this->count]["value"] = (!isset($this->presets[$id]["value"])) ? $id : $this->presets[$id]["value"];

                    break;
                    default:
                        $this->config[$this->count]["label"] = (!isset($this->presets[$id]["label"])) ? $id : $this->presets[$id]["label"];
                        break;
                }
                break;

            case "Select":
                $this->config[$this->count]["options"] = (!isset($this->presets[$id]["options"])) ? ["key1" => "value", "key2" => "value"] : $this->presets[$id]["options"];
                $this->config[$this->count]["label"] = (!isset($this->presets[$id]["label"])) ? $id : $this->presets[$id]["label"];
                break;

            case "Textarea":
                $this->config[$this->count]["label"] = (!isset($this->presets[$id]["label"])) ? $id : $this->presets[$id]["label"];
                break;
        }
    }
}