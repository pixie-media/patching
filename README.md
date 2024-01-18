# Patches

## To install

    composer require pixie-media/patching

## To apply

    ./vendor/pixie-media/patching/bin/ece-patches apply

## Universal patches

In this repo

    ./patches

What adding patch to this repo update `patches.json`

Version relates to version found in `composer.lock`

### Format

    Correct format: <TICKET_NUMBER>__<TITLE>__<PACKAGE_VERSION>.patch    
    Example: MAGECLOUD-2899__fix_redis_slave_configuration__2.3.0.patch

### Example

[PIXIE001__exception__2.4.5.patch](patches/PIXIE001__exception__2.4.5.patch)

## Local patches

In project repo

    ./m2-hotfixes

Example patch

    ./m2-hotfixes/ga-patch.patch

```
diff --git a/vendor/magento/module-google-gtag/Block/Ga.php b/vendor/magento/module-google-gtag/Block/Ga.php
index ab5824a27..1597db4f8 100644
--- a/vendor/magento/module-google-gtag/Block/Ga.php
+++ b/vendor/magento/module-google-gtag/Block/Ga.php
@@ -159,6 +159,7 @@ class Ga extends Template
                 'value' => number_format((float) $order->getGrandTotal(), 2),
                 'tax' => number_format((float) $order->getTaxAmount(), 2),
                 'shipping' => number_format((float) $order->getShippingAmount(), 2),
+                'currency' => $order->getOrderCurrencyCode(),
             ];
             $result['currency'] = $order->getOrderCurrencyCode();
         }

```

## How to create a local patch

You want to patch `./vendor/magento/module-catalog/Model/ResourceModel/Product.php`

Note: project must be a git repo

  -  download `/vendor/magento/module-catalog/Model/ResourceModel/Product.php`

  -  `git add -f ./vendor/magento/module-catalog/Model/ResourceModel/Product.php`

  -  Edit file

  -  `git diff ./vendor/magento/module-catalog/Model/ResourceModel/Product.php > ./m2-hotfixes/test.patch`

  -  commit `./m2-hotfixes/test.patch` to repo


Note: You will need to revert changes to test patch applies correctly

  ## Global patch log

| Code | Description | File name |
| ---------|----------|----------|
| PIXIE001 | 2.4.5 No exception log fix | PIXIE001__exception__2.4.5.patch |
| PIXIE002 | 3DS lookup error 2.4.5p1-p5 | PIXIE002__braintree-3ds-lookup-error-fix__2.4.5-p1_p2_p3_p4_p5.patch |
