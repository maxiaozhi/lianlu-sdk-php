<?php

namespace Lianlu\Lianlu\models;

class Sign extends Common
{
    public function SetContent($value)
    {
        $this->values['content'] = $value;
    }
    public function GetContent()
    {
        return $this->values['content'];
    }

    public function SetRemark($value)
    {
        $this->values['remark'] = $value;
    }
    public function GetRemark()
    {
        return $this->values['remark'];
    }

    public function SetCreditCodeUrl($value)
    {
        $this->values['creditCodeUrl'] = $value;
    }
    public function GetCreditCodeUrl()
    {
        return $this->values['creditCodeUrl'];
    }

    public function SetIdCardFront($value)
    {
        $this->values['idCardFront'] = $value;
    }
    public function GetIdCardFront()
    {
        return $this->values['idCardFront'];
    }

    public function SetIdCardBack($value)
    {
        $this->values['idCardBack'] = $value;
    }
    public function GetIdCardBack()
    {
        return $this->values['idCardBack'];
    }
}