<?php
/**
 * Certified GamblingTec RNG Provider for Zend/Math/Rand
 *
 * @copyright Copyright (c) 2006-2019 SunSeven NV (http://www.sunseven-nv.com)
 * @license   BSD 3-Clause
 *
 * To have your application certified for gambling purposes, contact: brendan [at] gamblingtec.com / brendan [at] southeasterdesign.com
 */
namespace Gamblingtec\RNG\Utility;

use Zend\Math\Rand;

class GamblingTecRNG
{
    public static function getInteger(int $min, int $max)
    {
        return Rand::getInteger($min, $max);
    }

    public static function getBoolean()
    {
        return Rand::getBoolean();
    }

    public static function getFloat()
    {
        return Rand::getFloat();
    }

    public static function getString($min, $charlist = null)
    {
        return Rand::getString($min, $charlist);
    }
}
