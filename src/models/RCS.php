<?php

namespace Lianlu\Lianlu\models;

class RCS extends Common
{
    public function SetPhoneNumberSet($value)
    {
        $this->values['PhoneNumberSet'] = $value;
    }
    public function GetPhoneNumberSet()
    {
        return $this->values['PhoneNumberSet'];
    }

    public function SetTemplateId($value)
    {
        $this->values['TemplateId'] = $value;
    }
    public function GetTemplateId()
    {
        return $this->values['TemplateId'];
    }

    public function SetTemplateParamSet($value)
    {
        $this->values['TemplateParamSet'] = $value;
    }
    public function GetTemplateParamSet()
    {
        return $this->values['TemplateParamSet'];
    }
}