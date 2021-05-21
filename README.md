# WHMCS Smanager Payment Gateway Module #

## Summary ##

Smanager Payment Gateway modules allow you to integrate payment solutions with the WHMCS
platform.

There are two types of gateway module:

* payment methods and checkouts allow merchants to offer payment methods not available today as an inline experience. When users choose an external payment method they will be redirected to a link provided by the merchant and operated by the merchant.

For more information, please refer to the documentation at:
Smanager External Payment JSON Documentation:
https://www.smanager.xyz/web/tech-rehal/external-payments/documentation 
(You Must have to be logged In)


## Recommended Module Content ##

The recommended structure of a third party gateway module is as follows.

```
 modules/gateways/
  |- callback/smanager.php
  |  smanager.php
```

## Minimum Requirements ##

For the latest WHMCS minimum system requirements, please refer to
https://docs.whmcs.com/System_Requirements

We recommend your module follows the same minimum requirements wherever
possible.

## Contributor
* [Istiyak Amin](https://facebook.com/istiyakamin10)
* [Inzamam Ul Haque Apu](https://www.facebook.com/apu27888)
