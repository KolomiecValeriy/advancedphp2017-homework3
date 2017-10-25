<?php

namespace Application;


abstract class AbstractWrite
{
    abstract protected function writeToFile($file, $data);

    abstract protected function writeToDatabase($file, $data);

}
