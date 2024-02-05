<?php

namespace Moka\Model;

class ApprovalRequest extends Model
{
    /**
     * @var string
     */
    protected $virtualPosOrderId;
    /**
     * @var int[]
     */

    protected $subDealers=[];
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
     * @return int
     */
    public function getSubDealers()
    {
        $output=[];
        foreach (array_unique($this->subDealers) as $key => $id) {
            $output[]['DealerId']=$id;
        }
        return $output;
    }

    /**
     * @param int $subDealer  
     */
    public function setSubDealer($subDealerId)
    {
        $this->subDealers[] = $subDealerId;
    }
    public function setSubDealers($subDealers)
    {
        $this->subDealers = $subDealers;
    }

    public function toArray()
    {
        return [
            'VirtualPosOrderId' => $this->getVirtualPosOrderId(),
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'SubDealer' => $this->getSubDealers()
        ];
    }
}
