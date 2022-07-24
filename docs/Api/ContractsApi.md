# DCarbone\ParagonSolutionsPHPSDK\ContractsApi

All URIs are relative to https://stage.paragonsolutions.com/api/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2ContractsByContractKeyDelete()**](ContractsApi.md#v2ContractsByContractKeyDelete) | **DELETE** /v2/contracts/{contract_key} | Delete a Recurring Payment Agreement for a Customer.
[**v2ContractsByContractKeyGet()**](ContractsApi.md#v2ContractsByContractKeyGet) | **GET** /v2/contracts/{contract_key} | Get a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.
[**v2ContractsByContractKeyPatch()**](ContractsApi.md#v2ContractsByContractKeyPatch) | **PATCH** /v2/contracts/{contract_key} | Update the NextBillDate element of a Recurring Payment Agreement.
[**v2ContractsByContractKeyPut()**](ContractsApi.md#v2ContractsByContractKeyPut) | **PUT** /v2/contracts/{contract_key} | Update a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.
[**v2ContractsPost()**](ContractsApi.md#v2ContractsPost) | **POST** /v2/contracts | Add a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.


## `v2ContractsByContractKeyDelete()`

```php
v2ContractsByContractKeyDelete($contract_key, $authorization, $contracts): \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse
```

Delete a Recurring Payment Agreement for a Customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_key = 'contract_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$contracts = new \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel

try {
    $result = $apiInstance->v2ContractsByContractKeyDelete($contract_key, $authorization, $contracts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->v2ContractsByContractKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **contracts** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel**](../Model/ContractsModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse**](../Model/ContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ContractsByContractKeyGet()`

```php
v2ContractsByContractKeyGet($contract_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetContractResponseModel
```

Get a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_key = 'contract_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2ContractsByContractKeyGet($contract_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->v2ContractsByContractKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetContractResponseModel**](../Model/GetContractResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ContractsByContractKeyPatch()`

```php
v2ContractsByContractKeyPatch($contract_key, $authorization, $contracts_next_bill_date): \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse
```

Update the NextBillDate element of a Recurring Payment Agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_key = 'contract_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$contracts_next_bill_date = new \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsNextBillDtModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsNextBillDtModel

try {
    $result = $apiInstance->v2ContractsByContractKeyPatch($contract_key, $authorization, $contracts_next_bill_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->v2ContractsByContractKeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **contracts_next_bill_date** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsNextBillDtModel**](../Model/ContractsNextBillDtModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse**](../Model/ContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ContractsByContractKeyPut()`

```php
v2ContractsByContractKeyPut($contract_key, $authorization, $contracts): \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse
```

Update a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_key = 'contract_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$contracts = new \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel

try {
    $result = $apiInstance->v2ContractsByContractKeyPut($contract_key, $authorization, $contracts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->v2ContractsByContractKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **contracts** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel**](../Model/ContractsModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse**](../Model/ContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ContractsPost()`

```php
v2ContractsPost($authorization, $contracts): \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse
```

Add a Recurring Payment Agreement for a Customer with a Payment Method from Card Safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$contracts = new \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel

try {
    $result = $apiInstance->v2ContractsPost($authorization, $contracts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->v2ContractsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **contracts** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsModel**](../Model/ContractsModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\ContractsResponse**](../Model/ContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
