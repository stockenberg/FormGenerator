<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:29
 */

namespace FormGenerator\Interfaces;


interface Textarea extends FormElement
{

    function setText(string $text);

    function getText();

}