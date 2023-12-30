<?php

namespace Moka\Model;

class ApprovalRequest extends Model
{
    /**
     * @var string
     */
    protected $virtualPosOrderId;
    /**
     * @var SubDealer
     */
    protected $subDealer;
    /**
     * @var string
     */
    protected $otherTrxCode;

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

    public function toArray()
    {
        return [
            'VirtualPosOrderId' => $this->getVirtualPosOrderId(),
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'SubDealer' => $this->getSubDealer()
        ];
    }
}
