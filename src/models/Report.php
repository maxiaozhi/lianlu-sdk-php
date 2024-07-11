<?php

namespace Lianlu\Lianlu\models;

class Report extends Common
{
    public function SetPageSize($value)
    {
        $this->values['pageSize'] = $value;
    }
    public function GetPageSize()
    {
        return $this->values['pageSize'];
    }

    public function SetPageNo($value)
    {
        $this->values['pageNo'] = $value;
    }
    public function GetPageNo()
    {
        return $this->values['pageNo'];
    }

    public function GetDate()
    {
        return $this->values['Date'];
    }

    public function SetDate($value)
    {
        $this->values['Date'] = $value;
    }

    public function GetTaskId()
    {
        return $this->values['TaskId'];
    }

    public function SetTaskId($value)
    {
        $this->values['TaskId'] = $value;
    }
}