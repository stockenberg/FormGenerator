<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:51
 */

namespace FormGenerator\Inputs;



class Select extends FormElement implements \FormGenerator\Interfaces\Select
{
    private $option;
    private $optKey;
    private $optVal;

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }


}