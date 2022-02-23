# Klarna Payments Library
The payments API is used to create a session to offer Klarna's payment methods as part of your checkout.  As soon as the purchase is completed the order should be read and handled using the [`Order Management API`].

Most files of this PHP package was automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

Important changes have been made for this package to be useful.

Added new classes and fixed existing ones.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

Run `composer install` to install all the dependenices

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/klarna-Payments/vendor/autoload.php');
```

Or, you already have a project?

 - Download the repository
 - Create a new folder called `nirmalsunny` under your `vendor` folder
 - Create another folder called `klarna-payments` and add the `lib` folder there.
 - Add these to your `composer.json`:
 ```json
 "autoload": {
        "psr-4": { "nirmalsunny\\KlarnaPayments\\" : "vendor/nirmalsunny/klarna-payments/lib/" }
    }
```
 - Add these if not already added in your `composer.json`
 ```json
 "require": {
        "guzzlehttp/guzzle": "^6.2"
    }
```
 - run `composer update`


## Tests

To do

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

use \nirmalsunny\KlarnaPayments\ApiException;

$config = \nirmalsunny\KlarnaPayments\Configuration::getDefaultConfiguration();
$config->setUsername('');
$config->setPassword('');
$config->setHost(\nirmalsunny\KlarnaPayments\KlarnaPlaygroundEndpoint::$EUROPE);

$apiInstance = new nirmalsunny\KlarnaPayments\Api\OrdersApi($config,
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (ApiException $e) {
    //print_r($e->getResponseHeaders());
}

$apiInstance = new nirmalsunny\KlarnaPayments\Api\OrdersApi($config,
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \nirmalsunny\KlarnaPayments\Model\CreateOrderRequest(); // \nirmalsunny\KlarnaPayments\Model\CreateOrderRequest | 

try {
    $result = $apiInstance->createOrder($authorization_token, $body);
    print_r($result);
} catch (ApiException $e) {
    //print_r($e->getResponseHeaders());
}

$apiInstance = new nirmalsunny\KlarnaPayments\Api\OrdersApi($config,
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \nirmalsunny\KlarnaPayments\Model\CustomerTokenCreationRequest(); // \nirmalsunny\KlarnaPayments\Model\CustomerTokenCreationRequest | 

try {
    $result = $apiInstance->purchaseToken($authorization_token, $body);
    print_r($result);
} catch (ApiException $e) {
    //print_r($e->getResponseHeaders());
}
?>
```
## Example

`session.php` is an example on how to create a session which is the first step in the flow.

