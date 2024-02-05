<?php

namespace Moka\Model;

class CreateDealerRequest extends Model
{
    /**
     * @var int
     */
    protected $dealerType;
    /**
     * @var string
     */
    protected $trIdentityNumber;

    protected $subDealerCode;
    protected $dealerName;

    /**
     * @var string
     */
    protected $individualName;
    /**
     * @var string
     */
    protected $taxNumber;
    /**
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $contactName;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $cityCode;
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $iBanFullName;
    /**
     * @var string
     */
    protected $iBan;
    /**
     * @var string
     */
    protected $blockedDayNumber;
    /**
     * @var string
     */
    protected $paymentDaysOfWeek;
    /**
     * @var string
     */
    protected $mokaPosProposalTemplateLimitId;
    /**
     * @var string
     */
    protected $mokaPosProposalTemplateRateId;
    protected $commissionRateList;


    /**
     * @var int
     */
    public function getDealerType()
    {
        return $this->dealerType;
    }

    /**
     * @param int $dealerType  
     */
    public function setDealerType(int $dealerType)
    {
        $this->dealerType = $dealerType;
    }
    /**
     * @var int
     */
    public function getCommissionRateList()
    {
        return $this->commissionRateList ?? [];
    }

    /**
     * @param int $commissionRateList  
     */
    public function setCommissionRateList(int $commissionRateList)
    {
        $this->commissionRateList = $commissionRateList;
    }
    /**
     * @var string
     */
    public function getTrIdentityNumber()
    {
        return $this->trIdentityNumber;
    }

    /**
     * @param string $trIdentityNumber  
     */
    public function setTrIdentityNumber($trIdentityNumber)
    {
        $this->trIdentityNumber = $trIdentityNumber;
    }
    /**
     * @var string
     */
    public function getDealerName()
    {
        return $this->dealerName;
    }

    /**
     * @param string $DealerName  
     */
    public function setDealerName($dealerName)
    {
        $this->dealerName = $dealerName;
    }
    /**
     * @var string
     */
    public function getIndividualName()
    {
        return $this->individualName;
    }

    /**
     * @param string $individualName  
     */
    public function setIndividualName($individualName)
    {
        $this->individualName = $individualName;
    }
    /**
     * @var string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * @param string $TaxNumber  
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    }
    /**
     * @var string
     */
    public function getSubDealerCode()
    {
        return $this->subDealerCode;
    }

    /**
     * @param string $subDealerCode  
     */
    public function setSubDealerCode($subDealerCode)
    {
        $this->subDealerCode = $subDealerCode;
    }
    /**
     * @var string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName  
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    /**
     * @var string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $ContactName  
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }
    /**
     * @var string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email  
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @var string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber  
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    /**
     * @var string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param string $CityCode  
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }
    /**
     * @var string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode  
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = CountryModel::getCountryIdByCode($countryCode);
    }
    /**
     * @var string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address  
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    /**
     * @var string
     */
    public function getIBanFullName()
    {
        return $this->iBanFullName;
    }

    /**
     * @param string $iBanFullName  
     */
    public function setIBanFullName($iBanFullName)
    {
        $this->iBanFullName = $iBanFullName;
    }
    /**
     * @var string
     */
    public function getIBan()
    {
        return $this->iBan;
    }

    /**
     * @param string $iBan  
     */
    public function setIBan($iBan)
    {
        $this->iBan = $iBan;
    }
    /**
     * @var string
     */
    public function getBlockedDayNumber()
    {
        return $this->blockedDayNumber;
    }

    /**
     * @param string $blockedDayNumber  
     */
    public function setBlockedDayNumber($blockedDayNumber)
    {
        $this->blockedDayNumber = $blockedDayNumber;
    }
    /**
     * @var string
     */
    public function getPaymentDaysOfWeek()
    {
        return $this->paymentDaysOfWeek;
    }

    /**
     * @param string $PaymentDaysOfWeek  
     */
    public function setPaymentDaysOfWeek($paymentDaysOfWeek)
    {
        $this->paymentDaysOfWeek = $paymentDaysOfWeek;
    }
    /**
     * @var string
     */
    public function getMokaPosProposalTemplateLimitId()
    {
        return $this->mokaPosProposalTemplateLimitId;
    }

    /**
     * @param string $mokaPosProposalTemplateLimitId  
     */
    public function setMokaPosProposalTemplateLimitId($mokaPosProposalTemplateLimitId)
    {
        $this->mokaPosProposalTemplateLimitId = $mokaPosProposalTemplateLimitId;
    }
    /**
     * @var string
     */
    public function getMokaPosProposalTemplateRateId()
    {
        return $this->mokaPosProposalTemplateRateId;
    }

    /**
     * @param string $mokaPosProposalTemplateRateId  
     */
    public function setMokaPosProposalTemplateRateId(int $mokaPosProposalTemplateRateId)
    {
        $this->mokaPosProposalTemplateRateId = $mokaPosProposalTemplateRateId;
    }


    public function toArray()
    {
        return [
            'CommissionRateList'=>$this->getCommissionRateList(),
            'DealerName'=>$this->getDealerName(),
            'DealerType'=>$this->getDealerType(),
            'TRIdentityNumber'=>$this->getTrIdentityNumber(),
            'IndividualName'=>$this->getIndividualName(),
            'SubDealerCode'=>$this->getSubDealerCode(),
            'TaxNumber'=>$this->getTaxNumber(),
            'CompanyName'=>$this->getCompanyName(),
            'ContactName'=>$this->getContactName(),
            'Email'=>$this->getEmail(),
            'PhoneNumber'=>$this->getPhoneNumber(),
            'CityCode'=>$this->getCityCode(),
            'CountryCode'=>$this->getCountryCode(),
            'Address'=>$this->getAddress(),
            'IBanFullName'=>$this->getIBanFullName(),
            'IBan'=>$this->getIBan(),
            'BlockedDayNumber'=>$this->getBlockedDayNumber(),
            'PaymentDaysOfWeek'=>$this->getPaymentDaysOfWeek(),
            'MokaPosProposalTemplateLimitId'=>$this->getMokaPosProposalTemplateLimitId(),
            'MokaPosProposalTemplateRateId'=>$this->getMokaPosProposalTemplateRateId(),
        ];
    }
}
