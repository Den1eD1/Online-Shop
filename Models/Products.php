<?php
/**
 * Created by PhpStorm.
 * User: Gabo
 * Date: 10/2/2015
 * Time: 7:55 PM
 */

namespace Project\Models;

use Project\Core\Database;
class Products
{
    public function getAll() {
        $db = Database::getInstance('app');

        $result= $db->prepare("
        SELECT name, price, sold FROM products
        ");

        $result->execute();

        return $result->fetchAll();
    }
}