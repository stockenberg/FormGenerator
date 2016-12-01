<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:53
 */

namespace FormGenerator\Interfaces;


interface Select extends FormElement
{

    public function getOptions();


    public function setOptions(array $option);


    public function getMultiple();


    public function setMultiple($multiple);


    public function getSize();


    public function setSize(string $size);
}