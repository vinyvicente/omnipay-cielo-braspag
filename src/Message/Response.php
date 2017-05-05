<?php

namespace Omnipay\Message;

use Omnipay\Common\Message\AbstractResponse;

class Response extends AbstractResponse
{
    /**
     * @var bool
     */
    protected $status = false;

    public function isSuccessful(): bool
    {
        return $this->status === true;
    }
}
