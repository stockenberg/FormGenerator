<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 04.12.16
 * Time: 16:16
 */

namespace FormGenerator\Interfaces;


interface BootstrapConfigInterface
{

    public function getHelp();

    /**
     * @param mixed $help
     */
    public function setHelp($help);

    /**
     * @return mixed
     */
    public function getAddonBefore();

    /**
     * @param mixed $addonBefore
     */
    public function setAddonBefore($addonBefore);

    /**
     * @return mixed
     */
    public function getAddonAfter();

    /**
     * @param mixed $addonAfter
     */
    public function setAddonAfter($addonAfter);



    public function getHorizontalClasses();

    /**
     * @param mixed $horizontalClasses
     */
    public function setHorizontalClasses($horizontalClasses);

}