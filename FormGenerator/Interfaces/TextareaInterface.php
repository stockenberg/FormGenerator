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
interface TextareaInterface extends FormElementInterface
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


}