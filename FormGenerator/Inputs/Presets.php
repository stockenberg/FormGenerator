<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 12:11
 */

namespace FormGenerator\Inputs;


class Presets
{

    protected $config = array();
    protected $count = -1;

    protected $presets = [
        "firstname" => [
            "type" => "text",
            "label" => "Name"
        ],
        "lastname" => [
            "type" => "text",
            "label" => "Nachname"
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
        "message" => [
            "label" => "Ihre Nachricht",
        ],
    ];

    public function preset(string $id){
        $this->config[$this->count]["name"] = $id;
        $this->config[$this->count]["id"] = $id;
        $this->config[$this->count]["label"] = $this->presets[$id]["label"];
        switch($this->config[$this->count]["element"]){
            case "Input":
                switch ($this->presets[$id]["label"]["type"]){
                    case "submit":

                        break;
                }
                $this->config[$this->count]["type"] = $this->presets[$id]["type"];
                break;

            case "Select":
                $this->config[$this->count]["options"] = $this->presets[$id]["options"];
                break;

            case "Textarea":
                $this->config[$this->count]["label"] = $this->presets[$id]["label"];
                break;
        }
    }
}