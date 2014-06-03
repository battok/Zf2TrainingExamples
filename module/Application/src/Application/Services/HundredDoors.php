<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/3/14
 * Time: 3:10 PM
 */

namespace Application\Services;


class HundredDoors {
    private $doors;

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    function __construct($doors)
    {
        $this->doors = $doors;
    }

} 