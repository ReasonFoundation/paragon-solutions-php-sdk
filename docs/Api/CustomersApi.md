# DCarbone\ParagonSolutionsPHPSDK\CustomersApi

All URIs are relative to https://stage.paragonsolutions.com/api/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2CustomersByCustomerKeyDelete()**](CustomersApi.md#v2CustomersByCustomerKeyDelete) | **DELETE** /v2/customers/{customer_key} | Delete Customer of Recurring Payment Agreement.
[**v2CustomersByCustomerKeyGet()**](CustomersApi.md#v2CustomersByCustomerKeyGet) | **GET** /v2/customers/{customer_key} | Get Customer Information
[**v2CustomersByCustomerKeyPut()**](CustomersApi.md#v2CustomersByCustomerKeyPut) | **PUT** /v2/customers/{customer_key} | Update Primary Contact and Billing Address for Customer of Recurring Payment Agreement.
[**v2CustomersPost()**](CustomersApi.md#v2CustomersPost) | **POST** /v2/customers | Add Primary Contact and Billing Address for Customer of Recurring Payment Agreement.


## `v2CustomersByCustomerKeyDelete()`

```php
v2CustomersByCustomerKeyDelete($customer_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse
```

Delete Customer of Recurring Payment Agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_key = 'customer_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2CustomersByCustomerKeyDelete($customer_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->v2CustomersByCustomerKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse**](../Model/CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CustomersByCustomerKeyGet()`

```php
v2CustomersByCustomerKeyGet($customer_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetCustomerResponseModel
```

Get Customer Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_key = 'customer_key_example'; // string | Customer Key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2CustomersByCustomerKeyGet($customer_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->v2CustomersByCustomerKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_key** | **string**| Customer Key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetCustomerResponseModel**](../Model/GetCustomerResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CustomersByCustomerKeyPut()`

```php
v2CustomersByCustomerKeyPut($customer_key, $authorization, $customers): \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse
```

Update Primary Contact and Billing Address for Customer of Recurring Payment Agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_key = 'customer_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$customers = new \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel

try {
    $result = $apiInstance->v2CustomersByCustomerKeyPut($customer_key, $authorization, $customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->v2CustomersByCustomerKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **customers** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel**](../Model/CustomersModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse**](../Model/CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CustomersPost()`

```php
v2CustomersPost($authorization, $customers): \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse
```

Add Primary Contact and Billing Address for Customer of Recurring Payment Agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$customers = new \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel

try {
    $result = $apiInstance->v2CustomersPost($authorization, $customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->v2CustomersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **customers** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CustomersModel**](../Model/CustomersModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CustomersResponse**](../Model/CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
