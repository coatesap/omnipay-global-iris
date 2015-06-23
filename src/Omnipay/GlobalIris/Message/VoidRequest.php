<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris Void Request
 */
class VoidRequest extends \Omnipay\Realex\Message\VoidRequest
{
    protected $endpoint = 'https://remote.globaliris.com/RealAuth';
}
