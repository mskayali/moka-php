<?php

namespace Moka\Service;

use Moka\Model\CreatePaymentLinkRequest;
use Moka\Model\CreatePaymentLinkRequestMarketPlace;
use Moka\Model\PaymentUserPosRequest;

class PaymentLinkService extends AbstractService
{
    /**
     * @param \Moka\Model\CreatePaymentLinkRequest $createPaymentLinkRequest
     * @return \Moka\ApiResponse
     */
    public function create(CreatePaymentLinkRequest $createPaymentLinkRequest)
    {
        $request = new PaymentUserPosRequest();
        $request->setDealerAuthentication($this->getClient()->getAuthorizationParams());
        $request->setPaymentUserPosRequest($createPaymentLinkRequest);

        return $this->request('POST', '/PaymentUserPos/CreateUserPosPayment', $request);
    }
    public function createMarketPlace(CreatePaymentLinkRequest $createPaymentLinkRequestMarketPlace)
    {
        $request = new PaymentUserPosRequest();
        $request->setDealerAuthentication($this->getClient()->getAuthorizationParams());
        $request->setPaymentUserPosRequest($createPaymentLinkRequestMarketPlace);

        return $this->request('POST', '/PaymentUserPos/CreateUserPosPaymentMarketPlace', $request);
    }
}
