<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.12.16
 * Time: 01:45
 */

namespace FormGenerator\Interfaces;


/**
 * Interface FormMaster
 * @package FormGenerator\Interfaces
 */
interface FormMaster
{

    /**
     * @param array $config
     * @return mixed
     */
    function setConfig(array $config);

    /**
     * @return mixed
     */
    function Output();

}