## Documentation for API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersApi* | [**cancelAuthorization**](docs/Api/OrdersApi.md#cancelauthorization) | **DELETE** /payments/v1/authorizations/{authorizationToken} | Cancel an existing authorization
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /payments/v1/authorizations/{authorizationToken}/order | Create a new order
*OrdersApi* | [**purchaseToken**](docs/Api/OrdersApi.md#purchasetoken) | **POST** /payments/v1/authorizations/{authorizationToken}/customer-token | Generate a consumer token
*SessionsApi* | [**createCreditSession**](docs/Api/SessionsApi.md#createcreditsession) | **POST** /payments/v1/sessions | Create a new credit session
*SessionsApi* | [**readCreditSession**](docs/Api/SessionsApi.md#readcreditsession) | **GET** /payments/v1/sessions/{session_id} | Read an existing credit session
*SessionsApi* | [**updateCreditSession**](docs/Api/SessionsApi.md#updatecreditsession) | **POST** /payments/v1/sessions/{session_id} | Update an existing credit session

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AssetUrls](docs/Model/AssetUrls.md)
 - [Attachment](docs/Model/Attachment.md)
 - [AttachmentDisplay](docs/Model/AttachmentDisplay.md)
 - [AttachmentDisplayBody](docs/Model/AttachmentDisplayBody.md)
 - [AttachmentDisplayBodyAccountLastModified](docs/Model/AttachmentDisplayBodyAccountLastModified.md)
 - [AttachmentDisplayBodyAddress](docs/Model/AttachmentDisplayBodyAddress.md)
 - [AttachmentDisplayBodyAirReservationDetails](docs/Model/AttachmentDisplayBodyAirReservationDetails.md)
 - [AttachmentDisplayBodyArenaLocation](docs/Model/AttachmentDisplayBodyArenaLocation.md)
 - [AttachmentDisplayBodyBusReservationDetails](docs/Model/AttachmentDisplayBodyBusReservationDetails.md)
 - [AttachmentDisplayBodyCarRentalItinerary](docs/Model/AttachmentDisplayBodyCarRentalItinerary.md)
 - [AttachmentDisplayBodyCarRentalReservationDetails](docs/Model/AttachmentDisplayBodyCarRentalReservationDetails.md)
 - [AttachmentDisplayBodyCustomerAccountInfo](docs/Model/AttachmentDisplayBodyCustomerAccountInfo.md)
 - [AttachmentDisplayBodyEvent](docs/Model/AttachmentDisplayBodyEvent.md)
 - [AttachmentDisplayBodyHotelItinerary](docs/Model/AttachmentDisplayBodyHotelItinerary.md)
 - [AttachmentDisplayBodyHotelReservationDetails](docs/Model/AttachmentDisplayBodyHotelReservationDetails.md)
 - [AttachmentDisplayBodyInsurance](docs/Model/AttachmentDisplayBodyInsurance.md)
 - [AttachmentDisplayBodyItinerary](docs/Model/AttachmentDisplayBodyItinerary.md)
 - [AttachmentDisplayBodyItinerary1](docs/Model/AttachmentDisplayBodyItinerary1.md)
 - [AttachmentDisplayBodyMarketplaceSellerInfo](docs/Model/AttachmentDisplayBodyMarketplaceSellerInfo.md)
 - [AttachmentDisplayBodyMarketplaceWinnerInfo](docs/Model/AttachmentDisplayBodyMarketplaceWinnerInfo.md)
 - [AttachmentDisplayBodyOtherDeliveryAddress](docs/Model/AttachmentDisplayBodyOtherDeliveryAddress.md)
 - [AttachmentDisplayBodyPassengers](docs/Model/AttachmentDisplayBodyPassengers.md)
 - [AttachmentDisplayBodyPaymentHistoryFull](docs/Model/AttachmentDisplayBodyPaymentHistoryFull.md)
 - [AttachmentDisplayBodyPaymentHistorySimple](docs/Model/AttachmentDisplayBodyPaymentHistorySimple.md)
 - [AttachmentDisplayBodySubscription](docs/Model/AttachmentDisplayBodySubscription.md)
 - [AttachmentDisplayBodyUniqueAccountIdentifierSeller](docs/Model/AttachmentDisplayBodyUniqueAccountIdentifierSeller.md)
 - [AttachmentDisplayBodyVoucher](docs/Model/AttachmentDisplayBodyVoucher.md)
 - [AuthorizedPaymentMethod](docs/Model/AuthorizedPaymentMethod.md)
 - [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerTokenCreationRequest](docs/Model/CustomerTokenCreationRequest.md)
 - [CustomerTokenCreationResponse](docs/Model/CustomerTokenCreationResponse.md)
 - [ErrorV2](docs/Model/ErrorV2.md)
 - [Instant](docs/Model/Instant.md)
 - [MerchantSession](docs/Model/MerchantSession.md)
 - [MerchantUrls](docs/Model/MerchantUrls.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [OrderLine](docs/Model/OrderLine.md)
 - [PaymentMethodCategory](docs/Model/PaymentMethodCategory.md)
 - [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
 - [Session](docs/Model/Session.md)

## Documentation For Authorization

 All endpoints require authorization.

 The Authorization header is created and sent automatically.

 ## TODO

  - Documentation
  - Tests