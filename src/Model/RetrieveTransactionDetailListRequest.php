<?php

namespace Moka\Model;

class RetrieveTransactionDetailListRequest extends Model
{
    /**
     * @var integer
     */
    protected $paymentId;

    /**
     * @var string
     */
    protected $otherTrxCode;

    /**
     * @var integer
     */
    protected $subDealerId;

    /**
     * @param string $otherTrxCode
     */
    public function setOtherTrxCode($otherTrxCode)
    {
        $this->otherTrxCode = $otherTrxCode;
    }

    /**
     * @return string
     */
    public function getOtherTrxCode()
    {
        return $this->otherTrxCode;
    }

    /**
     * @param integer $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }
    /**
     * @param integer $subDealerId
     */
    public function setSubDealerId($subDealerId)
    {
        $this->subDealerId = $subDealerId;
    }

    /**
     * @return integer
     */
    public function getSubDealerId()
    {
        return $this->subDealerId;
    }

    public function toArray()
    {
        return [
            'OtherTrxCode' => $this->getOtherTrxCode(),
            'PaymentId' => $this->getPaymentId(),
            'SubDealerId' => $this->getSubDealerId(),
        ];
    }
}
