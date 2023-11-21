<?php
namespace Lianlu\Lianlu\Common;

class Credential
{
    private $mchId;

    private $appId;

    private $appKey;

    private $isHttp;

    private $version;

    public function __construct($mchId, $appId, $appKey, $version = '1.1.0', $isHttp = false){
        $this->mchId = $mchId;
        $this->appId = $appId;
        $this->appKey = $appKey;
        $this->version = $version;
        $this->isHttp = $isHttp;
    }

    /**
     * @return mixed
     */
    public function getMchId()
    {
        return $this->mchId;
    }

    /**
     * @param mixed $mchId
     */
    public function setMchId($mchId)
    {
        $this->mchId = $mchId;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return mixed
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param mixed $appKey
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    /**
     * @return mixed
     */
    public function getIsHttp()
    {
        return $this->isHttp;
    }

    /**
     * @param mixed $isHttp
     */
    public function setIsHttp($isHttp)
    {
        $this->isHttp = $isHttp;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version): void
    {
        $this->version = $version;
    }


}