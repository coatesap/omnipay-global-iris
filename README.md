# Omnipay: Global Iris

**Global Iris driver for the Omnipay payment processing library**

[![Total Downloads](https://poser.pugx.org/coatesap/omnipay-realex/d/total.png)](https://packagist.org/packages/coatesap/omnipay-global-iris)

[Omnipay](https://github.com/omnipay/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements Global Iris (Remote) integration for Omnipay, including optional 3D Secure support.

Global Iris is basically a branded version of the Realex payment gateway. Therefore, this driver extends the Omnipay Realex driver, overriding the default Realex URLs.

## Installation

The Global Iris driver is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "coatesap/omnipay-global-iris": "~1.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Global_Iris_Remote

For general usage instructions, please see the main [Omnipay](https://github.com/omnipay/omnipay)
repository.

## 3D Secure

The Global Iris driver has 3D Secure checking turned off by default.
To enable 3D Secure, make sure you have received a 3D Secure account reference from Global Iris, then set the `3dSecure` parameter as '1' when you initialise the gateway.

## Refunds

In order to process a refund, you must configure the gateway with the `refundPassword` parameter set to the 'rebate' password that Global Iris provide you with. In addition, you will need to pass the following parameters, relating to the original transaction: `amount`, `transactionReference`, `transactionId`, `currency`, `authCode`.
