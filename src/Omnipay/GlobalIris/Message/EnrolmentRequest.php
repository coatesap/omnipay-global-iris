<?php

namespace Omnipay\GlobalIris\Message;

/**
 * GlobalIris 3D Secure enrolment request
 */
class EnrolmentRequest extends \Omnipay\Realex\Message\EnrolmentRequest
{
    protected $endpoint = 'https://remote.globaliris.com/realmpi';
}
