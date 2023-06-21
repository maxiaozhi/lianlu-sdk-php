<?php
namespace Lianlu\Lianlu\Common;

class Utils
{
    protected $values = array();

    /**
     * 设置签名，详见签名生成算法
     * @param $config
     * @param $appKey
     * @return string
     */
    public function SetSign($config, $appKey)
    {
        $sign = $this->MakeSign($config, $appKey);
        $this->values['Signature'] = $sign;
        return $sign;
    }

    /**
     * 格式化参数格式化成url参数
     */
    public function ToUrlParams()
    {
        $buff = "";
        $noSignKey = array("Signature", "ContextParamSet", "TemplateParamSet", "SessionContextSet", "PhoneNumberSet", "SessionContext", "PhoneList", "phoneSet");
        foreach ($this->values as $k => $v)
        {
//            if($k != "Signature" && $k != "ContextParamSet" && $k != "TemplateParamSet" && $k != "SessionContextSet" && $k != "PhoneNumberSet" && $k != "SessionContext" && $v != "" && !is_array($v)){
            if(!in_array($k, $noSignKey) && $v != "" && !is_array($v)){
                $buff .= $k . "=" . $v . "&";
            }
        }
        return trim($buff, "&");
    }

    /**
     * 生成签名
     * @param $config
     * @param $appKey
     * @return string
     */
    public function MakeSign($config, $appKey)
    {
        //签名步骤一：按字典序排序参数
        ksort($this->values);
        $string = $this->ToUrlParams();
        //签名步骤二：在string后加入KEY
        $string = $string . "&key=".$appKey;
        //签名步骤三：MD5加密或者HMAC-SHA256
        $string = md5($string);

        //签名步骤四：所有字符转为大写
        return strtoupper($string);
    }

    /**
     * 输出xml字符
     *
     * @throws LianLuException
     */
    public function ToJson()
    {
        if(!is_array($this->values) || count($this->values) <= 0)
        {
            throw new LianLuException("数组数据异常！");
        }

        return json_encode($this->values);
    }

    /**
     * 获取毫秒级别的时间戳
     */
    public static function getMillisecond()
    {
        //获取毫秒的时间戳
        $time = explode ( " ", microtime () );
        $time = $time[1] . ($time[0] * 1000);
        $time2 = explode( ".", $time );
        return $time2[0];
    }
}