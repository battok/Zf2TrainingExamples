<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/3/14
 * Time: 3:33 PM
 */

namespace Application\Services;


use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DoorOpener implements ServiceLocatorAwareInterface {

    private $serviceLocator;
    /**
     * Set service locator
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    public function switchDoors($number){
            $hundredDoors = $this->getServiceLocator()->get('HundredDoors');
            $doors = $hundredDoors->getDoors();

        for($i = 1; $i <= $number; $i++){
            foreach($doors as $index=>$door){
                if(($index +1) % $i == 0){
                    $door->switchState();
                }
            }
        }

        return $doors;
    }
}