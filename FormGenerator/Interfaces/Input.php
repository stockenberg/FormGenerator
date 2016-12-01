<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:33
 */

namespace FormGenerator\Interfaces;


interface Input extends FormElement
{
    public function setType(string $type);
    public function getType();

    public function setValue(string $value);
    public function getValue();

}