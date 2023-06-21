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
}