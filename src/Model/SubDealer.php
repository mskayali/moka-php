<?php

namespace Moka\Model;

class SubDealer extends Model
{
    /**
     * @var int
     */
    protected $dealerId;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var float
     */
    protected $dealerCommissionRate;
    /**
     * @var float
     */
    protected $dealerCommissionFixedAmount;
    /**
     * @var float
     */
    protected $groupRevenueRate;
    /**
     * @var float
     */
    protected $groupRevenueAmount;
    /**
     * @var float
     */
    protected $amountToBeCommissioned;
    /**
     * @var float
     */
    protected $isIncludedFixedAmount;

    public function getDealerId(){
        return $this->dealerId;
    }
    public function setDealerId(int $dealerId){
        $this->dealerId=$dealerId;

    }
    public function getAmount(){
        return $this->amount;
    }
    public function setAmount(float $amount){
        $this->amount=$amount;

    }
    public function getDealerCommissionRate(){
        return $this->dealerCommissionRate;
    }
    public function setDealerCommissionRate(float $dealerCommissionRate){
        $this->dealerCommissionRate=$dealerCommissionRate;

    }
    public function getDealerCommissionFixedAmount(){
        return $this->dealerCommissionFixedAmount;
    }
    public function setDealerCommissionFixedAmount(float $dealerCommissionFixedAmount){
        $this->dealerCommissionFixedAmount=$dealerCommissionFixedAmount;

    }
    public function getGroupRevenueRate(){
        return $this->groupRevenueRate;
    }
    public function setGroupRevenueRate(float $groupRevenueRate){
        $this->groupRevenueRate=$groupRevenueRate;

    }
    public function getGroupRevenueAmount(){
        return $this->groupRevenueAmount;
    }
    public function setGroupRevenueAmount(float $groupRevenueAmount){
        $this->groupRevenueAmount=$groupRevenueAmount;

    }
    public function getAmountToBeCommissioned(){
        return $this->amountToBeCommissioned;
    }
    public function setAmountToBeCommissioned(float $amountToBeCommissioned){
        $this->amountToBeCommissioned=$amountToBeCommissioned;

    }
    public function getIsIncludedFixedAmount(){
        return $this->isIncludedFixedAmount;
    }
    public function setIsIncludedFixedAmount(float $isIncludedFixedAmount){
        $this->isIncludedFixedAmount=$isIncludedFixedAmount;
    }




    public function toArray()
    {
        return [
            "DealerId"=>$this->getDealerId(),
            "Amount"=>$this->getAmount(),
            "DealerCommissionRate"=>$this->getDealerCommissionRate(),
            "DealerCommissionFixedAmount"=>$this->getDealerCommissionFixedAmount(),
            "GroupRevenueRate"=>$this->getGroupRevenueRate(),
            "GroupRevenueAmount"=>$this->getGroupRevenueAmount(),
            "AmountToBeCommissioned"=>$this->getAmountToBeCommissioned(),
            "IsIncludedFixedAmount"=>$this->getIsIncludedFixedAmount(),
        ];
    }
}
