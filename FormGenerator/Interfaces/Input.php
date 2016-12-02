<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:33
 */

namespace FormGenerator\Interfaces;


/**
 * Interface Input
 * @package FormGenerator\Interfaces
 */
interface Input extends FormElement
{
    /**
     * @param string $type
     * @return mixed
     */
    public function setType(string $type);

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @param string $value
     * @return mixed
     */
    public function setValue(string $value);

    /**
     * @return mixed
     */
    public function getValue();

}