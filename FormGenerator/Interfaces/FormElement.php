<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:33
 */

namespace FormGenerator\Interfaces;


interface FormElement
{

    function setName(string $name);

    function getName();

    function setID(string $id);

    function getID();

    function setClasses(array $classes);

    function getClasses();

    function setLabel(string $label);

    function getLabel();

    function setDisabled(string $disabled);

    function getDisabled();

    function setRequired(string $required);

    function getRequired();

    function setWrapperClasses(array $classes);

    function getWrapperClasses();

}