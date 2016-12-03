<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 01:03
 */

namespace FormGenerator\Interfaces;


interface MaterializeConfigInterface
{

    public function getLength();

    public function setLength(string $length);

    public function getError();

    public function setError(string $error);

    public function getSuccess();

    public function setSuccess(string $success);

    public function getIconPrefix();

    public function setIconPrefix(string $iconPrefix);

    /**
     * @return mixed
     */
    public function getVariant();

    /**
     * @param string $variant
     * @return mixed
     */
    public function setVariant(string $variant);

    /**
     * @return mixed
     */
    public function getIcon();

    /**
     * @param mixed $icon
     */
    public function setIcon(string $icon);
}