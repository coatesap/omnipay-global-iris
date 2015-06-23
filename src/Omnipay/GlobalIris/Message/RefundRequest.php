<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris Refund Request
 */
class RefundRequest extends \Omnipay\Realex\Message\RefundRequest
{
    protected $endpoint = 'https://remote.globaliris.com/RealAuth';
}
