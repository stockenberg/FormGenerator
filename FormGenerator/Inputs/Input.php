<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:26
 */

namespace FormGenerator\Inputs;


/**
 * Class Input
 * @package FormGenerator\Inputs
 */
class Input extends FormElement implements \FormGenerator\Interfaces\Input
{

    /**
     * @var
     */
    private $value;
    /**
     * @var
     */
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }


}