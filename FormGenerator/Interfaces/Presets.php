<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 03.12.16
 * Time: 16:05
 */

namespace FormGenerator\Interfaces;


interface Presets
{
    /**
     * * firstname
     * * lastname
     * * agb
     * * email
     * * street
     * * postcode
     * * city
     * * phone
     * * password
     * * gender
     * * message
     * @param string $id
     */
    function lazy(string $id);
}