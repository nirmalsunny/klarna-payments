# SwaggerClient-php
The payments API is used to create a session to offer Klarna's payment methods as part of your checkout.  As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](/order-management/api/).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAuthorization: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \Swagger\Client\Model\CreateOrderRequest(); // \Swagger\Client\Model\CreateOrderRequest | 

try {
    $result = $apiInstance->createOrder($authorization_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \Swagger\Client\Model\CustomerTokenCreationRequest(); // \Swagger\Client\Model\CustomerTokenCreationRequest | 

try {
    $result = $apiInstance->purchaseToken($authorization_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->purchaseToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

 All endpoints do not require authorization.


## Author



