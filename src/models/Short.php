<?php

namespace Lianlu\Lianlu\models;

class Short extends Common
{
    public function SetShortName($value)
    {
        $this->values['shortName'] = $value;
    }
    public function GetShortName()
    {
        return $this->values['shortName'];
    }

    public function SetUrl($value)
    {
        $this->values['url'] = $value;
    }
    public function GetUrl()
    {
        return $this->values['url'];
    }

    public function SetDomain($value)
    {
        $this->values['domain'] = $value;
    }
    public function GetDomain()
    {
        return $this->values['domain'];
    }

    public function SetAccessDeadline($value)
    {
        $this->values['accessDeadline'] = $value;
    }
    public function GetAccessDeadline()
    {
        return $this->values['accessDeadline'];
    }

    public function SetAccessPassword($value)
    {
        $this->values['accessPassword'] = $value;
    }
    public function GetAccessPassword()
    {
        return $this->values['accessPassword'];
    }

    public function SetAccessTimes($value)
    {
        $this->values['accessTimes'] = $value;
    }
    public function GetAccessTimes()
    {
        return $this->values['accessTimes'];
    }

    public function SetPhoneSet($value)
    {
        $this->values['phoneSet'] = $value;
    }
    public function GetPhoneSet()
    {
        return $this->values['phoneSet'];
    }

    public function SetId($value)
    {
        $this->values['id'] = $value;
    }
    public function GetId()
    {
        return $this->values['id'];
    }

    public function SetRows($value)
    {
        $this->values['rows'] = $value;
    }
    public function GetRows()
    {
        return $this->values['rows'];
    }

    public function SetOffset($value)
    {
        $this->values['offset'] = $value;
    }
    public function GetOffset()
    {
        return $this->values['offset'];
    }

    public function SetBrowser($value)
    {
        $this->values['browser'] = $value;
    }
    public function GetBrowser()
    {
        return $this->values['browser'];
    }

    public function SetOs($value)
    {
        $this->values['os'] = $value;
    }
    public function GetOs()
    {
        return $this->values['os'];
    }

    public function SetPlatform($value)
    {
        $this->values['platform'] = $value;
    }
    public function GetPlatform()
    {
        return $this->values['platform'];
    }

    public function SetPhone($value)
    {
        $this->values['phone'] = $value;
    }
    public function GetPhone()
    {
        return $this->values['phone'];
    }
}