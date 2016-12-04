<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 01:03
 */

namespace FormGenerator\Inputs;


use FormGenerator\Interfaces\MaterializeConfigInterface;

trait MaterializeConfigTrait
{
    private $icon;
    private $error;
    private $success;
    private $iconPrefix;
    private $variant;
    private $length;

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon(string $icon)
    {
        $this->icon = "data-icon='{$icon}'";
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError(string $error)
    {
        $this->error = "data-error='" . $error . "'";
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess(string $success)
    {
        $this->success = "data-success='" . $success . "'";
    }

    public function getIconPrefix()
    {
        return $this->iconPrefix;
    }

    public function setIconPrefix(string $iconPrefix)
    {
        $this->iconPrefix = "<i class='material-icons prefix'>{$iconPrefix}</i>";;
    }

    public function getVariant()
    {
        return $this->variant;
    }

    public function setVariant(string $variant)
    {
        $this->variant = $variant;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength(string $length)
    {
        $this->length = "length='{$length}'";
    }


}