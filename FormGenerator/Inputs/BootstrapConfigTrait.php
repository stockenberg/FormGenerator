<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 04.12.16
 * Time: 16:07
 */

namespace FormGenerator\Inputs;


use FormGenerator\Interfaces\BootstrapConfigInterface;

trait BootstrapConfigTrait
{

    private $help;
    private $addonBefore;
    private $addonAfter;
    private $horizontalClasses;

    /**
     * @return mixed
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * @param mixed $help
     */
    public function setHelp($help)
    {
        $this->help = "<p class='help-block'>{$help}</p>";
    }

    /**
     * @return mixed
     */
    public function getAddonBefore()
    {
        return $this->addonBefore;
    }

    /**
     * @param mixed $addonBefore
     */
    public function setAddonBefore($addonBefore)
    {
        $this->addonAfter = "<div class=\"input-group-addon\">{$addonBefore}</div>";
    }

    /**
     * @return mixed
     */
    public function getAddonAfter()
    {
        return $this->addonAfter;
    }

    /**
     * @param mixed $addonAfter
     */
    public function setAddonAfter($addonAfter)
    {
        $this->addonAfter = "<div class=\"input-group-addon\">{$addonAfter}</div>";
    }

    /**
     * @return mixed
     */
    public function getHorizontalClasses()
    {
        return $this->horizontalClasses;
    }

    /**
     * @param mixed $horizontalClasses
     */
    public function setHorizontalClasses($horizontalClasses)
    {
        $this->horizontalClasses = $horizontalClasses;
    }





}