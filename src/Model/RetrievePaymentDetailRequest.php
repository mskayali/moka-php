<?php

namespace Moka\Model;

class RetrievePaymentDetailRequest extends Model
{
    /**
     * @var string
     */
    protected $subDealerId;

    /**
     * @var string
     */
    protected $paymentId;

    /**
     * @var string
     */
    protected $otherTrxCode;

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId  
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
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
    public function getSubDealerId()
    {
        return $this->subDealerId;
    }

    /**
     * @param int $subDealerId  
     */
    public function setSubDealerId($subDealerId)
    {
        $this->subDealerId = $subDealerId;
    }

    public function toArray()
    {
        return [
            'PaymentId' => $this->getPaymentId(),
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'SubDealerId' => $this->getSubDealerId()
        ];
    }
}
