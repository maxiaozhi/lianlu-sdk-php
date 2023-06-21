<?php

namespace Lianlu\Lianlu\models;

class Sms extends Common
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

    public function SetSignName($value)
    {
        $this->values['SignName'] = $value;
    }
    public function GetSignName()
    {
        return $this->values['SignName'];
    }

    public function SetSessionContextSet($value)
    {
        $this->values['SessionContextSet'] = $value;
    }
    public function GetSessionContextSet()
    {
        return $this->values['SessionContextSet'];
    }

    public function SetContextParamSet($value)
    {
        $this->values['ContextParamSet'] = $value;
    }
    public function GetContextParamSet()
    {
        return $this->values['ContextParamSet'];
    }

    public function SetType($value)
    {
        $this->values['Type'] = $value;
    }

    public function GetType()
    {
        return $this->values['Type'];
    }
}