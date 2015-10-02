<?php
/**
 * Created by PhpStorm.
 * User: Gabo
 * Date: 10/2/2015
 * Time: 8:16 PM
 */

namespace Project\ViewModels;


class Product
{
    public $name;
    public $price;
    public $sold;

    public function __construct ($name, $price, $sold)
    {
        $this->setName($name)
            ->setPrice($price)
            ->setSold($sold);

        //TODO may need to add user_id, or something else;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name= $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
           $this->price = $price;
        return $this;
    }

    public function getSold()
    {
        return $this->sold;
    }

    public  function setSold($sold)
    {
        $this->sold = $sold;
        return $this;
    }
}