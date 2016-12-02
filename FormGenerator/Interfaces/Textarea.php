<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 12:29
 */

namespace FormGenerator\Interfaces;


/**
 * Interface Textarea
 * @package FormGenerator\Interfaces
 */
interface Textarea extends FormElement
{

    /**
     * @param string $text
     * @return mixed
     */
    function setText(string $text);

    /**
     * @return mixed
     */
    function getText();

    /**
     * @return mixed
     */
    public function getLength();

    /**
     * @param string $length
     * @return mixed
     */
    public function setLength(string $length);


}