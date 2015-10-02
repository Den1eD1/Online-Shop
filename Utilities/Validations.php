<?php
/**
 * Created by PhpStorm.
 * User: Gabo
 * Date: 10/2/2015
 * Time: 5:34 PM
 */

namespace Project\Utilities;


use Project\View;
use Project\ViewModels\RegisterInformation;

class Validations
{

    public static function validatePassword($password)
    {
        if(strlen($password) < 5) {
            $registerViewModel = new RegisterInformation();
            throw new \Exception("Password is too short");
        }

    }
}