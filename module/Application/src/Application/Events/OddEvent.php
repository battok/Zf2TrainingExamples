<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/5/14
 * Time: 1:08 PM
 */

namespace Application\Events;


use Zend\Mvc\MvcEvent;

class OddEvent {
    public function echoOddSeconds(MvcEvent $event){
        if(!microtime() % 2 == 0){
            $date = new \Datetime();
            echo $date->format('h:i:s');
        }
    }
} 