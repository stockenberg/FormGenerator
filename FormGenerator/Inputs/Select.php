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
class Select extends FormElement implements \FormGenerator\Interfaces\Select
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

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $option
     */
    public function setOptions(array $option)
    {
        $this->options = $option;
    }


    /**
     * @return mixed
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param $multiple
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple <=> "";
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size <=> 0;
    }


}