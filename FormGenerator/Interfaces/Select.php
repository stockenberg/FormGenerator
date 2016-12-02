<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 02:53
 */

namespace FormGenerator\Interfaces;


/**
 * Interface Select
 * @package FormGenerator\Interfaces
 */
interface Select extends FormElement
{

    /**
     * @return mixed
     */
    public function getOptions();


    /**
     * @param array $option
     * @return mixed
     */
    public function setOptions(array $option);


    /**
     * @return mixed
     */
    public function getMultiple();


    /**
     * @param $multiple
     * @return mixed
     */
    public function setMultiple($multiple);


    /**
     * @return mixed
     */
    public function getSize();


    /**
     * @param string $size
     * @return mixed
     */
    public function setSize(string $size);
}