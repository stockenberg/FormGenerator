<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:31
 */

namespace FormGenerator\Inputs;


class Textarea extends FormElement implements \FormGenerator\Interfaces\TextareaInterface
{

    private $text;
    private $length;

    public function getText()
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

}