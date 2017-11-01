<?php

namespace Application\Interfaces;


interface TransportInterface
{
    /**
     * @param $name
     * @return mixed
     */
    public function connect($name);

    /**
     * @param $data
     * @return mixed
     */
    public function write($data);

    /**
     * @param $connection
     * @return mixed
     */
    public function close($connection);
}
