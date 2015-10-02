<?php
/**
 * Created by PhpStorm.
 * User: Gabo
 * Date: 10/2/2015
 * Time: 4:43 PM
 */

namespace Project\Core\Drivers;


class MySQLDriver extends DriverAbstract
{

    public function getDsn()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;

        return $dsn;
    }
}
