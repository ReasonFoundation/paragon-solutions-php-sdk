# DCarbone\ParagonSolutionsPHPSDK\HostedPaymentPlusApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2HpplusCreatetokenPost()**](HostedPaymentPlusApi.md#v2HpplusCreatetokenPost) | **POST** /v2/hpplus/createtoken | Creates a one-time use, short-lived, Hosted Payment Plus Token for use in a subsequent transaction.
[**v2HpplusMerchantsByMerchantKeyKeysDelete()**](HostedPaymentPlusApi.md#v2HpplusMerchantsByMerchantKeyKeysDelete) | **DELETE** /v2/hpplus/merchants/{merchant_key}/keys | Deletes the merchant&#39;s Hosted Page Plus API Key
[**v2HpplusMerchantsByMerchantKeyKeysGet()**](HostedPaymentPlusApi.md#v2HpplusMerchantsByMerchantKeyKeysGet) | **GET** /v2/hpplus/merchants/{merchant_key}/keys | Fetches the merchant&#39;s Hosted Payment Plus API Key
[**v2HpplusMerchantsByMerchantKeyKeysPost()**](HostedPaymentPlusApi.md#v2HpplusMerchantsByMerchantKeyKeysPost) | **POST** /v2/hpplus/merchants/{merchant_key}/keys | Creates a new Hosted Payment Plus API Key, if one does not already exist for the merchant


## `v2HpplusCreatetokenPost()`

```php
v2HpplusCreatetokenPost($create_token): \DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse
```

Creates a one-time use, short-lived, Hosted Payment Plus Token for use in a subsequent transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\HostedPaymentPlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_token = new \DCarbone\ParagonSolutionsPHPSDK\Model\TokenGenerationModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\TokenGenerationModel

try {
    $result = $apiInstance->v2HpplusCreatetokenPost($create_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedPaymentPlusApi->v2HpplusCreatetokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_token** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\TokenGenerationModel**](../Model/TokenGenerationModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse**](../Model/HPTokenGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2HpplusMerchantsByMerchantKeyKeysDelete()`

```php
v2HpplusMerchantsByMerchantKeyKeysDelete($merchant_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse
```

Deletes the merchant's Hosted Page Plus API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\HostedPaymentPlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2HpplusMerchantsByMerchantKeyKeysDelete($merchant_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedPaymentPlusApi->v2HpplusMerchantsByMerchantKeyKeysDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse**](../Model/HPTokenGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2HpplusMerchantsByMerchantKeyKeysGet()`

```php
v2HpplusMerchantsByMerchantKeyKeysGet($merchant_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse
```

Fetches the merchant's Hosted Payment Plus API Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\HostedPaymentPlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2HpplusMerchantsByMerchantKeyKeysGet($merchant_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedPaymentPlusApi->v2HpplusMerchantsByMerchantKeyKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse**](../Model/HPTokenGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2HpplusMerchantsByMerchantKeyKeysPost()`

```php
v2HpplusMerchantsByMerchantKeyKeysPost($merchant_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse
```

Creates a new Hosted Payment Plus API Key, if one does not already exist for the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\HostedPaymentPlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2HpplusMerchantsByMerchantKeyKeysPost($merchant_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedPaymentPlusApi->v2HpplusMerchantsByMerchantKeyKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\HPTokenGenerationResponse**](../Model/HPTokenGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
