<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/3/14
 * Time: 3:11 PM
 */

namespace Application\Services;


use Application\Models\Door;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HundredDoorsFactory implements  FactoryInterface  {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $doors = $this->createDoors();
        return new HundredDoors($doors);
    }

    public function createDoors(){
        $doors = [];

        for($i = 0; $i < 100; $i++){
            $doors[] = new Door();
        }

        return $doors;
    }
}