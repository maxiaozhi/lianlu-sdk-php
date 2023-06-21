<?php
namespace Lianlu\Lianlu\Common;

use Exception;

class LianLuException extends Exception {
    public function errorMessage()
    {
        return $this->getMessage();
    }
}