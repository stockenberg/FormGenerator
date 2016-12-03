<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:51
 */

namespace FormGenerator\Inputs;


/**
 * Class Select
 * @package FormGenerator\Inputs
 */
class Select extends FormElement implements \FormGenerator\Interfaces\SelectInterface
{
    /**
     * @var
     */
    private $multiple;
    /**
     * @var
     */
    private $size;
    /**
     * @var array
     */
    private $options = [];

    private $icon;

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions(array $option)
    {
        $this->options = $option;
    }


    public function getMultiple()
    {
        return $this->multiple;
    }

    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize(string $size)
    {
        $this->size = $size <=> 0;
    }





}