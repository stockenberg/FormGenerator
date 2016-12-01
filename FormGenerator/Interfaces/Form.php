<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 15:34
 */

namespace FormGenerator\Interfaces;


interface Form extends FormElement
{
    function setAction(string $action);

    function setMethod(string $method);

    function setEnctype(string $method);

    function getAction();

    function getMethod();

    function getEnctype();
}