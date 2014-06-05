<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/4/14
 * Time: 9:46 AM
 */

namespace Application\Services;

use Application\Models\Equation;

class EquationFactory {
    public function createEquationFromString($input){
        $equationParts = explode(' ', $input);
        return new Equation($equationParts[0], $equationParts[1], $equationParts[2]);
    }
}