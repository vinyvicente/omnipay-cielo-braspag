<?php

namespace Omnipay\Braspag;

use Omnipay\Tests\GatewayTestCase;
use Omnipay\Common\CreditCard;

class BraspagTest extends GatewayTestCase
{
    /** @var Gateway */
    public $gateway;

    /** @var array */
    public $options;

    /** @var array */
    public $subscription_options;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
        $this->gateway->setMerchantId('TEST-TOKEN-123');
        $this->gateway->setMerchantKey(time() + 600);

        $this->options = array(
            'amount' => '10.00',
            'card' => new CreditCard(array(
                'firstName' => 'Example',
                'lastName' => 'User',
                'number' => '4111111111111111',
                'expiryMonth' => '12',
                'expiryYear' => '2017',
                'cvv' => '123',
            )),
        );

        $this->subscription_options = array(
            'transactionReference'  => 'ABC-1234',
            'description'           => 'Description goes here',
        );
    }

    public function testAuthorize()
    {
        $this->setMockHttpResponse('RestPurchaseSuccess.txt');

        $response = $this->gateway->authorize($this->options)->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertEquals('44E89981F8714392Y', $response->getTransactionReference());
        $this->assertNull($response->getMessage());
    }

}