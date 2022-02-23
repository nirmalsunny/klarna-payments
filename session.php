<?php

require_once(__DIR__ . '/vendor/autoload.php');

use \nirmalsunny\KlarnaPayments\ApiException;

$config = \nirmalsunny\KlarnaPayments\Configuration::getDefaultConfiguration();
$config->setUsername('');
$config->setPassword('');
$config->setHost(\nirmalsunny\KlarnaPayments\KlarnaPlaygroundEndpoint::$EUROPE);

$apiInstance = new nirmalsunny\KlarnaPayments\Api\SessionsApi($config);

$product_one = new \nirmalsunny\KlarnaPayments\Model\OrderLine();
$product_one->setType('physical')
  ->setReference('12345689')
  ->setName('Product Name One')
  ->setQuantity(1)
  ->setUnitPrice(1000)
  ->setTaxRate(2000)
  ->setTotalAmount(1000)
  ->setTotalDiscountAmount(0)
  ->setTotalTaxAmount(0)
  ->setImageUrl('')
  ->setProductUrl('');

$product_two = new \nirmalsunny\KlarnaPayments\Model\OrderLine();
$product_two->setType('physical')
  ->setReference('12345699')
  ->setName('Product Name Two')
  ->setQuantity(2)
  ->setUnitPrice(500)
  ->setTaxRate(2000)
  ->setTotalAmount(1000)
  ->setTotalDiscountAmount(0)
  ->setTotalTaxAmount(0)
  ->setImageUrl('')
  ->setProductUrl('');

$body = new \nirmalsunny\KlarnaPayments\Model\Session(); // \nirmalsunny\KlarnaPayments\Model\Session | session_request

$body->setPurchaseCountry('GB')
  ->setPurchaseCurrency('GBP')
  ->setLocale('en-GB')
  ->setOrderAmount(2000)
  ->setOrderTaxAmount(0)
  ->setOrderLines($product_one)
  ->setOrderLines($product_two);

/* $data = '{
    "purchase_country": "GB",
    "purchase_currency": "GBP",
    "locale": "en-GB",
    "order_amount": 3704,
    "order_tax_amount": 0,
    "product_one": [{
      "type": "physical",
      "reference": "1122233",
      "name": "Party Poppers 100 Pack",
      "quantity": 3,
      "unit_price": 1141,
      "tax_rate": 0,
      "total_amount": 3423,
      "total_discount_amount": 0,
      "total_tax_amount": 0,
      "image_url": "https://www.ayushparty.co.uk/image/cache/catalog/products/party_accessories/noise_makers/4280-800x800.webp",
      "product_url": "https://www.ayushparty.co.uk/party-poppers-100-in-a-pack"
    },
    {
      "type": "physical",
      "reference": "25363254",
      "name": "Party Poppers, 25 In A Pack",
      "quantity": 1,
      "unit_price": 281,
      "tax_rate": 0,
      "total_amount": 281,
      "total_discount_amount": 0,
      "total_tax_amount": 0,
      "image_url": "https://www.ayushparty.co.uk/image/cache/catalog/products/party_accessories/noise_makers/4282-800x800.webp",
      "product_url": "https://www.ayushparty.co.uk/party-poppers-25-in-a-pack"
    }]
  }';

$data = json_decode($data, true);
$body = new \nirmalsunny\KlarnaPayments\Model\Session($data); */


try {
  $result = $apiInstance->createCreditSession($body);
  echo '<ul>';
  echo '<li>session_id: ' .  $result->getSessionId() . '</li>';
  echo '<li>client token: ' . $result->getClientToken() . '</li>';
  echo '<li>payment categories: ' . '<ul>';
  foreach ($result->getPaymentMethodCategories() as $payment_category) {
    echo '<li>name: ' .  $payment_category->getName() . '</li>';
    echo '<li>identifier: ' . $payment_category->getIdentifier() . '</li>';
    echo '<li><img src="', $payment_category->getAssetUrls()->getStandard(), '"></li>';
  }
  echo '</ul></li></ul>';
} catch (ApiException $e) {
  //print_r($e->getResponseHeaders());
}
