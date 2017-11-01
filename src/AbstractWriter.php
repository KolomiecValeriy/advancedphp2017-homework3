<?php

namespace Application;


abstract class AbstractWriter
{
    abstract protected function writeToFile($file, $data);

    abstract protected function writeToDatabase($file, $data);


}
