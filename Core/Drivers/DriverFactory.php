<?php
/**
 * Created by PhpStorm.
 * User: Gabo
 * Date: 10/2/2015
 * Time: 4:42 PM
 */

namespace Project\Core\Drivers;

class DriverFactory
{
    const DRIVER_MYSQL = 'mysql';

    /**
     * @param string $driver
     * @param string $user
     * @param string $pass
     * @param string $dbName
     * @param string $host Optional
     * @return MySQLDriver
     * @throws \Exception
     */
    public static function create(
        $driver,
        $user,
        $pass,
        $dbName,
        $host = null
    ) {
        switch ($driver) {
            case self::DRIVER_MYSQL:
                return new MySQLDriver($user, $pass, $dbName, $host);
            default:
                throw new \Exception("Invalid db driver");
        }
    }
}