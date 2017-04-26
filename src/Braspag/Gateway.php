<?php

namespace Omnipay\Braspag;

use Omnipay\CommonGateway;

class Gateway extends CommonGateway
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Braspag';
    }
}
