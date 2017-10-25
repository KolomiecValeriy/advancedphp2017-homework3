<?php

namespace Application;


use Application\File;
use Application\DataBase;

class Write extends AbstractWrite
{
    protected $fileName;
    protected $data;

    public function writeToFile($fileName, $data)
    {
        // TODO: Implement writeToFile() method.

        return;
    }

    public function writeToDatabase($fileName, $data)
    {
        // TODO: Implement writeToDatabase() method.

        return;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFile($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}
