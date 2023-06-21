<?php

namespace Lianlu\Lianlu\models;

class Voice extends Common
{
    public function SetPhoneNumberSet($value)
    {
        $this->values['PhoneNumberSet'] = $value;
    }
    public function GetPhoneNumberSet()
    {
        return $this->values['PhoneNumberSet'];
    }

    public function SetTemplateParamSet($value)
    {
        $this->values['TemplateParamSet'] = $value;
    }
    public function GetTemplateParamSet()
    {
        return $this->values['TemplateParamSet'];
    }

    public function SetTemplateId($value)
    {
        $this->values['TemplateId'] = $value;
    }
    public function GetTemplateId()
    {
        return $this->values['TemplateId'];
    }

    public function SetSessionContext($value)
    {
        $this->values['SessionContext'] = $value;
    }
    public function GetSessionContext()
    {
        return $this->values['SessionContext'];
    }
}