# DCarbone\ParagonSolutionsPHPSDK\PaymentSafeApi

All URIs are relative to https://stage.paragonsolutions.com/api/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2PaymentsafeCardsByCardKeyDelete()**](PaymentSafeApi.md#v2PaymentsafeCardsByCardKeyDelete) | **DELETE** /v2/paymentsafe/cards/{card_key} | Delete secured Credit Card details.
[**v2PaymentsafeCardsByCardKeyGet()**](PaymentSafeApi.md#v2PaymentsafeCardsByCardKeyGet) | **GET** /v2/paymentsafe/cards/{card_key} | Get details about a PaymentSafe secured Credit Card.
[**v2PaymentsafeCardsByCardKeyPatch()**](PaymentSafeApi.md#v2PaymentsafeCardsByCardKeyPatch) | **PATCH** /v2/paymentsafe/cards/{card_key} | Partial update of secured Credit Card details.
[**v2PaymentsafeCardsByCardKeyPut()**](PaymentSafeApi.md#v2PaymentsafeCardsByCardKeyPut) | **PUT** /v2/paymentsafe/cards/{card_key} | Update secured Credit Card details.
[**v2PaymentsafeCardsPost()**](PaymentSafeApi.md#v2PaymentsafeCardsPost) | **POST** /v2/paymentsafe/cards | Add secured Credit Card details.
[**v2PaymentsafeChecksByCheckKeyDelete()**](PaymentSafeApi.md#v2PaymentsafeChecksByCheckKeyDelete) | **DELETE** /v2/paymentsafe/checks/{check_key} | Delete secured Check details.
[**v2PaymentsafeChecksByCheckKeyGet()**](PaymentSafeApi.md#v2PaymentsafeChecksByCheckKeyGet) | **GET** /v2/paymentsafe/checks/{check_key} | Get details about a PaymentSafe secured Check.
[**v2PaymentsafeChecksByCheckKeyPut()**](PaymentSafeApi.md#v2PaymentsafeChecksByCheckKeyPut) | **PUT** /v2/paymentsafe/checks/{check_key} | Update secured Check details.
[**v2PaymentsafeChecksPost()**](PaymentSafeApi.md#v2PaymentsafeChecksPost) | **POST** /v2/paymentsafe/checks | Add secured Check details.


## `v2PaymentsafeCardsByCardKeyDelete()`

```php
v2PaymentsafeCardsByCardKeyDelete($card_key, $authorization, $card_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Delete secured Credit Card details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_key = 'card_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$card_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeCardsByCardKeyDelete($card_key, $authorization, $card_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeCardsByCardKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **card_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel**](../Model/CardTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeCardsByCardKeyGet()`

```php
v2PaymentsafeCardsByCardKeyGet($card_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentSafeCardResponseModel
```

Get details about a PaymentSafe secured Credit Card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_key = 'card_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2PaymentsafeCardsByCardKeyGet($card_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeCardsByCardKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentSafeCardResponseModel**](../Model/GetPaymentSafeCardResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeCardsByCardKeyPatch()`

```php
v2PaymentsafeCardsByCardKeyPatch($card_key, $authorization, $card_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Partial update of secured Credit Card details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_key = 'card_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$card_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeCardsByCardKeyPatch($card_key, $authorization, $card_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeCardsByCardKeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **card_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel**](../Model/CardTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeCardsByCardKeyPut()`

```php
v2PaymentsafeCardsByCardKeyPut($card_key, $authorization, $card_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Update secured Credit Card details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_key = 'card_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$card_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeCardsByCardKeyPut($card_key, $authorization, $card_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeCardsByCardKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **card_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel**](../Model/CardTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeCardsPost()`

```php
v2PaymentsafeCardsPost($authorization, $card_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Add secured Credit Card details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$card_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeCardsPost($authorization, $card_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeCardsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **card_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CardTokenRequestModel**](../Model/CardTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeChecksByCheckKeyDelete()`

```php
v2PaymentsafeChecksByCheckKeyDelete($check_key, $authorization, $check_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Delete secured Check details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_key = 'check_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$check_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeChecksByCheckKeyDelete($check_key, $authorization, $check_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeChecksByCheckKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **check_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel**](../Model/CheckTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeChecksByCheckKeyGet()`

```php
v2PaymentsafeChecksByCheckKeyGet($check_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentSafeCheckResponseModel
```

Get details about a PaymentSafe secured Check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_key = 'check_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2PaymentsafeChecksByCheckKeyGet($check_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeChecksByCheckKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentSafeCheckResponseModel**](../Model/GetPaymentSafeCheckResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeChecksByCheckKeyPut()`

```php
v2PaymentsafeChecksByCheckKeyPut($check_key, $authorization, $check_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Update secured Check details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_key = 'check_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$check_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeChecksByCheckKeyPut($check_key, $authorization, $check_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeChecksByCheckKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **check_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel**](../Model/CheckTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2PaymentsafeChecksPost()`

```php
v2PaymentsafeChecksPost($authorization, $check_token_request_model): \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse
```

Add secured Check details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\PaymentSafeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$check_token_request_model = new \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel

try {
    $result = $apiInstance->v2PaymentsafeChecksPost($authorization, $check_token_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSafeApi->v2PaymentsafeChecksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **check_token_request_model** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CheckTokenRequestModel**](../Model/CheckTokenRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentSafeResponse**](../Model/PaymentSafeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
