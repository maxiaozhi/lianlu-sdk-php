<?php

namespace Lianlu\Lianlu\models;

class Identification extends Common
{
    public function SetName($value)
    {
        $this->values['name'] = $value;
    }
    public function GetName()
    {
        return $this->values['name'];
    }

    public function SetIdNum($value)
    {
        $this->values['idNum'] = $value;
    }
    public function GetIdNum()
    {
        return $this->values['idNum'];
    }

    public function SetStartTime($value)
    {
        $this->values['startTime'] = $value;
    }
    public function GetStartTime()
    {
        return $this->values['startTime'];
    }

    public function SetEndTime($value)
    {
        $this->values['endTime'] = $value;
    }
    public function GetEndTime()
    {
        return $this->values['endTime'];
    }

    public function SetPhone($value)
    {
        $this->values['phone'] = $value;
    }
    public function GetPhone()
    {
        return $this->values['phone'];
    }

    public function SetBankNum($value)
    {
        $this->values['bankNum'] = $value;
    }
    public function GetBankNum()
    {
        return $this->values['bankNum'];
    }

    public function SetImage($value)
    {
        $this->values['image'] = $value;
    }
    public function GetImage()
    {
        return $this->values['image'];
    }
}