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
interface InputInterface extends FormElementInterface
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

    /**
     * @param string $checked
     * @return mixed
     */
    function setChecked(string $checked);

    /**
     * @return mixed
     */
    function getChecked();

    /**
     * @return mixed
     */
    public function getMin();

    /**
     * @param string $min
     */
    public function setMin(string $min);

    /**
     * @return mixed
     */
    public function getMax();

    /**
     * @param string $max
     */
    public function setMax(string $max);

}