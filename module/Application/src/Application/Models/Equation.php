<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/3/14
 * Time: 12:15 PM
 */

namespace Application\Models;

class Equation {
    private $firstOperand;
    private $secondOperand;
    private $operator;
    private $result;

    function __construct($firstOperand = '', $operator = '', $secondOperand = '')
    {
        $this->firstOperand = $firstOperand;
        $this->operator = $operator;
        $this->secondOperand = $secondOperand;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $firstOperand
     */
    public function setFirstOperand($firstOperand)
    {
        $this->firstOperand = $firstOperand;
    }

    /**
     * @return mixed
     */
    public function getFirstOperand()
    {
        return $this->firstOperand;
    }

    /**
     * @param mixed $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param mixed $secondOperand
     */
    public function setSecondOperand($secondOperand)
    {
        $this->secondOperand = $secondOperand;
    }

    /**
     * @return mixed
     */
    public function getSecondOperand()
    {
        return $this->secondOperand;
    }

    public function calculate(){
        switch ($this->getOperator()){
            case '+':
                $this->result = $this->getFirstOperand() + $this->getSecondOperand();
                break;
            case '-':
                $this->result = $this->getFirstOperand() - $this->getSecondOperand();
                break;
            case '*':
                $this->result = $this->getFirstOperand() * $this->getSecondOperand();
                break;
            case '/':
                $this->result = $this->getFirstOperand() / $this->getSecondOperand();
                break;
            default:
                throw new \Exception("Invalid Class State");
        }
    }
} 