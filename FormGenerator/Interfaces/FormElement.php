<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:33
 */

namespace FormGenerator\Interfaces;


/**
 * Interface FormElement
 * @package FormGenerator\Interfaces
 */
interface FormElement
{

    /**
     * @param string $placeholder
     * @return mixed
     */
    function setPlaceholder(string $placeholder);

    /**
     * @param $placeholder
     * @return mixed
     */
    function getPlaceholder();

    /**
     * @param string $name
     * @return mixed
     */
    function setName(string $name);

    /**
     * @return mixed
     */
    function getName();

    /**
     * @param string $id
     * @return mixed
     */
    function setID(string $id);

    /**
     * @return mixed
     */
    function getID();

    /**
     * @param string $classes
     * @return mixed
     */
    function setClasses(string $classes);

    /**
     * @return mixed
     */
    function getClasses();

    /**
     * @param string $label
     * @return mixed
     */
    function setLabel(string $label);

    /**
     * @return mixed
     */
    function getLabel();

    /**
     * @param string $disabled
     * @return mixed
     */
    function setDisabled(string $disabled);

    /**
     * @return mixed
     */
    function getDisabled();

    /**
     * @param string $required
     * @return mixed
     */
    function setRequired(string $required);

    /**
     * @return mixed
     */
    function getRequired();

    /**
     * @param string $classes
     * @return mixed
     */
    function setWrapperClasses(string $classes);

    /**
     * @return mixed
     */
    function getWrapperClasses();

    /**
     * @param string $element
     * @return mixed
     */
    function setBefore(string $element);

    /**
     * @param string $element
     * @return mixed
     */
    function setAfter(string $element);

    /**
     * @return mixed
     */
    function getBefore();

    /**
     * @return mixed
     */
    function getAfter();

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
     * @return mixed
     */
    public function setMin(string $min);

    /**
     * @return mixed
     */
    public function getMax();

    /**
     * @param string $max
     * @return mixed
     */
    public function setMax(string $max);
}