<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris Complete Auth Request
 */
class VerifySigRequest extends \Omnipay\Realex\Message\VerifySigRequest
{
    protected $endpoint = 'https://remote.globaliris.com/RealAuth';
}
