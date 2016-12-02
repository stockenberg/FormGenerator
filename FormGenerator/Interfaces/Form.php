<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 15:34
 */

namespace FormGenerator\Interfaces;


/**
 * Interface Form
 * @package FormGenerator\Interfaces
 */
interface Form extends FormElement
{
    /**
     * @param string $action
     * @return mixed
     */
    function setAction(string $action);

    /**
     * @param string $method
     * @return mixed
     */
    function setMethod(string $method);

    /**
     * @param string $method
     * @return mixed
     */
    function setEnctype(string $method);

    /**
     * @return mixed
     */
    function getAction();

    /**
     * @return mixed
     */
    function getMethod();

    /**
     * @return mixed
     */
    function getEnctype();
}