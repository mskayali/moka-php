<?php

namespace Moka\Model;

class CaptureRequest extends Model
{
    /**
     * @var string
     */
    protected $virtualPosOrderId;

    /**
     * @var string
     */
    protected $otherTrxCode;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $clientIp;
    /**
     * @var SubDealer
     */
    protected $subDealer;

    /**
     * @return string
     */
    public function getVirtualPosOrderId()
    {
        return $this->virtualPosOrderId;
    }

    /**
     * @param string $virtualPosOrderId  
     */
    public function setVirtualPosOrderId($virtualPosOrderId)
    {
        $this->virtualPosOrderId = $virtualPosOrderId;
    }

    /**
     * @return string
     */
    public function getOtherTrxCode()
    {
        return $this->otherTrxCode;
    }

    /**
     * @param string $otherTrxCode  
     */
    public function setOtherTrxCode($otherTrxCode)
    {
        $this->otherTrxCode = $otherTrxCode;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount  
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp  
     */
    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
    }
    /**
     * @return array
     */
    public function getSubDealer()
    {
        return $this->subDealer;
    }

    /**
     * @param SubDealer $subDealer  
     */
    public function setSubDealer(SubDealer $subDealer)
    {
        $this->subDealer = $subDealer;
    }

    public function toArray()
    {
        return [
            'VirtualPosOrderId' => $this->getVirtualPosOrderId(),
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'Amount' => $this->getAmount(),
            'ClientIP' => $this->getClientIP(),
            'SubDealer' => $this->getSubDealer()
        ];
    }
}
