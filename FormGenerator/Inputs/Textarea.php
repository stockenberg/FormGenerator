<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:31
 */

namespace FormGenerator\Inputs;


class Textarea extends FormElement implements \FormGenerator\Interfaces\Textarea
{

    private $text;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }



}