# DCarbone\ParagonSolutionsPHPSDK\TerminalApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2TerminalByMerchantKeyPost()**](TerminalApi.md#v2TerminalByMerchantKeyPost) | **POST** /v2/terminal/{merchant_key} | Create a Terminal Record
[**v2TerminalByTerminalKeyGet()**](TerminalApi.md#v2TerminalByTerminalKeyGet) | **GET** /v2/terminal/{terminal_key} | Get Terminal Information
[**v2TerminalByTerminalKeyPatch()**](TerminalApi.md#v2TerminalByTerminalKeyPatch) | **PATCH** /v2/terminal/{terminal_key} | Partially update a Terminal Record
[**v2TerminalGetPost()**](TerminalApi.md#v2TerminalGetPost) | **POST** /v2/terminal/get | Get Terminal with parameters in Body


## `v2TerminalByMerchantKeyPost()`

```php
v2TerminalByMerchantKeyPost($merchant_key, $authorization, $terminal_request): \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTerminalResponseModel
```

Create a Terminal Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string | Gateway Merchant key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$terminal_request = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTerminalRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTerminalRequestModel | Terminal Request

try {
    $result = $apiInstance->v2TerminalByMerchantKeyPost($merchant_key, $authorization, $terminal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->v2TerminalByMerchantKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**| Gateway Merchant key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **terminal_request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTerminalRequestModel**](../Model/CreateTerminalRequestModel.md)| Terminal Request |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTerminalResponseModel**](../Model/CreateTerminalResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TerminalByTerminalKeyGet()`

```php
v2TerminalByTerminalKeyGet($terminal_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalResponseModel
```

Get Terminal Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$terminal_key = 'terminal_key_example'; // string | Filter Criteria
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2TerminalByTerminalKeyGet($terminal_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->v2TerminalByTerminalKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminal_key** | **string**| Filter Criteria |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalResponseModel**](../Model/GetTerminalResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TerminalByTerminalKeyPatch()`

```php
v2TerminalByTerminalKeyPatch($terminal_key, $authorization, $update_terminal): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTerminalResponseModel
```

Partially update a Terminal Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$terminal_key = 'terminal_key_example'; // string | Gateway Terminal key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$update_terminal = new \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTerminalRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTerminalRequestModel

try {
    $result = $apiInstance->v2TerminalByTerminalKeyPatch($terminal_key, $authorization, $update_terminal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->v2TerminalByTerminalKeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminal_key** | **string**| Gateway Terminal key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **update_terminal** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTerminalRequestModel**](../Model/UpdateTerminalRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTerminalResponseModel**](../Model/UpdateTerminalResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TerminalGetPost()`

```php
v2TerminalGetPost($authorization, $filter_by): \DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalResponseModel
```

Get Terminal with parameters in Body

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$filter_by = new \DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalRequestModel | Gateway Merchant key

try {
    $result = $apiInstance->v2TerminalGetPost($authorization, $filter_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->v2TerminalGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **filter_by** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalRequestModel**](../Model/GetTerminalRequestModel.md)| Gateway Merchant key |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTerminalResponseModel**](../Model/GetTerminalResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
