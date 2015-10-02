<?php
namespace Project\Controllers;

abstract class Controller
{
    public function isLogged()
    {
        return isset($_SESSION['id']);
    }
}