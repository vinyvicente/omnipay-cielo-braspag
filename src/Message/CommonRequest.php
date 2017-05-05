<?php

namespace Omnipay\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Message\ResponseInterface;

abstract class CommonRequest extends AbstractRequest
{
    public function sendData($data): ResponseInterface
    {
        return $this->response = new Response($this, $data);
    }
}
