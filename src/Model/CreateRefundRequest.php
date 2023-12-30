<?php

namespace Moka\Model;

class CreateRefundRequest extends Model
{
    /**
     * @var SubDealer
     */
    protected $subDealer;
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
     * @return SubDealer
     */
    public function getSubDealer()
    {
        return $this->subDealer;
    }

    /**
     * @param SubDealer $subDealer  
     */
    public function setSubDealer($subDealer)
    {
        $this->subDealer = $subDealer;
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

    public function toArray()
    {
        return [
            'SubDealer' => $this->getSubDealer(),
            'VirtualPosOrderId' => $this->getVirtualPosOrderId(),
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'Amount' => $this->getAmount()
        ];
    }
}
