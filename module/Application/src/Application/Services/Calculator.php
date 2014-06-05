<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/4/14
 * Time: 9:30 AM
 */

namespace Application\Services;


use Application\Models\Equation;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Calculator implements ServiceLocatorAwareInterface {

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

    public function calculate(Equation $equation){
        switch ($equation->getOperator()){
            case '+':
                $equation->setResult($equation->getFirstOperand() + $equation->getSecondOperand());
                break;
            case '-':
                $equation->setResult($equation->getFirstOperand() - $equation->getSecondOperand());
                break;
            case '*':
                $equation->setResult($equation->getFirstOperand() * $equation->getSecondOperand());
                break;
            case '/':
                $equation->setResult($equation->getFirstOperand() / $equation->getSecondOperand());
                break;
            default:
                throw new \Exception("Invalid Class State");
        }
    }
}