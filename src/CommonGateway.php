<?php

namespace Omnipay;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\RequestInterface;

abstract class CommonGateway extends AbstractGateway
{
    /**
     * @param string $merchantId
     * @return CommonGateway
     */
    public function setMerchantId(string $merchantId): CommonGateway
    {
        $this->setParameter('merchantId', $merchantId);

        return $this;
    }

    /**
     * @param string $merchantKey
     * @return CommonGateway
     */
    public function setMerchantKey(string $merchantKey): CommonGateway
    {
        $this->setParameter('merchantKey', $merchantKey);

        return $this;
    }

    /**
     * @param string $requestId
     * @return CommonGateway
     */
    public function setRequestId(string $requestId): CommonGateway
    {
        $this->setParameter('requestId', $requestId);

        return $this;
    }

    public function authorize(array $options = []): RequestInterface
    {
    }

    public function completeAuthorize(array $options = []): RequestInterface
    {
    }

    public function void(array $options = []): RequestInterface
    {
    }

    public function capture(array $options = []): RequestInterface
    {
    }

    public function deleteCard(array $options = []): RequestInterface
    {
    }

    public function refund(array $options = []): RequestInterface
    {
    }

    public function purchase(array $options = []): RequestInterface
    {
    }

    public function completePurchase(array $options = []): RequestInterface
    {
    }

    public function createCard(array $options = []): RequestInterface
    {
    }

    public function updateCard(array $options = []): RequestInterface
    {
    }
}
