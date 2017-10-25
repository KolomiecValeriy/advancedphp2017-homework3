<?php

namespace Application\Interfaces;


interface TransportInterface
{
    public function connect($name);

    public function write($data);

    public function close($connection);
}
