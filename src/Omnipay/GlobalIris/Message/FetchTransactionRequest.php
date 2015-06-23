<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris Query Request
 */
class FetchTransactionRequest extends \Omnipay\Realex\Message\FetchTransactionRequest
{
    protected $endpoint = 'https://remote.globaliris.com/RealAuth';
}
