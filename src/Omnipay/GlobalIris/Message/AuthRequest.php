<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris Auth Request
 */
class AuthRequest extends \Omnipay\Realex\Message\AuthRequest
{
    protected $endpoint = 'https://remote.globaliris.com/RealAuth';
}
