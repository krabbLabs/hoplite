<?php
/**
 * Created by IntelliJ IDEA.
 * User: gabrielgagno
 * Date: 7/18/17
 * Time: 10:51 PM
 */

namespace Krabblabs\Hoplite;


class DB
{
    protected $pdoConn;
    protected $databaseName;
    protected $userName;
    protected $password;
    protected $host;
    protected $port;
    protected $dsn;

    public function __construct($databaseName, $port, $userName, $password, $host, $port)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->dsn = "";
    }

    private function _connect()
    {

    }

    public function beginTransaction()
    {

    }

    public function commit()
    {

    }

    public function rollBack()
    {

    }


}