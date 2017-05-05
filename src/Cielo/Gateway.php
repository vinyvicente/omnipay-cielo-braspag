<?php

namespace Omnipay\Cielo;

use Omnipay\CommonGateway;

class Gateway extends CommonGateway
{
    public function getName(): string
    {
        return 'Cielo';
    }
}
